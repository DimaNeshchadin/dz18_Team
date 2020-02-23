<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('teams', function ($table){
    $table->bigIncrements('id');
    $table->string('img', 255);
    $table->string('position', 255);
    $table->string('name', 255);
    $table->text('title', 255);
    $table->string('facebook', 255);
    $table->string('twitter', 255);
    $table->string('google', 255);
    $table->timestamps();
    $table->softDeletes('deleted_at');

});

$data = [
    [
        'id' => 1,
        'img' => 'images/team/01.jpg',
        'position' => 'director',
        'name' => 'Theresa Green',
        'title' => 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.',
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://www.google.com'
    ],
    [
        'id' => 2,
        'img' => 'images/team/02.jpg',
        'position' => 'CAT GROOMER',
        'name' => 'Rosie White',
        'title' => 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.',
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://www.google.com'
    ],
    [
        'id' => 3,
        'img' => 'images/team/03.jpg',
        'position' => 'DOG GROOMER',
        'name' => 'Estelle Marsh',
        'title' => 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.',
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://www.google.com'
    ],
    [
        'id' => 4,
        'img' => 'images/team/04.jpg',
        'position' => 'RABBIT GROOMER',
        'name' => 'Alberta Rogers',
        'title' => 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.',
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://www.google.com'
    ],
    [
        'id' => 5,
        'img' => 'images/team/05.jpg',
        'position' => 'CAT GROOMER',
        'name' => 'Bernard Lambert',
        'title' => 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.',
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://www.google.com'
    ],
    [
        'id' => 6,
        'img' => 'images/team/06.jpg',
        'position' => 'RABBIT GROOMER',
        'name' => 'Frank Stephens',
        'title' => 'Cow ham hock sausage ribeye fatback. Pig sausage turducken, beef drumstick corned beef andouille.',
        'facebook' => 'http://www.facebook.com',
        'twitter' => 'http://www.twitter.com',
        'google' => 'http://www.google.com'
    ],
];

foreach ($data as $team) {
    $model = new \App\Model\Team();
    $model->id = $team['id'];
    $model->img = $team['img'];
    $model->position = $team['position'];
    $model->name = $team['name'];
    $model->title = $team['title'];
    $model->facebook = $team['facebook'];
    $model->twitter = $team['twitter'];
    $model->google = $team['google'];
    $model->save();
}
