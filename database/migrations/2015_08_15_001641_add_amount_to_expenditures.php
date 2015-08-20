<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAmountToExpenditures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
 public function up()
    {
        //
        Schema::table('expenditures', function($table)
        {
                $table->string('amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenditures', function($table)
        {
                $table->dropColumn(['amount']);
        });
    }
}
