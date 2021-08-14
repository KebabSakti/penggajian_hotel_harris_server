<?php

namespace Database\Factories;

use App\Models\Salary;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $per_day = $this->faker->numberBetween(100000, 300000);
        $basic = 26 * $per_day;
        $additional = $this->faker->numberBetween(100000, 300000);
        $overtime = $this->faker->numberBetween(100000, 300000);
        $allowance = $this->faker->numberBetween(100000, 300000);
        $meal = $this->faker->numberBetween(100000, 300000);
        $incentive = $this->faker->numberBetween(100000, 300000);
        $service = $this->faker->numberBetween(100000, 300000);
        $pph = $this->faker->numberBetween(100000, 300000);
        $jht = ($basic * 2) / 100;
        $jp = ($basic * 1) / 100;
        $bpjs = ($basic * 1) / 100;
        $misc = $this->faker->numberBetween(100000, 300000);
        $final = ($basic+$additional+$overtime+$allowance+$meal+$incentive+$service) - ($pph+$jht+$jp+$bpjs+$misc);

        return [
            'salary_account_number' => $this->faker->creditCardNumber(),
            'salary_npwp' => $this->faker->creditCardNumber(),
            'salary_working_day' => 26,
            'salary_checkin_day' => 26,
            'salary_day_total' => 26,
            'salary_per_day' => $per_day,
            'salary_basic' => $basic,
            'salary_additional_service' => $additional,
            'salary_overtime' => $overtime,
            'salary_allowance' => $allowance,
            'salary_meal_allowance' => $meal,
            'salary_incentive' => $incentive,
            'salary_service_charge' => $service,
            'salary_pph' => $pph,
            'salary_jht' => $jht,
            'salary_jp' => $jp,
            'salary_bpjs' => $bpjs,
            'salary_misc' => $misc,
            'salary_final' => $final,
            'salary_periode' => $this->faker->date(),
        ];
    }
}
