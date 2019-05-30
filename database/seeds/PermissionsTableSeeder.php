<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
		Permission::create([
        	'name' 			=> 'Navegar usuarios',
        	'slug' 			=> 'users.index',
        	'description' 	=> 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de usuarios',
        	'slug' 			=> 'users.show',
        	'description' 	=> 'Ver en detalle cada usuario del sistema',
        ]);

		 Permission::create([
		        	'name' 			=> 'Crear usuarios',
		        	'slug' 			=> 'users.create',
		        	'description' 	=> 'Crea nuevos usuarios del sistema',
		]);

        Permission::create([
        	'name' 			=> 'Editar usuarios',
        	'slug' 			=> 'users.edit',
        	'description' 	=> 'Edita cualquier usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar usuarios',
        	'slug' 			=> 'users.destroy',
        	'description' 	=> 'Elimina cualquier usuario del sistema',
        ]);

        //Roles
		Permission::create([
        	'name' 			=> 'Navegar roles',
        	'slug' 			=> 'roles.index',
        	'description' 	=> 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de roles',
        	'slug' 			=> 'roles.show',
        	'description' 	=> 'Ver en detalle cada rol del sistema',
        ]);

		 Permission::create([
		        	'name' 			=> 'Crear roles',
		        	'slug' 			=> 'roles.create',
		        	'description' 	=> 'Crea nuevos roles del sistema',
		]);
		 
        Permission::create([
        	'name' 			=> 'Editar roles',
        	'slug' 			=> 'roles.edit',
        	'description' 	=> 'Edita cualquier rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar roles',
        	'slug' 			=> 'roles.destroy',
        	'description' 	=> 'Elimina cualquier rol del sistema',
        ]);
       
   			     

    }
}
