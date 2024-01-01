<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_mapel',
        'mapel',
        'icon',
        'cover',
    ];

    public function mapel(){
        return $this->hasMany(Mapel::class, 'kategori', 'kode_mapel');
    }
}
