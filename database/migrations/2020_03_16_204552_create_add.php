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
            $table->string('email');
            $table->string('model');
            $table->float('years');
            $table->string('description');
            $table->float('price');
            $table->string('photo');
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
