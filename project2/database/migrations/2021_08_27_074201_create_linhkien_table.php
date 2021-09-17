<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinhkienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linhkien', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->tinyInteger('tinhtrang1')->default(1);
            $table->string('mota',550);
            $table->float('soluong', 8, 2);

            $table->bigInteger('id_kho')->unsigned();
            $table->foreign('id_kho')
            ->references('id')
            ->on('kho');
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
        Schema::dropIfExists('linhkien');
    }
}
