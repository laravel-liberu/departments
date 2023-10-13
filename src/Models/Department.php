<?php

namespace LaravelLiberu\Departments\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\Tables\Traits\TableCache;

class Department extends Model
{
    use HasFactory, TableCache;

    protected $guarded = ['id'];
}
