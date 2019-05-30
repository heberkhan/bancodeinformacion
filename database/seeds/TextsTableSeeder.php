<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('texts')->insert([
          'slogan' => Str::random(10),
          'titulo' => Str::random(10),
          'txtPrincipal' => Str::random(100),
          'facebook' => Str::random(10),
          'twitter' => Str::random(10),
          'instagram' => Str::random(10),
          'youtube' => Str::random(10),
          'email1'  => Str::random(10).'@gmail.com',
          'email2'  => Str::random(10).'@gmail.com',
          'webAlcaldia' => Str::random(10),
          'direccion' => Str::random(10),
          'telefono1' => Str::random(10),
          'telefono2' => Str::random(10),
      ]);
    }
}
