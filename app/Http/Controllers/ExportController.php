<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SalaryExport;
use App\Exports\SalarySkeletonExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class ExportController extends Controller
{
    public function salary(Request $request)
    {
        $start = Carbon::parse($request->start)->format('d-m-Y');
        $end = Carbon::parse($request->end)->format('d-m-Y');
        $postfix = $start . ' ' . $end;

        $filename = 'Salary ' . $postfix . '.' . $request->type;

        return Excel::download(new SalaryExport($request->start, $request->end), $filename);
    }

    public function salary_skeleton()
    {
        return Excel::download(new SalarySkeletonExport, 'File Import.csv');
    }

    public function salary_pdf(Request $request)
    {
        $data = DB::table('salaries as s')
            ->join('employees as e', 's.employee_id', '=', 'e.employee_id')
            ->select('s.*', 'e.*', 's.id as salary_id')
            ->where('s.id', $request->id)
            ->first();

        $gross_income = $data->salary_basic + $data->salary_service_charge + $data->salary_overtime + $data->salary_incentive + $data->salary_meal_allowance + $data->salary_additional_service;
        $total_deduction = $data->salary_pph + $data->salary_jht + $data->salary_jp + $data->salary_bpjs + $data->salary_misc + $data->salary_service_charge;

        $postfix = mt_rand(100000, 999999);

        $file = 'Salary Slip ' . $data->employee_name . '_' . $postfix . '.pdf';

        $pdf = PDF::setPaper('A4')->loadView('export.salary_pdf', [
            'data' => $data,
            'gross_income' => $gross_income,
            'total_deduction' => $total_deduction
        ]);

        return $pdf->downlad($file);
    }
}
