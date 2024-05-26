<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class AboutMe extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'about_me';

    protected $fillable = [
        'bio', 'title', 'image', 'birthday', 'age', 'phone', 'city', 'description'
      ];
}
