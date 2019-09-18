<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $fillable = [
        'saudacao',
        'nome',
        'telefone',
        'email',
        'data_nascimento',
        'avatar',
        'nota'
    ];
}
