<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class bread extends Model
{
    use HasUuids;

    protected $table = 'breads';

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
        'ref_code',
        'emply_id',
        'date'];
}
