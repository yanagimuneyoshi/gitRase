<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
  protected $table = 'favorites'; // テーブル名を指定
  protected $fillable = ['user_ID', 'shop_ID'];
}

