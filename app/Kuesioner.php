<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $fillable = ['nim_mhs','nama_mhs','kelas','no_abs','jwb1','jwb2','jwb3','jwb4','jwb5'];
}
