<?php

namespace LaravelLiberu\Departments\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Departments\Models\Department;
use LaravelLiberu\Tables\Contracts\Table;

class DepartmentTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/departments.json';

    public function query(): Builder
    {
        return Department::selectRaw('
            departments.id, departments.name, departments.description
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
