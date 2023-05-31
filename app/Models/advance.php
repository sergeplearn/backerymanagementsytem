<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class advance extends Model
{
    use HasUuids;
    protected $table = 'advances';
    protected $primaryKey = 'id';

    protected $fillable = [
        'house_id',
        'amount',
        'date',
        
        ];

      

        public function houseworkers(): BelongsTo
         {
             return $this->belongsTo(houseworker::class);
         }

         public function user(): BelongsTo
         {
             return $this->belongsTo(User::class);
         }

}
