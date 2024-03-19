<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function Q1()
    {
        return "Bienvenue dans notre site";
    }

    public function Q3($nom)
    {
        return "Bienvenue $nom";
    }

    public function Q5()
    {
        return view("accueil");
    }
}


