<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::beginTransaction();
        try {
        Schema::create('adds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model');
            $table->string('years');
            $table->string('description');
            $table->string('price');
            $table->string('photo');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        DB::commit();
    } catch (PDOException $e) {
DB::rollBack();
$this->down();
}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adds');
    }
}
