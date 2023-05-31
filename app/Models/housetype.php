<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

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
