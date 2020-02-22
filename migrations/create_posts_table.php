<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('posts', function ($table){
    $table->bigIncrements('id');
    $table->unsignedBigInteger('user_id');
    $table->string('title', 255);
    $table->timestamps();

    $table->foreign('user_id')->references('id')->on('users');
});

$data = [
    ['id' => 1, 'user_id' => 1, 'title' => 'Title 1'],
    ['id' => 2, 'user_id' => 1, 'title' => 'Title 2'],
];

foreach ($data as $post) {
    $model = new \App\Model\Post();
    $model->id = $post['id'];
    $model->user_id = $post['user_id'];
    $model->title = $post['title'];
    $model->save();
}