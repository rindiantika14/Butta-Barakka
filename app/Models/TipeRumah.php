<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeRumah extends Model
{
    use HasFactory;
    protected $table = 'tipe_rumah';
    protected $guarded = ['id'];
}
