<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_obat extends Model
{
    use HasFactory;
    protected $table = 'table_obat';
    protected $primarykey = 'id';
    protected $fillable = [
    'nama_obat',
    'harga_obat'
    ];
}
