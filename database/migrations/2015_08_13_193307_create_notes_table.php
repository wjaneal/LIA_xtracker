<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('notes', function(Blueprint $table)
                {
                        $table->integer('id', true);
                        $table->string('referencetype')->nullable();
                        $table->integer('referenceid')->nullable();
                        $table->date('date')->nullable();
                        $table->string('note')->nullable();
                });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notes');
    }
}
