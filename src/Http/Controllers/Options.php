<?php

namespace LaravelLiberu\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Departments\Models\Department;
use LaravelLiberu\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Department::class;
}
