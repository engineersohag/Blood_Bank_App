<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'optional_number',
        'present_address',
        'blood_group',
        'weight',
        'last_blood_donate',
        'photo',
        'documents',
        'email_verify',
        'status',
        'node',
        'blood_donate_number',
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_blood_donate' => 'date',
        'documents' => 'array',       // JSON → Array
        'email_verify' => 'boolean',
        'status' => 'boolean',
        'blood_donate_number' => 'integer',
        'weight' => 'integer',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
