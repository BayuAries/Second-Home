<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table="booking";
    protected $fillable=["id_pembooking","nama_homestay","nama_pembooking","check_in","check_out"];
}
