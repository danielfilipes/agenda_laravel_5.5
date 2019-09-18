<?php

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'saudacao' => 'Sr(a).',
        'nome' => $faker->name,
        'telefone' => $faker->cellphoneNumber,
        'data_nascimento' => $faker->date('Y-m-d'),
        'email' => $faker->unique()->safeEmail,
        'nota' => 'Usuário criado usando método factory e classe Faker.'
    ];
});
