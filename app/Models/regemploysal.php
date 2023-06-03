<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class regemploysal extends Model
{
    use HasUuids;

    protected $table = 'regemploysals';

    protected $fillable = [
        'salary',
        'name',
        'date',
        'empy_id',
        'user_id',
    ];
}
