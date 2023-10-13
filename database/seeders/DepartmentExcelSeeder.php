<?php

namespace LaravelLiberu\Departments\Database\Seeders;

use LaravelLiberu\DataImport\Services\ExcelSeeder;

class DepartmentExcelSeeder extends ExcelSeeder
{
    protected string $type = 'departments';
    protected string $filename = 'departments.xlsx';
}
