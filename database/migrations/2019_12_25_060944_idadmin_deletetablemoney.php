<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class IdadminDeletetablemoney extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('rekening');
        Schema::dropIfExists('donatur');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('donatur', function (Blueprint $table){
            $table->increments('idDonatur');
            $table->string('targetDonatur', 45);
            $table->text('penyaluranDonatur');
            $table->longtext('instruksiDonatur');
            $table->string('jenisDonatur', 45);
            $table->timestamps();
        });
        Schema::create('rekening', function (Blueprint $table){
            $table->increments('idRekening');
            $table->integer('rekening_idDonatur')->unsigned();
            $table->string('namaBank', 200);
            $table->string('noRekening', 200);
            $table->timestamps();

            $table->foreign('rekening_idDonatur')
                ->references('idDonatur')->on('donatur')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
}
