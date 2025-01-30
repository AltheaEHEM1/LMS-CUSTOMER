<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $dates = ['deleted_at']; // Tracks soft deletion timestamps
    protected $fillable = [
        'first_name', 
        'middle_name', 
        'last_name', 
        'email', 
        'password', 
        'phone_no', 
        'date_of_birth', 
        'address', 
        'photo', 
        'activate',
        'access_dashboard', 
        'access_employee', 
        'access_reservation', 
        'access_catalog', 
        'access_members', 
        'access_circulations', 
        'access_circulation_reports', 
        'access_member_reports', 
        'access_overdue_reports', 
        'access_catalog_reports',
        'created_by',
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
        'password' => 'hashed',
    ];

    /**
     * Example relationship with sessions (if applicable).
     */
    public function sessions()
    {
        return $this->morphMany(Session::class, 'user');
    }

    /**
     * Relationship to indicate the employee who created this one.
     */
    public function createdBy()
    {
        return $this->belongsTo(self::class, 'created_by');
    }
}
