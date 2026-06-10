<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sppg extends Model
{
    protected $table = 'sppg';
    protected $primaryKey = 'id_sppg';
    
    protected $fillable = [
        'id_menu', 
        'id_sekolah', 
        'tanggal_distribusi',
        'status'
    ]; 

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }

    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class, 'id_sekolah');
    }
}