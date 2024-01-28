<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenahTipeRumah extends Model
{
    use HasFactory;
    protected $table = 'denah_tipe_rumah';
    protected $guarded = ['id'];
}
