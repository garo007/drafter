<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('charter')->nullable();
            $table->string('extract')->nullable();
            $table->string('order_of_appointment')->nullable();
            $table->string('record_sheet')->nullable();
            $table->string('balance_sheet')->nullable();
            $table->string('staffing_table')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('charter');
            $table->dropColumn('extract');
            $table->dropColumn('order_of_appointment');
            $table->dropColumn('record_sheet');
            $table->dropColumn('balance_sheet');
            $table->dropColumn('staffing_table');
        });
    }
}
