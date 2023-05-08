<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    protected $table = 'arsip';

    protected $fillable = [
        'tingkat_perkembangan_id',
        'bentuk_id',
        'keterangan_id',
        'indeks',
        'deskripsi',
        'tahun',
        'jumlah',
        'rak',
        'roll_o_pack',
        'boks',
        'bungkus',
        'buku',
        'sampul',
    ];

    public function tingkatPerkembangan()
    {
        return $this->belongsTo(TingkatPerkembangan::class, 'tingkat_perkembangan_id', 'id');
    }

    public function bentuk()
    {
        return $this->belongsTo(Bentuk::class, 'bentuk_id', 'id');
    }

    public function keterangan()
    {
        return $this->belongsTo(Keterangan::class, 'keterangan_id', 'id');
    }
}
