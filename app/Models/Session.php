<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions'; // Explicitly define the table

    public $incrementing = false; // Primary key is not auto-incrementing
    protected $keyType = 'string'; // Primary key is a string (UUID)

    protected $fillable = [
        'id',
        'user_id',
        'user_type',
        'ip_address',
        'user_agent',
        'payload',
        'last_activity',
    ];

    public function user()
    {
        return $this->morphTo();
    }
}