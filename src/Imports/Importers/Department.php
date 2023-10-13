<?php

namespace LaravelLiberu\Departments\Imports\Importers;

use LaravelLiberu\DataImport\Contracts\Importable;
use LaravelLiberu\DataImport\Models\DataImport;
use LaravelLiberu\Departments\Models\Department as Model;
use LaravelLiberu\Helpers\Services\Obj;

class Department implements Importable
{
    public function run(Obj $row, DataImport $import)
    {
        $this->import($row);
    }

    private function import($row)
    {
        Model::create($row->toArray());
    }
}
