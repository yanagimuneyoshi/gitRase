<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
  protected $fillable = ['name', 'photo', 'about', 'area_id', 'genre_id'];
}
