<?php

namespace App\Http\Controllers;

use App\Mail\SalarySlipMail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail()
    {
        // Mail::to('julian.aryo1989@gmail.com')->send(new SalarySlipMail());

        return new SalarySlipMail();

        // $pdf = PDF::setPaper('A4')->loadView('export.employee');

        // return $pdf->save('./files/employee.pdf')->stream('employee.pdf');
    }
}
