<?php

namespace App\Models;

use App\Classes\LadaCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends LadaCache
{
    use HasFactory;

    protected $fillable = [
        'address', 'user_id', 'is_default'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
