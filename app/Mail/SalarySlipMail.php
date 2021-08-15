<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SalarySlipMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $file;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $file)
    {
        $this->data = $data;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = $this->data;

        $gross_income = $data->salary_basic + $data->salary_service_charge + $data->salary_overtime + $data->salary_incentive + $data->salary_meal_allowance + $data->salary_additional_service;
        $total_deduction = $data->salary_pph + $data->salary_jht + $data->salary_jp + $data->salary_bpjs + $data->salary_misc + $data->salary_service_charge;

        return $this->markdown('emails.salary_slip', [
            'data' => $data,
            'gross_income' => $gross_income,
            'total_deduction' => $total_deduction
        ])->attach('./files/' . $this->file, [
            'as' => $this->file,
            'mime' => 'application/pdf',
        ]);
    }
}
