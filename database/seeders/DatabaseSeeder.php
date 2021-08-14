<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // for($i=1; $i <= 100; $i++) {
        //     // $department = \App\Models\Department::inRandomOrder()->first()->department_name;
        //     // $position = \App\Models\Position::inRandomOrder()->first()->position_name;
        //     // $status = \App\Models\Status::inRandomOrder()->first()->status_name;

        //     $employee = \App\Models\Employee::inRandomOrder()->first()->id;
        //     $tax = \App\Models\Tax::inRandomOrder()->first()->tax_name;

        //     \App\Models\Salary::factory(1)->create([
        //         'employee_id' => $employee,
        //         'salary_tax_status' => $tax,
        //     ]);
        // }

        // \App\Models\User::factory()->create();

        $users = \App\Models\Employee::all();

        foreach ($users as $user) {
            $salary = \App\Models\Salary::where('employee_id', $user->employee_id)->inRandomOrder()->first();
            if ($salary != null) {
                $salary->update([
                    'salary_periode' => Carbon::now(),
                ]);
            }
        }

        // $penggajian = \App\Models\Salary::all();

        // foreach ($penggajian as $item) {
        //     $employee_id = \App\Models\Employee::inRandomOrder()->first()->employee_id;

        //     $item->update([
        //         'employee_id' => $employee_id,
        //     ]);
        // }
    }
}
