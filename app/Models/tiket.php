<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    protected $table = 'tiket';
    protected $fillable= ['nama_pemesan', 'alamat_pemesan', 'jenis_tiket', 'tanggal_konser'];
}
