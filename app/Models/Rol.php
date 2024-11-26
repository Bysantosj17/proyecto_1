<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rol extends Model
{
    // use HasFactory;

    protected $table = 'roles';

    protected $fillable = ['rol'];

    protected function Cita(): HasOne
    {
        return $this->hasOne(Cita::class);
    }

    protected function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'roles_id', 'id');
    }
}