<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class InvestmentArticles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'investment_id',
        'title',
        'date',
        'content',
        'content_entry',
        'meta_title',
        'meta_description',
        'meta_robots',
        'active',
        'file',
        'file_webp'
    ];
}
