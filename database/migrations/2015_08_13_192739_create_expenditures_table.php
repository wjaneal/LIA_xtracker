<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpendituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

	 Schema::create('expenditures', function (Blueprint $table) {

        	$table->increments('id');
	        $table->string('category');
	        $table->string('subcategory');
	        $table->string('description');
	        $table->date('date');
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
        Schema::drop('expenditures');
    }
}
