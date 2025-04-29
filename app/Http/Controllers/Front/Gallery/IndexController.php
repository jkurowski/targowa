<?php

namespace App\Http\Controllers\Front\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.gallery.index', [
            'galleries' => Gallery::all(),
            'page' => Page::where('id', 7)->first(),
        ]);
    }
}
