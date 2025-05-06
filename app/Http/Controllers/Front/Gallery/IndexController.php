<?php

namespace App\Http\Controllers\Front\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Page;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $repository;
    public function __construct(GalleryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('front.gallery.index', [
            'galleries' => $this->repository->allSort('ASC'),
            'page' => Page::where('id', 7)->first(),
        ]);
    }
}
