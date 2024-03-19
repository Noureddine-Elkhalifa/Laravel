<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlesController extends Controller
{
    private $controles = [
        ["numero" => 1, "codeModule"=> 2, "Date"=> "2022-02-14", "Durée"=> "02:00"],
        ["numero" => 2, "codeModule"=> 1, "Date"=> "2022-03-24", "Durée"=> "01:30"],
        ["numero" => 3, "codeModule"=> 1, "Date"=> "2022-04-04", "Durée"=> "01:30"],
        ["numero" => 4, "codeModule"=> 3, "Date"=> "2022-04-12", "Durée"=> "02:30"]
    ];
    public function listControle()
    {
        $ListControles = $this->controles;
        return view("controles",compact("ListControles"));
    }
}
