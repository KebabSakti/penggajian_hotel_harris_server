<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class EmployeeExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        // return Employee::limit(5)->get();

        return view('export.employee');
    }
}
