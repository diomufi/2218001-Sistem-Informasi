<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable = ['nama', 'jenis', 'usia', 'owner_id'];

    public function owner()
    {
        return $this->belongsTo(OwnerCat::class, 'owner_id');
    }
}
