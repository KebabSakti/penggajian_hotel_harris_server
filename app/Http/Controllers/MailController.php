<?php

namespace App\Http\Controllers;

use App\Mail\SalarySlipMail;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail()
    {
        // Mail::to('julian.aryo1989@gmail.com')->send(new SalarySlipMail());

        // return new SalarySlipMail();

        // $pdf = PDF::setPaper('A4')->loadView('export.employee');

        // return $pdf->save('./files/employee.pdf')->stream('employee.pdf');

        $data = DB::table('salaries as s')
            ->join('employees as e', 's.employee_id', '=', 'e.employee_id')
            ->select('s.*', 'e.*', 's.id as salary_id')
            ->first();

        $gross_income = $data->salary_basic + $data->salary_service_charge + $data->salary_overtime + $data->salary_incentive + $data->salary_meal_allowance + $data->salary_additional_service;
        $total_deduction = $data->salary_pph + $data->salary_jht + $data->salary_jp + $data->salary_bpjs + $data->salary_misc + $data->salary_service_charge;

        return view('export.salary_pdf', [
            'data' => $data,
            'gross_income' => $gross_income,
            'total_deduction' => $total_deduction
        ]);
    }
}
