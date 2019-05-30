<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TextsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        // $this->call(ActividadesTableSeeder::class);
        // $this->call(CategoriasTableSeeder::class);
    }
}
