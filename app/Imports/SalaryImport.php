<?php

namespace App\Imports;

use App\Models\Employee;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Salary;
use Carbon\Carbon;

class SalaryImport implements ToCollection
{
    private $data;

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $this->data = $collection->toArray();

        $i = 0;
        foreach ($collection as $item) {
            if ($i >= 2) {
                Salary::create([
                    'salary_periode' => Carbon::createFromLocaleIsoFormat('MMMM YYYY', 'id', $item[0]),
                    'employee_id' => $item[1],
                    'salary_account_number' => $item[7],
                    'salary_npwp' => $item[8],
                    'salary_tax_status' => $item[9],
                    'salary_working_day' => $item[10] ?? 0,
                    'salary_checkin_day' => $item[11] ?? 0,
                    'salary_day_total' => $item[12] ?? 0,
                    'salary_per_day' => $item[13] ?? 0.00,
                    'salary_basic' => $item[14] ?? 0.00,
                    // 'salary_minutes_late' => $item[15] ?? 0.00,
                    // 'salary_service_cut' => $item[16] ?? 0.00,
                    'salary_additional_service' => $item[15] ?? 0.00,
                    'salary_overtime' => $item[16] ?? 0.00,
                    'salary_allowance' => $item[17] ?? 0.00,
                    'salary_meal_allowance' => $item[18] ?? 0.00,
                    'salary_incentive' => $item[19] ?? 0.00,
                    'salary_service_charge' => $item[20] ?? 0.00,
                    'salary_pph' => $item[21] ?? 0.00,
                    'salary_jht' => $item[22] ?? 0.00,
                    'salary_jp' => $item[23] ?? 0.00,
                    'salary_bpjs' => $item[24] ?? 0.00,
                    'salary_misc' => $item[25] ?? 0.00,
                    'salary_final' => $item[26] ?? 0.00,
                    'salary_description' => $item[27],
                ]);
            }

            $i++;
        }
    }

    public function getData()
    {
        return $this->data;
    }
}
