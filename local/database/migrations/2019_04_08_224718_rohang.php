<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rohang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rohang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('masach')->unsigned();
            $table->foreign('masach')->references('id')->on('sach')->onDelete('cascade');
            $table->smallInteger('makhachhang')->unsigned();
            $table->foreign('makhachhang')->references('id')->on('khachhang')->onDelete('cascade');
            $table->string('tensanpham');
            $table->string('anhbia');
            $table->integer('soluong');
            $table->float('dongia')->unsigned();
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
        Schema::dropIfExists('sach');
    }
}
