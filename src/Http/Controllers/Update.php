<?php

namespace LaravelLiberu\Departments\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Departments\Http\Requests\ValidateDepartmentRequest;
use LaravelLiberu\Departments\Models\Department;

class Update extends Controller
{
    public function __invoke(ValidateDepartmentRequest $request, Department $department)
    {
        $department->update($request->validated());

        return ['message' => __('The department was successfully updated')];
    }
}
