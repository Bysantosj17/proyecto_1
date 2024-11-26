<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cita extends Model
{
    // use HasFactory;

    protected $table = 'citas';

    protected $fillable = ['name', 'descripcion', 'tel', 'tatoos', 'users_id'];

    // public function users()
    // {
    //     return $this->hasMany(users::class, 'id_users');
    // }

    public function users(): HasOne
    {
        return $this->hasOne(User::class, 'users_id', 'id');
    }
}
