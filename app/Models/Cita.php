<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    // use HasFactory;

    protected $table = 'citas';

    protected $fillable = ['name', 'descripcion', 'email', 'tel', 'tatoos'];

    // public function users()
    // {
    //     return $this->hasMany(users::class, 'id_users');
    // }
}
