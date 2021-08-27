<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaocaoctkhoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaoctkho', function (Blueprint $table) {
            $table->bigInteger('id_baocaokho')->unsigned();
            $table->bigInteger('id_linhkien')->unsigned();
            $table->integer('soluong');
            $table->primary(['id_baocaokho', 'id_linhkien']);
            $table->foreign('id_baocaokho')
            ->references('id')
            ->on('baocaokho');
            $table->foreign('id_linhkien')
            ->references('id')
            ->on('linhkien');
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
        Schema::dropIfExists('baocaoctkho');
    }
}
