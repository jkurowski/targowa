<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Inline;
use App\Models\Map;
use App\Models\Property;
use App\Models\RodoSettings;
use Illuminate\Http\Request;

// CMS
use App\Models\Slider;
use App\Models\RodoRules;
use Illuminate\Support\Facades\Cookie;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all()->sortBy("sort");
        $images = Image::where('gallery_id', 1)->orderBy("sort")->get();

        $obligation = RodoSettings::find(1);
        $rules = RodoRules::orderBy('sort')->whereStatus(1)->get();
        $popup = 0;

        $array = Inline::getElements(3);

        $similar = Property::select('properties.*', 'floors.number as floor_number')
            ->where('properties.status', '=', 1)
            ->where('properties.id', '<>', 4)
            ->join('floors', 'properties.floor_id', '=', 'floors.id')
            ->inRandomOrder()
            ->limit(6)
            ->get();

        if(settings()->get("popup_status") == "1") {
            if(settings()->get("popup_mode") == "1") {
                Cookie::queue('popup', null);
                $popup = 1;
            } else {
                if(Cookie::get('popup') == null){
                    $popup = 1;
                    Cookie::queue('popup', true);
                }
            }
        } else {
            Cookie::queue('popup', null);
        }

        $isAdmin = auth()->check();
        $markers = Map::all();

        return view('front.homepage.index', compact(
            'rules',
            'obligation',
            'sliders',
            'popup',
            'array',
            'isAdmin',
            'images',
            'markers',
            'similar'
        ));
    }
}
