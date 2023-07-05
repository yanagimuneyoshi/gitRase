<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  protected $fillable = ['name', 'photo', 'description', 'region_id', 'genre_id'];
}
