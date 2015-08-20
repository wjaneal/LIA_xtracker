<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
 	Schema::create('budgets', function (Blueprint $table) {
                $table->increments('id');
                $table->string('category');
                $table->string('subcategory');
                $table->string('amount');
                $table->date('startdate');
                $table->integer('departmentid');
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
        Schema::drop('budgets');
    }
}
