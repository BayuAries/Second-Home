<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    protected $table="foto";
    protected $fillable = ['nama_homestay','path','size'];
}
