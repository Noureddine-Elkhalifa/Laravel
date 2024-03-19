<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElevesController extends Controller
{
    private $list = [
        ["code"=>1, "nom"=>"Alami", "Prenom"=>"Ali", "Groupe"=>"G1"  ],  
        ["code"=>2, "nom"=>"Alaoui", "Prenom"=>"Hamid", "Groupe"=>"G2"  ],  
        ["code"=>3, "nom"=>"Majdi", "Prenom"=>"Amine", "Groupe"=>"G1"  ],  
        ["code"=>4, "nom"=>"Fahmi", "Prenom"=>"Hassan", "Groupe"=>"G2s"  ]
    ];

    
    public function listEleve()
    {
        $listEleves = $this->list;
        return view("eleves",compact("listEleves"));
    }
}
