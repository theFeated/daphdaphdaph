<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class PortfolioDetails extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'portfolio_details';

    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'category',
        'title',
        'client',
        'project_date',
        'project_url',
        'description',
    ];
}
