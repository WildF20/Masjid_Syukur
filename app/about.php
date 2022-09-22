<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $table = 'about';
    protected $fillable = ['visi', 'misi', 'selayangPandang'];
}
