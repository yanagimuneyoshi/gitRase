<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
  protected $fillable = ['name', 'photo', 'about', 'area_id', 'genre_id'];

  // public function scopeCategorySearch($query, $area, $genre )
  // {
  //   if (!empty($area)) {
  //     $query->where($area);
  //   }
  //   if (!empty($genre)) {
  //     $query->where($genre);
  //   }
  // }

  // public function scopeKeywordSearch($query, $keyword)
  // {
  //   if (!empty($search)) {
  //     $query->where('content', 'like', '%' . $keyword . '%');
  //   }
  // }
  public function getJson()
  {
    return $this->toJson();
  }
}
