<?php

// app/Penyakit.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = 'penyakit';

    protected $fillable = ['kode_penyakit', 'nama_penyakit', 'nama_latin', 'deskripsi'];
}

