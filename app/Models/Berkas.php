<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berkas extends Model
{
    use HasFactory;
    protected $table = 'berkas';
    protected $guarded = ['id'];

    public function blok(): BelongsTo
    {
        return $this->belongsTo(Blok::class, 'blok_id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
