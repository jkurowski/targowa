<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Investment;
use Illuminate\Http\Request;

// CMS
use App\Models\Page;
use App\Repositories\InvestmentRepository;

class InvestmentController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 6;
    }

    public function index(Request $request)
    {
        $investment = $this->repository->find(1);

        $investment_room = $investment->load(array(
            'properties' => function ($query) use ($request) {
                if ($request->input('s_pokoje')) {
                    $query->where('rooms', $request->input('s_pokoje'));
                }

                if (!is_null($request->input('s_pietro'))) {
                    $query->whereHas('floor', function ($q) use ($request) {
                        $q->where('number', $request->input('s_pietro'));
                    });
                }

                if ($request->input('s_metry')) {
                    $range = explode('-', $request->input('s_metry'));
                    if (count($range) === 2) {
                        $min = (float) $range[0];
                        $max = (float) $range[1];
                        $query->whereBetween('area', [$min, $max]);
                    } else {
                        $query->where('area', $request->input('s_metry')); // fallback if not a range
                    }
                }
            },
            'properties.floor'
        ));

        $properties = $investment_room->properties;
        $floors = Floor::orderBy('position')->get();

        $page = Page::where('id', $this->pageId)->first();
        return view('front.developro.investment.index', [
            'investment' => $investment,
            'properties' => $properties,
            'uniqueRooms' => $this->repository->getUniqueRooms($investment_room->properties),
            'page' => $page,
            'floors' => $floors
        ]);
    }

    public function search(Request $request)
    {
        $query = Property::query();

        // Apply filters based on request parameters
        if ($request->has('rooms') && !empty($request->input('rooms'))) {
            $query->where('rooms', $request->input('rooms'));
        }

        if ($request->has('area') && !empty($request->input('area'))) {
            $query->where('area', $request->input('area'));
        }

        if ($request->has('floor') && !empty($request->input('floor'))) {
            $query->whereHas('floor', function ($q) use ($request) {
                $q->where('id', $request->input('floor'));
            });
        }

        // Get the filtered properties
        $properties = $query->get();

        // Get distinct values for each filter based on filtered properties
        $areas = $properties->pluck('area')->unique()->sort()->values();
        $rooms = $properties->pluck('rooms')->unique()->sort()->values();
        $floors = $properties->pluck('floor.id', 'floor.number')->sort();

        return response()->json([
            'properties' => $properties,
            'filters' => [
                'areas' => $areas,
                'rooms' => $rooms,
                'floors' => $floors,
            ],
        ]);
    }
}
