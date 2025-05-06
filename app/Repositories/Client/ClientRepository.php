<?php namespace App\Repositories\Client;

use App\Models\Client;
use App\Models\ClientFile;
use App\Models\ClientMessage;
use App\Models\ClientMessageArgument;
use App\Models\ClientRules;
use App\Models\Property;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\DataTables;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{
    protected $model;
    protected $client_rules;
    protected $client_files;

    public function __construct(Client $model, ClientRules $client_rules, ClientFile $client_files)
    {
        parent::__construct($model);
        $this->client_rules = $client_rules;
        $this->client_files = $client_files;
    }

    public function getDataTable(){
        $list = $this->model->latest()->get();
        return Datatables::of($list)
            ->addColumn('actions', function ($row) {
                return view('admin.crm.client.actions', ['row' => $row]);
            })
            ->editColumn('created_at', function ($row){
                return $row->created_at->diffForHumans();
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function getUserRodo($client, $attributes = null): object
    {
        return $this->client_rules->where('client_id', $client->id)
            ->when(isset($attributes['status']), function($query) use ($attributes) {
                $query->where('status', $attributes['status']);
            })
            ->get();
    }

    public function getUserFiles($client): object
    {
        return $this->client_files->where('client_id', $client->id)
            ->when($user_id = auth()->id(), function($query) use ($user_id) {
                $query->where("user_id", $user_id);
            })
            ->get(['id', 'user_id', 'name', 'description', 'file', 'mime', 'size', 'created_at', 'updated_at']);
    }

    public function createClient($attributes, $property = null)
    {
        $utm_array = array_filter($attributes->cookie());
        unset($utm_array['XSRF-TOKEN'], $utm_array['laravel_session']);

        try {
            $client = $this->model->updateOrCreate(
                ['mail' => $attributes['form_email']],
                [
                    'phone' => $attributes['form_phone'] ?? null,
                    'name' => $attributes['form_name'],
                    'updated_at' => now()
                ]
            );
            Log::channel('createUser')->info('Request Data', [
                'mail' => $attributes['form_email'],
                'phone' => $attributes['form_phone'] ?? null,
                'name' => $attributes['form_name'],
            ]);
            Log::channel('createUser')->info($client->wasRecentlyCreated ?
                'Client was created: ' . $client->id :
                'Client was updated: ' . $client->id
            );
        } catch (\Exception $e) {
            Log::channel('createUser')->error('Error during updateOrCreate: ' . $e->getMessage());
            Log::channel('createUser')->error('Trace', ['trace' => $e->getTraceAsString()]);
        }

        if($client->id){

            $source = strtok($attributes->headers->get('referer'), '?');

            $msg = new ClientMessage;
            $msg->client_id = $client->id;
            $msg->message = $attributes['form_message'];
            $msg->ip = $attributes->ip();
            $msg->source = $source;

            $arguments = [];
            if ($property) {
                $propertyMappings = [
                    'investment_id' => $property->investment_id,
                    'building_id' => $property->building_id,
                    'floor_id' => $property->floor_id,
                    'property_id' => $property->id,
                    'rooms' => $property->rooms,
                    'area' => $property->area,
                ];
                $arguments = array_merge($propertyMappings, $utm_array);
            }

            if ($source && isset($attributes['is_external_source'])) {
                $arguments['is_external'] = $attributes['is_external_source'];
            }

            if (isset($attributes['investment_id']) && isset($attributes['investment_name'])) {
                $arguments = array_merge(
                    $arguments,
                    ['investment_id' => $attributes['investment_id']],
                    ['investment_name' => $attributes['investment_name']]
                );
            }

            if (isset($attributes['property_name'])) {
                $arguments = array_merge($arguments, ['property_name' => $attributes['property_name']]);
            }

            if (!empty($arguments)) {
                $msg->arguments = json_encode($arguments);
            }

            $msg->save();

            foreach($utm_array as $key => $item) {
                $cma = new ClientMessageArgument();
                $cma->argument = str_replace('dp_', '', $key);
                $cma->value = $item;
                $cma->msg_id = $msg->id;
                $cma->save();
            }

        }

        return $client;
    }
}
