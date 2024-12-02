<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cita extends Model
{
    // use HasFactory;

    protected $table = 'citas';

    protected $fillable = ['name', 'email', 'descripcion', 'tel', 'tatoos', 'user_id'];

    // public function users()
    // {
    //     return $this->hasMany(users::class, 'id_users');
    // }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
