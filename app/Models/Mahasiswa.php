<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'Mahasiswa';
    protected $fillable =['nama','npm','materi','created_at','updated_at'];
}
