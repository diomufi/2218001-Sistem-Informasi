<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OwnerCat extends Model
{
    protected $table = 'ownercat'; // Ensure this matches your database table name

    protected $fillable = ['nama', 'alamat', 'email', 'no_hp']; // Define fillable fields

    public $timestamps = true; // Use timestamps if your table has them
}
