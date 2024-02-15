<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Foundation\Auth\User as Authenticatable;
use illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Administrador extends  Authenticatable
{
 use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'password',
    ];
}
