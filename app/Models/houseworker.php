<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class houseworker extends Model
{
    use HasUuids;

    protected $fillable = [
        'fname',
        'sname',
        'tell',
        'address',
        'salary',
        'date',

    ];

    //protected function setfnameattribute($value)
    //{
      //  $this->attributes['fname'] = 'Mr/Mrs '.strtolower($value);
        // $this->attributes['fname'] = ucfirst($value);

    //}

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function houseincrements(): HasMany
    {
        return $this->hasMany(houseincrement::class, 'house_id');
    }

    public function advances(): HasMany
    {
        return $this->hasMany(advance::class, 'house_id');
    }
}
