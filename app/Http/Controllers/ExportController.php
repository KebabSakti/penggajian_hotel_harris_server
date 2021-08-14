<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use App\Exports\SalaryExport;
use App\Exports\SalarySkeletonExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class ExportController extends Controller
{
    public function employee()
    {
        return Excel::download(new EmployeeExport, 'users.xlsx');
    }

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
}
