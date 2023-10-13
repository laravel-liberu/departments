<?php

namespace LaravelLiberu\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Departments\Http\Requests\ValidateDepartmentRequest;
use LaravelLiberu\Departments\Models\Department;

class Store extends Controller
{
    public function __invoke(ValidateDepartmentRequest $request, Department $department)
    {
        $department->fill($request->validated())->save();

        return [
            'message' => __('The department was successfully created'),
            'redirect' => 'administration.departments.edit',
            'param' => ['department' => $department->id],
        ];
    }
}
