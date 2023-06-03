<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'last_login_at',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //public function advance(): HasMany
    //{
    //  return $this->hasMany(advance::class);
    //}

    public function employees(): HasMany
    {
        return $this->hasMany(employee::class);
    }

    public function housetypes(): HasMany
    {
        return $this->hasMany(housetype::class);
    }

    public function moneys(): HasMany
    {
        return $this->hasMany(money::class);
    }

    public function priceofbreads(): HasMany
    {
        return $this->hasMany(priceofbread::class, 'user_id');
    }

    public function houseworkers(): HasMany
    {
        return $this->hasMany(houseworker::class);
    }

    public function advances(): HasMany
    {
        return $this->hasMany(advance::class);
    }
}
