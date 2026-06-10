<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model as MongoModel;

class LaporanKeracunan extends MongoModel 
{
    protected $connection = 'mongodb';        
    protected $collection = 'laporan_keracunan';
    
    protected $fillable = [
        'tanggal_laporan', 
        'jumlah_korban', 
        'deskripsi',
        'id_sppg', 
        'detail_investigasi', 
        'dokumentasi', 
        'riwayat_audit'
    ];
    
    protected $casts = [
        'id_sppg' => 'integer',               
        'detail_investigasi' => 'array',
        'dokumentasi' => 'array',
        'riwayat_audit' => 'array',
    ];
}