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

Route::get('/', function () {
    $view = view('prints.repayment')
        ->render();

    $pdf = new Pdf($view, "bla");
    $pdf->margins(10, 10, 10, 10);

    return $pdf->download();

});

// Complaints
// Route::get('/', function () {
//     $documentDate = (new \DateTime())->format("l, d F Y");
//     $companyAddress = "Mr T McNally <br/>
//                         Tommys Tax <br/>
//                         Kingfisher House Business Centre <br/>
//                         21-23 Elmfield Way <br/>
//                         BROMLEY <br/>
//                         BR1 1LT";
    
//     $clientName = "Maurice Doherty";
//     $clientUTR = "7902735721";
//     $complaintDate = "22/12/2021";
//     $verificationDate = "11/01/2022";
//     $dates = [
//         "15/02/2022", 
//         "21/03/2022", 
//         "22/03/2022", 
//         "22/03/2022", 
//         "17/05/2022"
//     ];

    // return view('prints.complaint_revenue')->with([
    //     "documentDate" => $documentDate,
    //     "companyAddress" => $companyAddress,
    //     "clientName" => $clientName,
    //     "clientUTR" => $clientUTR,
    //     "complaintDate" => $complaintDate,
    //     "verificationDate" => $verificationDate,
    //     "dates" => join($dates, ", ")
    // ]);

    // $view = view('prints.complaint_revenue')
    //     ->with([
    //         "documentDate" => $documentDate,
    //         "companyAddress" => $companyAddress,
    //         "clientName" => $clientName,
    //         "clientUTR" => $clientUTR,
    //         "complaintDate" => $complaintDate,
    //         "verificationDate" => $verificationDate,
    //         "dates" => join($dates, ", ")
    //     ])->render();

//     $pdf = new Pdf($view, "bla");

//     return $pdf->download()
// });

// Investigations
// Route::get('/', function () {
//     $documentDate = (new \DateTime())->format("l, d F Y");
//     $companyAddress = "Mr T McNally <br/><br/>
//                         Tommys Tax <br/><br/>
//                         Kingfisher House Business Centre <br/>
//                         21-23 Elmfield Way <br/>
//                         BROMLEY <br/><br/>
//                         BR1 1LT";

//     $clientName = "Maurice Doherty";
//     $clientUTR = "7902735721";
//     $clientREF = "123456789";

//     $clientCompanyAddress = "Block 17 Lode Lane, Solihull, B92 8NW";
//     $natureOfBusiness = "Production Operative, overseeing the quality of the finished cars before they are despatched from the site.";
//     $otherExpense = "communication, technical devices broad band, stationary, working from home and specialist health and safety uniform with washing expenses, food when working outside of original hours.";
//     $companyName = "Maurice Doherty";

        // $agentName = "My Tax Back ltd";
        // $agentSortCode = "231470";
        // $agentAccountNumber = "231470";

//     return view('prints.investigation_expense')
//         ->with([
//             "documentDate" => $documentDate,
//             "companyAddress" => $companyAddress,
//             "clientName" => $clientName,
//             "clientUTR" => $clientUTR,
//             "clientREF" => $clientREF,
//             "clientCompanyAddress" => $clientCompanyAddress,
//             "natureOfBusiness" => $natureOfBusiness,
//             "otherExpense" => $otherExpense,
//             "companyName" => $companyName,
//             "agentName" => $agentName,
//             "agentSortCode" => $agentSortCode,
//             "agentAccountNumber" => $agentAccountNumber
//         ]);

//     $view = view('prints.investigation_expense')
//         ->render();

//     $pdf = new Pdf($view, "bla");

//     return $pdf->download();
// });

// Overpayment
// Route::get('/', function () {
//     $documentDate = (new \DateTime())->format("l, d F Y");
//     $companyAddress = "Mr T McNally <br/>
//                         Tommys Tax <br/>
//                         Kingfisher House Business Centre <br/>
//                         21-23 Elmfield Way <br/>
//                         BROMLEY <br/>
//                         BR1 1LT";

//     $clientName = "Maurice Doherty";
//     $clientUTR = "7902735721";
//     $taxYear = "2017/18";
//     $overpayment = "£1,237.00";
//     $agentName = "My Tax Back ltd";
//     $agentSortCode = "231470";
//     $agentAccountNumber = "231470";

//     return view('prints.overpayment')->with([
//         "documentDate" => $documentDate,
//         "companyAddress" => $companyAddress,
//         "clientName" => $clientName,
//         "clientUTR" => $clientUTR,
//         "taxYear" => $taxYear,
//         "overpayment" => $overpayment,
//         "agentName" => $agentName,
//         "agentSortCode" => $agentSortCode,
//         "agentAccountNumber" => $agentAccountNumber
//     ]);

//     $view = view('prints.overpayment')
//         ->render();

//     $pdf = new Pdf($view, "bla");

//     return $pdf->download();
// });

// Route::get('/', function () {
//     $view = view('prints.repayment')
//         ->render();

//     $pdf = new Pdf($view, "bla");
//     $pdf->margins(10, 10, 10, 10);

//     return $pdf->download();
// });

