<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangkeluar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('barangmasuk_id');
            $table->integer('jumlah_brg_keluar');
            $table->date('tgl_keluar');
            $table->string('divisi_id');
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
        Schema::dropIfExists('barangkeluar');
    }
}
