<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->string('employee_id');
            $table->string('employee_name');
            $table->string('employee_mname');
            $table->string('employee_lname');
            $table->integer('age');
            $table->integer('mobile_number');
            $table->string('address');
            $table->string('position');
            $table->string('employee_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employee');
    }
}
