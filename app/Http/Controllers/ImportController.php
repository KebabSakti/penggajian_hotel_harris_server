<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use App\Imports\SalaryImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function employee()
    {
    }

    public function salary(Request $request)
    {
        Excel::import(new SalaryImport, $request->file('file'));
    }
}
