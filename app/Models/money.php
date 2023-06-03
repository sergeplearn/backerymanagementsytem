<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class money extends Model
{
    use HasUuids;

    protected $table = 'money';

    protected $fillable = [
        'amount',
        'emply_id',
        'date',

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function employees(): BelongsTo
    {
        return $this->belongsTo(employee::class, 'emply_id');
    }
}
