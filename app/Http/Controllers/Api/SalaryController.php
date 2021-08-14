<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Salary;

class SalaryController extends Controller
{
    public function index(Request $request)
    {
        $start = Carbon::create($request->date_start)->format('Y-m-d');
        $end = Carbon::create($request->date_end)->format('Y-m-d');

        $query = DB::table('salaries as s')
            ->join('employees as e', 's.employee_id', '=', 'e.employee_id')
            ->select('s.*', 'e.*', 's.id as salary_id');

        if (!empty($request->field) && !empty($request->order)) {
            $order = '';

            if ($request->order == 'ascend') {
                $order = 'asc';
            }

            if ($request->order == 'descend') {
                $order = 'desc';
            }

            $query->orderBy($request->field, $order);
        }

        if (!empty($request->keyword)) {
            $query->where(function ($q) use ($request) {
                $q->where('s.employee_id', 'like', '%' . $request->keyword . '%')
                    ->orWhere('e.employee_status', 'like', '%' . $request->keyword . '%')
                    ->orWhere('e.employee_name', 'like', '%' . $request->keyword . '%')
                    ->orWhere('e.employee_department', 'like', '%' . $request->keyword . '%')
                    ->orWhere('e.employee_position', 'like', '%' . $request->keyword . '%');
            });
        }

        $table = $query->whereDate('s.salary_periode', '>=', $start)
            ->whereDate('s.salary_periode', '<=', $end)
            ->orderByDesc('s.created_at')
            ->paginate($request->size);

        return response()->json($table);
    }

    public function create(Request $request)
    {
        $data = Salary::create($request->all());

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $data = Salary::where('id', $request->salary_id)->first();

        $data->update($request->except('salary_id'));

        return response()->json($data);
    }

    public function delete(Request $request)
    {
        $data = Salary::where('id', $request->salary_id)->first();

        $data->delete();

        return response()->json([], 200);
    }

    public function import(Request $request)
    {
        return response()->json($request->file('file')->getClientOriginalName());
    }
}
