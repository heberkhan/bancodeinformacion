<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('images')->insert([
          'logo2' => Str::random(10),
          'slider1' => Str::random(10),
          'slider2' => Str::random(100),
          'slider3' => Str::random(10),

      ]);
    }
}
