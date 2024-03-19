<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulesController extends Controller
{
    private $modules = [
        ["code" => 1, "intitule"=> "Math", "Coef"=> 3, "heures"=> 50],
        ["code" => 2, "intitule"=> "PHY", "Coef"=> 3, "heures"=> 45],
        ["code" => 3, "intitule"=> "INFO", "Coef"=> 2, "heures"=> 30],
        ["code" => 4, "intitule"=> "COM", "Coef"=> 1, "heures"=> 20]
    ];
    public function listModule()
    {
        $listModuels = $this->modules;

        return view("modules",compact("listModuels"));
    }
}
