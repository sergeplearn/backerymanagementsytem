<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class reghousesalary extends Model
{
    use HasUuids;

    protected $table = 'reghousesalaries';

    protected $fillable = [
        'salary',
        'name',
        'date',
        'house_id',
        'user_id',
    ];
}
