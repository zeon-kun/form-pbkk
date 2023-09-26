<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'brief',
        'percentage',
        'status_url',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
