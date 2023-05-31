<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class houseworkers extends Model
{
    use HasUuids;
    protected $table = 'houseworkers';
    protected $fillable = [
        'fname',
        'sname',
        'tell',
         'address',
         'salary',
         'date',
       
         ];

         public function user(): BelongsTo
         {
             return $this->belongsTo(User::class);
         }

         
         public function  houseincrements(): HasMany
    {
        return $this->hasMany(houseincrement::class,'house_id');
    }
    public function  advances(): HasMany
    {
        return $this->hasMany(advance::class,'house_id');
    }
}
