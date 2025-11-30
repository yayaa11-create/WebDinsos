<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sosped extends Model
{
    use HasFactory;
    protected $table ='sosped';
    protected $primarykey = 'kodesosped';
    protected $fillable =['title','deskripsi'];
}
