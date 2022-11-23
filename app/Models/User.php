<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spiritix\LadaCache\Database\LadaCacheTrait;

class User extends Authenticatable
{
    use HasFactory, Notifiable, LadaCacheTrait;

    protected $fillable = [
        'email', 'name', 'password'
    ];

    protected $hidden = [
        'password',
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
