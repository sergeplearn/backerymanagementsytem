<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class priceofbread extends Model
{
    use HasFactory;
    
    protected $fillable = ['bread50',
                 'bread100',
                 'bread200',
                 'bread300',
                  'bread500',
                  'bread1000',];
                  public function user(): BelongsTo
                  {
                      return $this->belongsTo(User::class);
                  }
         

}
