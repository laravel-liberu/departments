<?php

namespace LaravelLiberu\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Departments\Forms\Builders\DepartmentForm;

class Create extends Controller
{
    public function __invoke(DepartmentForm $form)
    {
        return ['form' => $form->create()];
    }
}
