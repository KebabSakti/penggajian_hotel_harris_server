<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SalaryExport implements FromView, ShouldAutoSize
{
    private $dateStart;
    private $dateEnd;

    public function __construct(string $dateStart, string $dateEnd)
    {
        $this->dateStart = Carbon::create($dateStart)->format('Y-m-d');
        $this->dateEnd = Carbon::create($dateEnd)->format('Y-m-d');
    }

    public function view(): View
    {
        $data = DB::table('salaries as s')
            ->join('employees as e', 's.employee_id', '=', 'e.employee_id')
            ->select('s.*', 'e.*', 's.id as salary_id')
            ->whereDate('s.salary_periode', '>=', $this->dateStart)
            ->whereDate('s.salary_periode', '<=', $this->dateEnd)
            ->get();

        return view('export.salary', ['datas' => $data]);
    }
}
