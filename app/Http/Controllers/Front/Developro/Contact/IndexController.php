<?php

namespace App\Http\Controllers\Front\Developro\Contact;

use App\Http\Controllers\Controller;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ChatSend;
use App\Models\Page;
use App\Models\Recipient;
use App\Models\RodoRules;
use App\Models\RodoSettings;
use App\Notifications\ContactNotification;
use App\Repositories\Client\ClientRepository;
use App\Repositories\InvestmentRepository;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    private InvestmentRepository $repository;
    private ClientRepository $clientRepository;
    private int $pageId;

    public function __construct(InvestmentRepository $repository, ClientRepository $clientRepository)
    {
        $this->repository = $repository;
        $this->clientRepository = $clientRepository;
        $this->pageId = 3;
    }

    public function index($slug)
    {
        $investment = $this->repository->findBySlug($slug);
        $investmentPage = $investment->investmentPage()->where('slug', 'kontakt')->first();
        $menu_page = Page::where('id', $this->pageId)->first();

        return view('front.developro.investment.contact', [
            'investment' => $investment,
            'page' => $menu_page,
            'investment_page' => $investmentPage,
            'obligation' => RodoSettings::find(1),
            'rules' => RodoRules::orderBy('sort')->whereStatus(1)->get(),
        ]);
    }

    function form(ContactFormRequest $request, Recipient $recipient)
    {
        $recipient->notify(new ContactNotification($request));

        $client = $this->clientRepository->createClient($request);
        Mail::to(settings()->get("page_email"))->send(new ChatSend($request, $client));

        // TODO: Sprawdzić co to jest
//        if( count(Mail::failures()) == 0 ) {
//            $cookie_name = 'dp_';
//            foreach ($_COOKIE as $name => $value) {
//                if (stripos($name, $cookie_name) === 0) {
//                    Cookie::queue(
//                        Cookie::forget($name)
//                    );
//                }
//            }
//        }

        return redirect()->back()->with(
            'success',
            'Twoja wiadomość została wysłana.'
        );
    }
}
