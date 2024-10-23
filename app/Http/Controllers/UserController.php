<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }

    public function blog(){
        return view('users.blog');
    }
    public function blogDetails(){
        return view('users.blod-details');
    }
    public function servisDetails(){
        return view('users.service-details');
    }
    public function portfolioDetails(){
        return view('users.portfolio-details');
    }
}
