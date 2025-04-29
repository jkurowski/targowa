<?php

namespace App\Http\Controllers\Front\Developro;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Property;
use App\Models\RodoRules;
use App\Repositories\InvestmentRepository;

class InvestmentHouseController extends Controller
{
    private $repository;
    private $pageId;

    public function __construct(InvestmentRepository $repository)
    {
        $this->repository = $repository;
        $this->pageId = 3;
    }

    public function index($slug, Property $property)
    {
        $investment = $this->repository->findBySlug($slug);

        $property->increment('views');

        $page = Page::where('id', $this->pageId)->first();

        $similar = Property::where('id', '<>', $property->id)
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return view('front.investment_house.index', [
            'investment' => $investment,
            'property' => $property,
            'next_house' => $property->findNext($investment->id, $property->number_order),
            'prev_house' => $property->findPrev($investment->id, $property->number_order),
            'rules' => RodoRules::orderBy('sort')->whereStatus(1)->get(),
            'page' => $page,
            'similar' => $similar
        ]);
    }
}
