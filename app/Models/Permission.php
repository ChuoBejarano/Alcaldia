<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    
    protected $fillable = ['id','permission','role_id'];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
