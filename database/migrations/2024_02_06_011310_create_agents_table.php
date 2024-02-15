<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('nik',50);
            $table->string('nama',250);
            $table->integer('id_location');
            $table->integer('total_ticket');
            $table->integer('total_kategori_ticket');
            $table->bigInteger('total_solved_time')->nullablle();
            $table->bigInteger('rate')->nullablle();
            $table->enum('status',['working','idle']);
            $table->string('updated_by',50);
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
        Schema::dropIfExists('agents');
    }
}
