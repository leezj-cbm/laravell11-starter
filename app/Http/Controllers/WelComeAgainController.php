<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelComeAgainController extends Controller
{
    //
    public function welcomeAgain(){
        return(view("welcomeagain"));
    }
}
