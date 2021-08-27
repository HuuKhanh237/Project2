<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaocaoctlabTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baocaoctlab', function (Blueprint $table) {
            $table->bigInteger('id_baocaolab')->unsigned();
            $table->bigInteger('id_thietbi')->unsigned();
            $table->integer('soluong');
            $table->primary(['id_baocaolab', 'id_thietbi']);
            $table->foreign('id_baocaolab')
            ->references('id')
            ->on('baocaolab');
            $table->foreign('id_thietbi')
            ->references('id')
            ->on('thietbi');
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
        Schema::dropIfExists('baocaoctlab');
    }
}
