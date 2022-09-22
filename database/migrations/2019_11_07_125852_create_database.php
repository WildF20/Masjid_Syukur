<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('idAdmin');
            $table->string('username', 50);
            $table->string('password', 50);
            $table->timestamps();
        });
        Schema::create('bidang', function (Blueprint $table){
            $table->increments('idBidang');
            $table->string('namaBidang');
            $table->timestamps();
        });
        Schema::create('berita', function (Blueprint $table){
            $table->increments('idBerita');
            $table->integer('berita_idBidang')->unsigned();
            $table->string('judulBerita', 200);
            $table->string('slug_judul')->nullable();
            $table->date('tanggalBerita')->nullable();
            $table->longtext('isiBerita');
            $table->timestamps();

            $table->foreign('berita_idBidang')
                ->references('idBidang')->on('bidang')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::create('donatur', function (Blueprint $table){
            $table->increments('idDonatur');
            $table->string('targetDonatur', 45);
            $table->text('penyaluranDonatur');
            $table->longtext('instruksiDonatur');
            $table->string('jenisDonatur', 45);
            $table->timestamps();
        });
        Schema::create('kajian', function (Blueprint $table){
            $table->increments('idKajian');
            $table->string('namaKajian', 50);
            $table->time('waktuKajian');
            $table->string('hariKajian', 20);
            $table->text('deskripsiKajian');
            $table->timestamps();
        });
        Schema::create('setting', function (Blueprint $table){
            $table->increments('idSetting');
            $table->string('titleWeb', 50);
            $table->string('icon', 500)->nullable();
            $table->string('favicon', 500)->nullable();
            $table->timestamps();
        });
        Schema::create('program', function (Blueprint $table){
            $table->increments('idProgram');
            $table->integer('program_idBidang')->unsigned();
            $table->string('namaProgram', 200);
            $table->text('deskripsiProgram');
            $table->timestamps();

            $table->foreign('program_idBidang')
                ->references('idBidang')->on('bidang')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::create('profil', function (Blueprint $table){
            $table->increments('idProfil');
            $table->string('namaMasjid', 200);
            $table->string('logo', 500)->nullable();
            $table->string('kontak', 50);
            $table->string('email', 200);
            $table->text('alamat')->nullable();
            $table->timestamps();
        });
        Schema::create('about', function (Blueprint $table){
            $table->increments('idAbout');
            $table->longtext('selayangPandang');
            $table->longtext('visi');
            $table->longtext('misi');
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
        Schema::dropIfExists('admin');
        Schema::dropIfExists('berita');
        Schema::dropIfExists('rekening');
        Schema::dropIfExists('kajian');
        Schema::dropIfExists('setting');
        Schema::dropIfExists('program');
        Schema::dropIfExists('donatur');
        Schema::dropIfExists('struktur');
        Schema::dropIfExists('profil');
        Schema::dropIfExists('about');
        Schema::dropIfExists('bidang');
    }
}
