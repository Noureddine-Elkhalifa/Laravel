<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculCOntroller extends Controller
{

    // public function somme($a,$b)
    // {
    //     return "La somme de $a + $b est: ". $a + $b;
    // }

    // public function produit($a,$b)
    // {
    //     return "Le produit de $a * $b est: ". $a * $b;
    // }

    public function somme($a,$b)
    {
        if(is_numeric($a) && is_numeric($b) )
        {
            $s = $a + $b;
        return view("somme",["somme"=>$s]);
        }
        else
        {
            return "Erreur syntax";
        }
        
    }

    public function produit($a,$b)
    {
        $p = $a * $b;
        
        return view('produit',compact("p"));
        // return view("produit",["p" => $p]);
    }

    public function calculator()
    {
        return view("calculator");
    }
}
