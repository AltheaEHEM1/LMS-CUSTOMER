<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = 'sessions'; // Reference the shared sessions table

    public $incrementing = false; // UUID is the primary key
    protected $keyType = 'string'; // UUIDs are strings

    protected $fillable = [
        'id',
        'user_id',
        'user_type',
        'ip_address',
        'user_agent',
        'payload',
        'last_activity',
    ];

    /**
     * Define a polymorphic relationship for the user or employee.
     */
    public function user()
    {
        return $this->morphTo();
    }
}
