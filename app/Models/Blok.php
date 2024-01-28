<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blok extends Model
{
    use HasFactory;
    protected $table = 'blok';
    protected $guarded = ['id'];

    public function tipe(): BelongsTo
    {
        return $this->belongsTo(TipeRumah::class, 'tipe_rumah_id');
    }
}
