<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TingkatPerkembangan extends Model
{
    use HasFactory;

    protected $table = 'tingkat_perkembangan';

    protected $fillable = [
        'nama_tingkat_perkembangan',
    ];
}
