<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaocaokhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaokho', function (Blueprint $table) {
            $table->id();
            $table->dateTime('ngaygio', $precision = 0);
            $table->string('noidung',550);
            $table->tinyInteger('trangthai');
            // $table->bigInteger('id_kho')->unsigned();
            $table->bigInteger('id_users')->unsigned();
            // $table->foreign('id_kho')
            // ->references('id')
            // ->on('kho');
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
        Schema::dropIfExists('baocaokho');
    }
}
