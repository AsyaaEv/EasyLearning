<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'content',
        'kategori',
        'tumbnail',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategori', 'kode_mapel');
    }
    
}
