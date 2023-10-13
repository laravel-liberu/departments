<?php

namespace LaravelLiberu\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Departments\Forms\Builders\DepartmentForm;
use LaravelLiberu\Departments\Models\Department;

class Edit extends Controller
{
    public function __invoke(Department $department, DepartmentForm $form)
    {
        return ['form' => $form->edit($department)];
    }
}
