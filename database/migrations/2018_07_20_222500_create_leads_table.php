<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 128);
            $table->string('last_name', 256);
            $table->string('email', 256);
            $table->string('phone', 128);
            $table->string('origin_state', 128);
            $table->string('destination_state', 128);
            $table->integer('vehicle_year');
            $table->string('vehicle_make', 256);
            $table->string('vehicle_model', 256);
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
        Schema::dropIfExists('leads');
    }
}
