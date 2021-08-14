<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Status;
use App\Models\Tax;

class MixDataController extends Controller
{
    public function salaryFormData(Request $request)
    {
        $dep = Department::all();
        $pos = Position::all();
        $sts = Status::all();
        $tax = Tax::all();
        $emp = Employee::all();

        return response()->json([
            'dep' => $dep,
            'pos' => $pos,
            'sts' => $sts,
            'tax' => $tax,
            'emp' => $emp,
        ]);
    }
}
