<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create();

        Role::create([
        	'name' 		  => 'Superadmin',
        	'slug' 		  => 'superadmin',
        	'description' => "Tiene acceso a todo el sistema",
        	'special' 	  => 'all-access'
        ]);

        Role::create([
        	'name' 		  => 'Admin',
        	'slug' 		  => 'admin',
        	'description' => 'Tiene acceso limitado al sistema',
        	'special' 	  => 'no-access',
        ]);

        
    }
}
