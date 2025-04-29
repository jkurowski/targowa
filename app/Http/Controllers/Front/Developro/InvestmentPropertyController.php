<?php

namespace App\Http\Controllers\Front\Developro;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Investment;
use App\Models\Page;
use App\Models\Property;
use App\Models\RodoRules;
use App\Models\RodoSettings;

class InvestmentPropertyController extends Controller
{
    private $pageId;

    public function __construct()
    {
        $this->pageId = 6;
    }

    ///{slug}/{property},{propertySlug},{propertyFloor},{propertyRooms},{propertyArea}

    public function index(Property $property)
    {
        $investment = Investment::find(1);
        $page = Page::where('id', $this->pageId)->first();
        $floor = Floor::find($property->floor_id);

        $similar = Property::select('properties.*', 'floors.number as floor_number')
            ->where('rooms', $property->rooms)
            ->where('properties.id', '<>', $property->id)
            ->join('floors', 'properties.floor_id', '=', 'floors.id')
            ->inRandomOrder()
            ->limit(6)
            ->get();

        return view('front.investment_property.index', [
            'investment' => $investment,
            'floor' => $floor,
            'property' => $property,
            'rules' => RodoRules::orderBy('sort')->whereStatus(1)->get(),
            'next' => $property->findNext($investment->id, $property->id, $property->floor_id),
            'prev' => $property->findPrev($investment->id, $property->id, $property->floor_id),
            'page' => $page,
            'similar' => $similar,
            'obligation' => RodoSettings::find(1)
        ]);
    }

    public function filter(Request $request)
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
