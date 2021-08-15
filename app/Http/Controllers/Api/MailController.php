<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\SalarySlipMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class MailController extends Controller
{
    public function salary(Request $request)
    {
        $query = DB::table('salaries as s')
            ->join('employees as e', 's.employee_id', '=', 'e.employee_id')
            ->select('s.*', 'e.*', 's.id as salary_id')
            ->whereIn('s.id', $request->ids)
            ->get();

        foreach ($query as $item) {
            $data = $item;

            $gross_income = $data->salary_basic + $data->salary_service_charge + $data->salary_overtime + $data->salary_incentive + $data->salary_meal_allowance + $data->salary_additional_service;
            $total_deduction = $data->salary_pph + $data->salary_jht + $data->salary_jp + $data->salary_bpjs + $data->salary_misc + $data->salary_service_charge;

            $file = $item->employee_id . '_' . $item->salary_id . '_' . Str::uuid() . '.pdf';

            PDF::setPaper('A4')->loadView('export.salary_pdf', [
                'data' => $data,
                'gross_income' => $gross_income,
                'total_deduction' => $total_deduction
            ])->save('./files/' . $file);

            Mail::to($item->employee_email)->send(new SalarySlipMail($item, $file));

            unlink('./files/' . $file);
        }

        return response()->json([], 200);
    }
}
