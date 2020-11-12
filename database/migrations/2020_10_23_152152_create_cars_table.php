<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('cars', function (Blueprint $table) {
      $table->id();
      $table->string('name', 100)->nullable();
      $table->string('make', 100)->nullable();
      $table->string('model', 100)->nullable();
      $table->integer('license_number')->default(0);
      $table->integer('weight')->default(0);
      $table->integer('registration_year')->default(0);
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
    Schema::dropIfExists(cars);
  }
}
