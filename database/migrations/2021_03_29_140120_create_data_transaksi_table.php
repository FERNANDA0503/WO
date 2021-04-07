<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('id_pengantin');
            $table->String('id_dekorasi');
            $table->String('id_catering');
            $table->String('id_makeup');
            $table->String('id_busana');
            $table->String('total_bayar');
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
        Schema::dropIfExists('data_transaksi');
    }
}
