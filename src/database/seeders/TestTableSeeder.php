<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $param = [
      'id'  =>  '1',
      'name' => '東京都',
      'password' => 'gjgj',
    ];
    DB::table('sample')->insert($param);
  }
}