<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\Departments\Http\Controllers\Create;
use LaravelLiberu\Departments\Http\Controllers\Destroy;
use LaravelLiberu\Departments\Http\Controllers\Edit;
use LaravelLiberu\Departments\Http\Controllers\InitTable;
use LaravelLiberu\Departments\Http\Controllers\Options;
use LaravelLiberu\Departments\Http\Controllers\Store;
use LaravelLiberu\Departments\Http\Controllers\TableData;
use LaravelLiberu\Departments\Http\Controllers\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/administration/departments')
    ->as('administration.departments.')
    ->group(function () {
        Route::get('create', Create::class)->name('create');
        Route::post('', Store::class)->name('store');
        Route::get('{department}/edit', Edit::class)->name('edit');

        Route::patch('{department}', Update::class)->name('update');

        Route::delete('{department}', Destroy::class)->name('destroy');

        Route::get('initTable', InitTable::class)->name('initTable');
        Route::get('tableData', TableData::class)->name('tableData');

        Route::get('options', Options::class)->name('options');
    });
