<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name", 255)->nullable();
            $table->text("description")->nullable();
            $table->string("photo", 255)->nullable();
            $table->decimal("price", 6, 2);
            $table->integer("quantity");
            $table->string('URL');
            $table->integer('stock');
            $table->string('size');
            $table->string("photo2", 255)->nullable();
            $table->string("photo3", 255)->nullable();
            $table->string("photo4", 255)->nullable();
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
        Schema::dropIfExists('dresses');
    }
}
