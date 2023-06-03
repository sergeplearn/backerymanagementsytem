<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class paysupplie extends Model
{
    use HasUuids;

    protected $table = 'paysupplies';

    protected $fillable = [
        'ref_supply',
        'amount',
        'date',
        'user_id',
    ];

    public function supplys(): BelongsTo
    {
        return $this->belongsTo(supply::class);
    }
}
