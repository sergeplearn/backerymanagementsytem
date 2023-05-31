<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemsupplied extends Model
{
    use HasUuids;
    protected $table = 'itemsupplieds';
    protected $fillable = [
        'item',
        'ref_supply',
        'number',
         'itemprice',
         'date',
         'user_id',
         ];

         public function supply(): BelongsTo
         {
             return $this->belongsTo(supply::class);
         }
     

}
