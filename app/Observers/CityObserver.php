<?php

namespace App\Observers;

use Illuminate\Support\Str;

// CMS
use App\Models\City;

class CityObserver
{
    /**
     * Handle the article "saving" event.
     *
     * @param City $city
     * @return void
     */
    public function saving(City $city)
    {
        $city->slug = Str::slug($city->name);
    }
}
