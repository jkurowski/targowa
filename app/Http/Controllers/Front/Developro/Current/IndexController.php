<?php

namespace App\Http\Controllers\Front\Developro\Current;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Inline;
use App\Models\Investment;
use App\Models\InvestmentSections;
use App\Models\Page;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(3);
        $investments = Investment::whereStatus(1)->get();
        $array = Inline::getElements(1);
        return view('front.developro.current.index', compact('page', 'investments', 'array'));
    }

    public function show($slug)
    {
        $page = Page::find(3);
        $investment = Investment::whereSlug($slug)->first();
        $sections = InvestmentSections::where('investment_id', $investment->id)->get();

        $galleryIdsArray = explode(',', $investment->galleries);
        $galleries = Gallery::whereIn('id', $galleryIdsArray)->with('photos')->get();

        return view('front.developro.current.show', compact('page', 'investment', 'sections', 'galleries'));
    }
}
