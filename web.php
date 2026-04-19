<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExrController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/show/{value}', [ExrController::class, 'show']);

Route::get('/add/{num1}/{num2}', [ExrController::class, 'add']);

Route::get('/products', function () {
    return view('products');
});
Route::get('/item', [ExrController::class,'showItem']);


Route::get('/print/{data1}/{data2}', [ExrController::class, 'print_data']);


Route::get('/student/{st_name}/{phone}/{bus_no}', [StudentController::class, 'student_data']);


Route::get('/company', [CompanyController::class, 'cmp']);

Route::get('/comps', [CompanyController::class, 'camps']);

Route::get('/depts', [CompanyController::class, 'my_depts']);
