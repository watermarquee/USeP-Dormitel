<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('reservations', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('person_id');
      $table->string('status');
      $table->double('price');
      $table->text('notes');
      $table->timestamp('start_date');
      $table->timestamp('end_date');
      $table->integer('room_id');
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
    Schema::drop('reservations');
  }

}
