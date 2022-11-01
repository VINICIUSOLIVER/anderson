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

    $docuemntDate = (new \DateTime())->format("l, d F Y");
    $companyAddress = "Mr T McNally <br/>
                        Tommys Tax <br/>
                        Kingfisher House Business Centre <br/>
                        21-23 Elmfield Way <br/>
                        BROMLEY <br/>
                        BR1 1LT";
    
    $clientName = "Maurice Doherty";
    $clientUTR = "7902735721";
    $complaintDate = "22/12/2021";
    $verificationDate = "11/01/2022";
    $dates = [
        "15/02/2022", 
        "21/03/2022", 
        "22/03/2022", 
        "22/03/2022", 
        "17/05/2022"
    ];

    return view('prints.complaints')->with([
        "documentDate" => $docuemntDate,
        "companyAddress" => $companyAddress,
        "clientName" => $clientName,
        "clientUTR" => $clientUTR,
        "complaintDate" => $complaintDate,
        "verificationDate" => $verificationDate,
        "dates" => join($dates, ", ")
    ]);

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

