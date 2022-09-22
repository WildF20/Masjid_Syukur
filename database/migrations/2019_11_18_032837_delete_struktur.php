<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteStruktur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('struktur');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('struktur', function (Blueprint $table){
            $table->increments('idAnggota');
            $table->integer('anggota_idBidang')->unsigned();
            $table->integer('level_struktur')->nullable();
            $table->string('namaAnggota', 200);
            $table->string('jabatan', 200);
            $table->integer('roleJabatan',)->nullable();
            $table->timestamps();

            $table->foreign('anggota_idBidang')
                ->references('idBidang')->on('bidang')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
}
