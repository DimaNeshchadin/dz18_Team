<?php


namespace App\Controller;


class BlogController
{
    public function __invoke()
    {
        return view('blog');
    }

}