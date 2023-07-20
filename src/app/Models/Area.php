<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Area extends Model
{

  public function scopeCategorySearch($query, $area_id)
  {
    if (!empty($area_id)) {
      $query->where('area_id', $area_id);
    }
  }

  public function scopeKeywordSearch($query, $search)
  {
    if (!empty($search)) {
      $query->where('content', 'like', '%' . $search . '%');
    }
  }

}
