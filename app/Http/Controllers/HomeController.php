<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeView(){
        return view('home');
    }

    public function resourcesView(){
        return view('ressources');
    }

    public function trainingView(){
        return view('training');
    }

    public function get_startedView(){
        return view('get_started');
    }
}
