<?php

namespace App\Exports;

use App\Comercio;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Contracts\View\View;

class ComerciosExport implements FromArray
{
  protected $comercios;

    public function __construct(array $comercios)
    {
        $this->comercios = $comercios;
    }

    public function array(): array
    {
        return $this->comercios;
    }
}
