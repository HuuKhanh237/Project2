<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateThietbiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thietbi', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->tinyInteger('tinhtrang1')->default(1);
            $table->string('tinhtrang2',500)->default('NULL');
            $table->string('mota',550);
            $table->bigInteger('id_lab')->unsigned();
            $table->foreign('id_lab')
            ->references('id')
            ->on('lab');
            
           
            $table->timestamps();
        });
        
    }
    // Schema::drop('thietbi');

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thietbi');
    }
}
