<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\SalaryImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function salary(Request $request)
    {
        $import = new SalaryImport;

        Excel::import($import, $request->file('file'));

        return response()->json($import->getData());
    }
}
