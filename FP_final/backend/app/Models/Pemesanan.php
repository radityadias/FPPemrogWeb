<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';

    protected $fillable = [
        'nama', 
        'email', 
        'alamat', 
        'nomor_hp', 
        'tgl_pinjam', 
        'tgl_kembali', 
        'mobil'
        
    ];

    public  $timestamp = false;

    use HasFactory;
}
