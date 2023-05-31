<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class command extends Model
{
    use HasUuids;
    protected $table = 'commands';
    protected $primaryKey = 'id';
    protected $fillable = [
        'bread50',
        'long40',
        'square40',
         'long80',
         'round',
         'kirico',
         'square80',
          'bread200',
   'user_id',
        'bread300',
         'bread500',
        'bread1000',
        
        'emply_id',
         'date'];

         public function employees(): BelongsTo
         {
             return $this->belongsTo(employee::class);
         }
}
