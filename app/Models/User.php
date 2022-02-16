<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'password', 'permissions_id', 'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function role_user()
    {
        return $this->belongsToMany(Role::class);
    }

    
    public function permission_user()
    {
        return $this->belongsToMany(Permission::class);
    }
}
