<?php

namespace App\Http\Controllers\Front\Static;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Inline;
use App\Models\Investment;
use App\Models\Map;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function investor()
    {
        $page = Page::find(1);
        return view('front.static.investor', compact('page'));
    }

    public function investment()
    {
        $images = Image::where('gallery_id', 1)->orderBy("sort")->get();

        $page = Page::find(2);
        $markers = Map::all();
        return view('front.static.investment', compact('page', 'markers', 'images'));
    }

    public function amenities()
    {
        $markers = Map::all();
        $page = Page::find(3);
        return view('front.static.amenities', compact('page', 'markers'));
    }

    public function packages()
    {

        $silver = Image::where('gallery_id', 4)->orderBy("sort")->get();
        $golden = Image::where('gallery_id', 5)->orderBy("sort")->get();
        $platinium = Image::where('gallery_id', 6)->orderBy("sort")->get();

        $page = Page::find(4);
        return view('front.static.packages', compact('page', 'silver', 'golden', 'platinium'));
    }

    public function financing()
    {
        $page = Page::find(5);
        return view('front.static.financing', compact('page'));
    }

    public function lokalizacja()
    {
        $page = Page::find(7);
        $markers = Map::all();
        return view('front.static.lokalizacja', compact('page', 'markers'));
    }

    public function gallery()
    {
        $page = Page::find(5);
        return view('front.static.gallery', compact('page'));
    }
}
