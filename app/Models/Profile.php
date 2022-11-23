<?php

namespace App\Models;

use App\Classes\LadaCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends LadaCache
{
    use HasFactory;

    protected $fillable = [
        'photo_url', 'gender', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
