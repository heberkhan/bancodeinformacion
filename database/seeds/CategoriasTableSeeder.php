<?php

use Illuminate\Database\Seeder;
use App\Categoria;
class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();
        $categoria1 = [
        	'Ferreterías',
        	'Droguerías',
        	'Casas de Cambio',
        	'Restaurantes',
        	'Agencias de Viaje',
        	'Moteles',
        	'Floristerías',
        	'Inmobiliarias',
        	'Disfraces',
        	'Librerías',
        	'Teléfonos',
        	'Papelerías',
        	'Cades, Supercades y Rapicades',
        	'Peluquerías',
        	'Tiendas Naturistas',
        	'Restaurante a Domicilio',
        	'Centro de belleza y estética',
        	'Supermercados',
        	'Ópticas',
        	'Vidrios',
        	'Productos Químicos',
        	'Repuestos para motocicletas',
        	'Fundaciones',
        	'Materiales eléctricos',
        	'Panaderías',
        	'Bicicletas',
        	'Agencias de publicidad',
        	'Instrumentos musicales',
        	'Pastelería',
        	'Maderas',
        	'Constructoras',
        	'Llantas',
        	'Dotaciones para empresas',
        	'Comidas rápidas',
        	'Viveros',
        	'Asaderos',
        	'Artículos ortopédicos',
        	'Artículos para adultos',
        	'Reciclajes',
        	'Estampados',
        	'Radiodifusoras',
        	'Farmacias',
        ];

        $categoria2 = [
        	'Plásticos',
        	'Telas',
        	'Repuestos automotrices',
        	'Confecciones',
        	'Uniformes',
        	'Aire acondicionado',
        ];

        $categoria3 = [
        	'Hoteles',
        	'Transporte terrestre de pasajeros',
        	'Fondo de pensiones y cesantías',
        	'Clínicas veterinarias',
        	'Taxis',
        	'Agencias de empleo',
        	'Laboratorio Clínico',
        	'Notarías',
        	'Salones para recepciones',
        	'Clínicas',
        	'Escuelas de fútbol',
        	'Iglesias y parroquias católicas',
        	'Iglesias',
        	'Centros de rehabilitación',
        	'Empleos temporales',
        	'Ecografías',
        	'Abogados',
        	'Terminales de transporte terrestre',
        	'Cooperativas',
        	'Salud ocupacional',
        	'Laboratorios farmacéuticos',
        	'Mariachis',
        	'Clínicas odontológicas',
        	'Alquiler de lavadoras',
        	'Alquiler de ropa',
        	'Transporte puerta a puerta',
        	'Centros médicos',
        	'Spa',
        	'Hospitales',
        	'Trasteos',
        	'Estaciones',
        	'Transporte terrestre de carga',
        	'Transporte especial de pasajeros',
        	'Hogares geriátricos',
        	'Comisarías de familia',
        	'Cajas de compensación familiar',
        	'Iglesias cristianas',
        	'Guarderías infantiles',
        	'Servicios de formación',
        ];

        $categoria4 = [
    		'Bancos',
        ];

        $categoria5 = [
        	'Otros',
        ];

        foreach ($categoria1 as $key => $value) {
        	$categoria = new Categoria();
        	$categoria->name = $value;
        	$categoria->actividades_id = 1;
        	$categoria->save();
        };
        foreach ($categoria2 as $key => $value) {
        	$categoria = new Categoria();
        	$categoria->name = $value;
        	$categoria->actividades_id = 2;
        	$categoria->save();
        };

        foreach ($categoria3 as $key => $value) {
        	$categoria = new Categoria();
        	$categoria->name = $value;
        	$categoria->actividades_id = 3;
        	$categoria->save();
        };

        foreach ($categoria4 as $key => $value) {
        	$categoria = new Categoria();
        	$categoria->name = $value;
        	$categoria->actividades_id = 4;
        	$categoria->save();
        };

        foreach ($categoria5 as $key => $value) {
        	$categoria = new Categoria();
        	$categoria->name = $value;
        	$categoria->actividades_id = 5;
        	$categoria->save();
        };




    }
}
