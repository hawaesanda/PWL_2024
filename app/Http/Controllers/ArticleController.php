<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function single($Id){
        return 'Article Page with Id '. $Id;
    }
}
