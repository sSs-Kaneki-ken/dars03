<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function laravel(){
        return view("welcome");
    }
}
