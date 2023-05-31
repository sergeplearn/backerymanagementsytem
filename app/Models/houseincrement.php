<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class houseincrement extends Model
{
    use HasUuids;
    protected $table = 'houseincrements';
    protected $fillable = [
        'house_id',
        'amount',
        'date',
        'user_id',
        ];
}

