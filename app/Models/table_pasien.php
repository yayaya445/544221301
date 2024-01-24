<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_pasien extends Model
{
    use HasFactory;
    protected $table = 'table_pasien';
    protected $primarykey = 'id';
    protected $fillable = [
    'nama_pasien',
    'umur_pasien',
    'nama_penyakit'
    ];
}
