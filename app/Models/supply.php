<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supply extends Model
{
    use HasUuids;
    protected $table = 'supplies';
    protected $fillable = [
        'name',
        'tell',
        'address',
         'NIC_no',
         'date',
         'user_id',
         ];

         public function itemsupplied(): HasMany
    {
        return $this->hasMany(itemsupplied::class,'ref_supply');
    }

    public function paysupplie(): HasMany
    {
        return $this->hasMany(paysupplie::class,'ref_supply');
    }


}
