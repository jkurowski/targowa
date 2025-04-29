<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected static $logName = 'Galeria';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'text',
        'file',
        'file_webp',
        'sort',
        'status'
    ];

    /**
     * Get images
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Models\Image')->orderBy('sort');
    }
}
