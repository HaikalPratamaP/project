<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgresticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progrestickets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ticket');
            $table->date('tgl_tindakan');
            $table->string('tindakan');
            $table->bigInteger('tindakan_lema')->nullablle();
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
        Schema::dropIfExists('progrestickets');
    }
}
