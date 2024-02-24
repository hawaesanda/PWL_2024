<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
//Creating a controller
    public function hello(){
        return 'Hello World';
    }
}
