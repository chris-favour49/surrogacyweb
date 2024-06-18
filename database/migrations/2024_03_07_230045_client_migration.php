<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    schema:: create('client', function(Blueprint $table){
        $table->id();
        $table->string('fullname');
        $table->string('phone');
        $table->string('gender');
        $table->string('measurement');
        $table->string('address');
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
        schema::dropIfExists('cleint');

    }
};
