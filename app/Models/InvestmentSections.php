<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvestmentSections extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_id',
        'modaltytul',
        'modaleditor',
        'modaleditortext',
        'modallink',
        'modallinkbutton',
        'file',
        'file_alt',
        'file_width',
        'file_height',
        'type',
        'sort'
    ];
}