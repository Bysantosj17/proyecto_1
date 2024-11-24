<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    // use HasFactory;

    protected $table = 'citas';

    protected $fillable = ['name', 'descripcion', 'tel', 'tatoos', 'users_id'];

    // public function users()
    // {
    //     return $this->hasMany(users::class, 'id_users');
    // }

    public function users()
    {
        return $this->belongsTo(users::class, 'users_id', 'id');
    }
}
