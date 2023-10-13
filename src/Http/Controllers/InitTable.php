<?php

namespace LaravelLiberu\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Departments\Tables\Builders\DepartmentTable;
use LaravelLiberu\Tables\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = DepartmentTable::class;
}
