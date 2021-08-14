<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('employee_id');
            $table->string('salary_account_number')->nullable();
            $table->string('salary_npwp')->nullable();
            $table->string('salary_tax_status')->nullable();
            $table->integer('salary_working_day')->default(0); 
            $table->integer('salary_checkin_day')->default(0);
            $table->integer('salary_day_total')->default(0);
            $table->decimal('salary_per_day')->default(0.0);
            $table->decimal('salary_basic')->default(0.0);
            $table->decimal('salary_additional_service')->default(0.0);
            $table->decimal('salary_overtime')->default(0.0);
            $table->decimal('salary_allowance')->default(0.0);
            $table->decimal('salary_meal_allowance')->default(0.0);
            $table->decimal('salary_incentive')->default(0.0);
            $table->decimal('salary_service_charge')->default(0.0);
            $table->decimal('salary_pph')->default(0.0);
            $table->decimal('salary_jht')->default(0.0);
            $table->decimal('salary_jp')->default(0.0);
            $table->decimal('salary_bpjs')->default(0.0);
            $table->decimal('salary_misc')->default(0.0);
            $table->decimal('salary_final')->default(0.0);
            $table->text('salary_description')->nullable();
            $table->date('salary_periode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
