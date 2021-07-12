<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->string('category');
            $table->string('status_business');
            $table->string('reason_for_sale');
            $table->string('location');
            $table->string('site');
            $table->string('site_link');
            $table->string('price');
            $table->string('urgently');
            $table->string('take_calls');
            $table->string('organizational_legal_form');
            $table->string('description');
            $table->string('employee_count');
            $table->string('count_management_personnel');
            $table->string('area');
            $table->string('residential_nonresidential');
            $table->string('floor');
            $table->string('subject');
            $table->string('area_m2');
            $table->string('equipment');
            $table->string('licenses');
            $table->string('avg_monthly');
            $table->string('wage_fund');
            $table->string('rent_price');
            $table->string('cost_utility_bills');
            $table->string('operating_expenses');
            $table->string('net_profit_month');
            $table->string('business_payback_period');
            $table->string('debts_fines');
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
        Schema::dropIfExists('surveys');
    }
}
