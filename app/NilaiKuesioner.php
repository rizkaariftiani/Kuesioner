<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class NilaiKuesioner extends Model
{
    public $keterangan = [
        'Sangat Tidak Setuju/Tidak Pernah',
        'Tidak Setuju/Jarang',
        'Ragu-ragu/Kadang-kadang',
        'Setuju/Sering',
        'Sangat Setuju/Selalu'
    ];
}
