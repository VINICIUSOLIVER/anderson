<?php

use App\Pdf\Pdf;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('prints.repayments');

//     $view = view('prints.repayments')
//         ->render();

//     $pdf = new Pdf($view, "bla");

//     return $pdf->download();

// });

// Complaints
Route::get('/', function () {
    return view('prints.complaints');
    $view = view('prints.complaints')
        ->render();

    $pdf = new Pdf($view, "bla");

    return $pdf->download();

});

// Investigations
// Route::get('/', function () {
//     $view = view('prints.investigations')
//         ->render();

//     $pdf = new Pdf($view, "bla");

//     return $pdf->download();
// });

// Overpayment
// Route::get('/', function () {
//     $view = view('prints.overpayment')
//         ->render();

//     $pdf = new Pdf($view, "bla");

//     return $pdf->download();
// });

