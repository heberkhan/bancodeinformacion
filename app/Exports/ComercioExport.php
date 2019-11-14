<?php

namespace App\Exports;

use App\Comercio;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ComercioExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Tipo de Persona',
            'Nombre del Comercio',
            'Nit',
            'Email',
            'Dirección Establecimiento',
            'Barrio id',
            'Dirección Notificaciones',
            'Actividad Comercial',
            'Categoría',
            'Impuesto 1',
            'Impuesto 2',
            'Impuesto 3',
            'Impuesto 4',
            'Impuesto 5',
            'Impuesto 6',
            'Impuesto 7',
            'Impuesto 8',
            'Requisito 1',
            'Requisito 2',
            'Requisito 3',
            'Requisito 4',
            'Requisito 5',
            'Requisito 6',
            'Requisito 7',
            'Requisito 8',
            'Teléfono',
            'Celular',
            'Id Digitador',
            'Descripcion',
            'Logo',
            'QR',
            'Etiquetas',
            'Cantidad PQR',
            'Fecha Creación',
            'Fecha Actualizacion'
        ];
    }
    public function collection()
    {
        return Comercio::all();
    }
}
