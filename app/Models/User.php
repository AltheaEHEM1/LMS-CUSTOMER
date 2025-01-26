<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'firstName',
        'middleInitial',
        'lastName',
        'dobMonth',
        'dobDay',
        'dobYear',
        'gender',
        'addressHouse',
        'addressStreet',
        'addressBarangay',
        'addressCity',
        'addressProvince',
        'addressZip',
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function sessions()
    {
        return $this->morphMany(Session::class, 'user');
    }
    
}