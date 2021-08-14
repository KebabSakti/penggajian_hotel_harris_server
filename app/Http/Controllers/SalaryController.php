<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Employee;
use App\Models\Tax;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('private.salary.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employee = Employee::all();
        $tax_status = Tax::all();

        return view('private.salary.create', [
            'employees' => $employee,
            'tax_status' => $tax_status,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salary $salary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        //
    }

    public function ajax(Request $request)
    {
        $col = ['s.salary_periode', 'e.employee_id', 'e.employee_status', 'e.employee_name', 'e.employee_department', 'e.employee_position', 'e.employee_onboard_date'];

        $start = Carbon::create($request->dtStart)->format('Y-m-d');
        $end = Carbon::create($request->dtEnd)->format('Y-m-d');

        $query = DB::table('salaries as s')
            ->join('employees as e', 's.employee_id', '=', 'e.employee_id')
            ->select('s.*', 'e.*');

        if (!empty($request->search['value'])) {
            $query->where(function ($q) use ($request, $col) {
                $q->where('s.employee_id', 'like', '%' . $request->search['value'] . '%')
                    ->orWhere('e.employee_status', 'like', '%' . $request->search['value'] . '%')
                    ->orWhere('e.employee_name', 'like', '%' . $request->search['value'] . '%')
                    ->orWhere('e.employee_department', 'like', '%' . $request->search['value'] . '%')
                    ->orWhere('e.employee_position', 'like', '%' . $request->search['value'] . '%');
            });
        }

        $query = $query->whereDate('s.salary_periode', '>=', $start)
            ->whereDate('s.salary_periode', '<=', $end);

        //total record
        $total = $query->get()->count();

        $table = $query->orderBy($col[$request->order[0]['column']], $request->order[0]['dir'])
            ->offset($request->start)
            ->limit($total)
            ->get();

        //total record with search value
        $filter = (!empty($request->search['value'])) ?
            $table->count()
            :
            $total;

        $data = [];
        foreach ($table as $r) {
            $data[] = [
                Carbon::createFromFormat('Y-m-d', $r->salary_periode, 'Asia/Kuala_Lumpur')->format('M Y'),
                $r->employee_id,
                $r->employee_status,
                $r->employee_name,
                $r->employee_department,
                $r->employee_position,
                $r->employee_onboard_date,
                $r->salary_account_number,
                $r->salary_npwp,
                $r->salary_tax_status,
                $r->salary_working_day,
                $r->salary_checkin_day,
                $r->salary_day_total,
                number_format($r->salary_per_day),
                number_format($r->salary_basic),
                number_format($r->salary_additional_service),
                number_format($r->salary_overtime),
                number_format($r->salary_allowance),
                number_format($r->salary_meal_allowance),
                number_format($r->salary_incentive),
                number_format($r->salary_service_charge),
                number_format($r->salary_pph),
                number_format($r->salary_jht),
                number_format($r->salary_jp),
                number_format($r->salary_bpjs),
                number_format($r->salary_misc),
                number_format($r->salary_final),
                $r->salary_description ?? '-',
                '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mainModal" data-link=""><i
                class="mdi mdi-pencil"></i> Detail</button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mainModal" data-link=""><i
                class="mdi mdi-pencil"></i> Edit</button>
                 <form action="" method="POST" style="display: inline;">
                    <input type="hidden" name="_token" value="' . csrf_token() . '">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger"><i
                    class="mdi mdi-close-circle"></i> Hapus</button>
                 </form>',
            ];
        }

        return response()->json([
            'draw' => (int)$request->draw++,
            'recordsTotal' => $total,
            'recordsFiltered' => $filter,
            'data' => $data
        ]);
    }
}
