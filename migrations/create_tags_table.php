<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('tags', function ($table){
    $table->bigIncrements('id');
    $table->string('title', 255);
    $table->timestamps();
});

$data = [
    ['id' => 1, 'title' => 'php'],
    ['id' => 2, 'title' => 'mysql'],
];

foreach ($data as $tag) {
    $model = new \App\Model\Tag();
    $model->id = $tag['id'];
    $model->title = $tag['title'];
    $model->save();
}

Capsule::schema()->create('post_tag', function ($table){
    $table->unsignedBigInteger('post_id');
    $table->unsignedBigInteger('tag_id');
    $table->timestamps();

    $table->foreign('post_id')->references('id')->on('posts');
    $table->foreign('tag_id')->references('id')->on('tags');
});

