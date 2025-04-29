<?php

namespace App\Http\Controllers\Front\Developro\Completed;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Investment;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $page = Page::find(1);
        $investments = Investment::whereStatus(2)->with('carousel')->get();
        return view('front.developro.completed.index', compact('page', 'investments'));
    }

    public function show($slug)
    {
        $page = Page::find(1);
        $investment = Investment::whereSlug($slug)->first();

        return view('front.developro.completed.show', compact('page', 'investment'));
    }
}
