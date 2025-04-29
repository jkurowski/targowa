<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

use App\Mail\ChatSend;
use App\Models\Inline;
use App\Models\Page;
use App\Repositories\Client\ClientRepository;
use Illuminate\Support\Facades\Mail;

use App\Models\Property;
use App\Models\Recipient;

use App\Notifications\ContactNotification;
use App\Notifications\PropertyNotification;
use Cookie;

class ContactController extends Controller
{
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    function index(){
        $page = Page::find(1);
        return view('front.contact.index', [
            'page' => $page,
            'array' => Inline::getElements(1)
        ]);
    }

    function property(ContactFormRequest $request, $id)
    {
        if(!$request->get('form_surname')) {
            Property::find($id)->notify(new PropertyNotification($request));
            Mail::to(settings()->get("page_email"))->send(new MailSend($request));
            (new \App\Models\RodoClient)->saveOrCreate($request);
        }
        return redirect()->back()->with(
            'success',
            'Twoja wiadomość została wysłana. W najbliższym czasie skontaktujemy się z Państwem celem omówienia szczegółów!'
        );
    }

    function contact(ContactFormRequest $request, Recipient $recipient)
    {
        $recipient->notify(new ContactNotification($request));

        $client = $this->repository->createClient($request);
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
