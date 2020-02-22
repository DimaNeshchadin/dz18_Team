<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('navigations', function ($table){
    $table->bigIncrements('id');
    $table->string('href', 100);
    $table->string('name', 100);
    $table->string('title', 100);
    $table->timestamps();
});

$data = [
    ['href' => '/', 'name' => 'home', 'title' => 'Home',],
    ['href' => '/blog', 'name' => 'blog', 'title' => 'Blog',],
    ['href' => '/services', 'name' => 'services', 'title' => 'Services',],
    ['href' => '/team', 'name' => 'team', 'title' => 'Team',],
    ['href' => '/contact-us', 'name' => 'contacts', 'title' => 'Contacts',]
];

foreach ($data as $nav) {
    $model = new \App\Model\Navigation();
    $model->href = $nav['href'];
    $model->name = $nav['name'];
    $model->title = $nav['title'];
    $model->save();
}