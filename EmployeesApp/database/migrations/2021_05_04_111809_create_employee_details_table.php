<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id'); //社員ID
            $table->string('last_name')->nullable();;; //名字
            $table->string('first_name')->nullable();;; //名前
            $table->string('mail')->unique()->nullable();;; //メールアドレス
            $table->string('tel')->nullable();;; //電話
            $table->string('gender')->default(0);; //性別 0:男性 1:女性
            $table->timestamps();

            $table->foreign('employee_id')
                ->references('id')
                ->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_details');
    }
}
