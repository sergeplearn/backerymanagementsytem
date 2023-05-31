<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
class message extends Model
{

    use HasUuids;
  
    protected $fillable = [
        'message',
        
        ];
}
