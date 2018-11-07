<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker)
{
    return [
       'nome' => $faker->name,
       'email' => $faker->email,
       'titulo' => $faker->title,
       'subtitulo' => $faker->title,
       'mensagem' => $faker->text,
       'arquivo' => $faker->title,
       'likes' => $faker->numberBetween(),
    ];
});
