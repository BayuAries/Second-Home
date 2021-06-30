<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Homestay extends Model
{
    protected $table="homestay";
    protected $fillable = ['id_pemilik','nama_pemilik','nama_homestay','no_hp','alamat','email','harga','kamar','kabupaten','keterangan'];
}
