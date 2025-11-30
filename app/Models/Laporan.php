<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $primarykey = 'kodelaporan';
    protected $fillable = ['user_id','klasifikasi','title','deskripsi','tanggal','lokasi','instansi','kategori','foto'];
}
