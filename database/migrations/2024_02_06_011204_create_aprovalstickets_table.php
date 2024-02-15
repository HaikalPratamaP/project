<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAprovalsticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprovalstickets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_ticket');
            $table->integer('id_user');
            $table->enum('status',['pending','aproved','rejected']);
            $table->string('reason',250);
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
        Schema::dropIfExists('aprovalstickets');
    }
}
