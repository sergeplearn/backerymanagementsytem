<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class housetype extends Model
{
    use HasUuids;

    protected $fillable = [
        'house_no',
        'price',
        'description',
        'catigory',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
