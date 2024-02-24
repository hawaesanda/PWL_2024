<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Welcome';
    }

    public function about(){
        return 'Hawa Esanda 2241720079';
    }

    public function articles($artId){
        return 'Article Page with Id '. $artId;
    }
}
