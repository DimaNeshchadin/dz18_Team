<?php

$engineResolver = new \Illuminate\View\Engines\EngineResolver();

$fileSystem = new \Illuminate\Filesystem\Filesystem();
$fileViewFinder = new \Illuminate\View\FileViewFinder(
    $fileSystem, ['../resources/views']
);

$compiler = new \Illuminate\View\Compilers\BladeCompiler($fileSystem, '../resources/cache');

$engineResolver->register('blade', function () use ($compiler) {
    return new \Illuminate\View\Engines\CompilerEngine($compiler);
});

$container = new \Illuminate\Container\Container();
$dispatcher = new \Illuminate\Events\Dispatcher($container);

$blade = new \Illuminate\View\Factory(
    $engineResolver,
    $fileViewFinder,
    $dispatcher
);

$blade->composer('layouts.layout', function ($view) {
    $view->with('nav', \App\Model\Navigation::all());
});

$blade->composer('layouts.layout', function ($view) {
    $view->with('social', [
        [
            'link' => 'http://facebook.com',
            'title' => 'Facebook',
            'class' => 'social-icon rounded-icon border-icon soc-facebook',
        ],
        [
            'link' => 'http://twitter.com',
            'title' => 'Twitter',
            'class' => 'social-icon rounded-icon border-icon soc-twitter',
        ],
        [
            'link' => 'http://google.com',
            'title' => 'Google',
            'class' => 'social-icon rounded-icon border-icon soc-google',

        ],
    ]);
});