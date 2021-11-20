<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaocaolabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaolab', function (Blueprint $table) {
            $table->id();
            $table->dateTime('ngaygio', $precision = 0);
            $table->string('noidung',550);
            $table->tinyInteger('trangthai');
            // $table->bigInteger('id_lab')->unsigned();
            $table->bigInteger('id_users')->unsigned();
            // $table->foreign('id_lab')
            // ->references('id')
            // ->on('lab');
            $table->foreign('id_users')
            ->references('id')
            ->on('users');
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
        Schema::dropIfExists('baocaolab');
    }
}
