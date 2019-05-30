<?php

use Illuminate\Database\Seeder;
use App\Actividade;


class ActividadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actividades')->delete();
        $DataActividades = ['Comercial', 'Industrial', 'Servicios', 'Financiero', 'Otros'];
        foreach ($DataActividades as $key => $value) {
        	$Actividades = new Actividade();
        	$Actividades->name = $value;
        	$Actividades->save();
        }
    }
}
