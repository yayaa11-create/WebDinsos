<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bansos extends Model
{
    use HasFactory;
    protected $table = 'bansos';
    protected $primarykey = 'kodebansos';
    protected $fillable = ['nik','nama','alamat','pkh','sembako','pbi','yapi'];
}
