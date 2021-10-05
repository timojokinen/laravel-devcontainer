<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{
    public function __invoke()
    {
        return 'Hello World';
    }
}
