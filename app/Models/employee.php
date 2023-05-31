<?php

namespace App\Models;
use App\Events\employeecreate;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasUuids;
    protected $table ='employees';
   
    protected $fillable = [
        'fname',
        'sname',
        'tell',
         'address',
         'code',
         'date',
         'workerID',
         'pecentage',
      
         
          ];

          protected $dispatchesEvents = [
            'created' => employeecreate::class,
        ];

          public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function moneys(): HasMany
    {
        return $this->hasMany(money::class,'emply_id');
    }


    public function commands(): HasMany
    {
        return $this->hasMany(command::class,'emply_id');
    }
}
