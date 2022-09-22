<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';
    protected $fillable = ['namaMasjid', 'kontak', 'email', 'alamat'];
}
