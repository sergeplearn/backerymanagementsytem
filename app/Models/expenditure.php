<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expenditure extends Model
{
    use HasUuids;
    protected $fillable = [
        'name',
            'date',
           'amount',
           'why',
            
         'user_id',
         
          ];

}
