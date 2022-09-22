<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddtableStruktur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('struktur', function (Blueprint $table){
            $table->increments('idAnggota');
            $table->integer('anggota_idBidang')->unsigned();
            $table->string('namaAnggota', 200);
            $table->string('jabatan', 200);
            $table->integer('anggota_idRoleStruktur')->unsigned();
            $table->timestamps();

            $table->foreign('anggota_idBidang')
                ->references('idBidang')->on('bidang')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('anggota_idRoleStruktur')
                ->references('idRoleStruktur')->on('roleStruktur')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('struktur');
    }
}
