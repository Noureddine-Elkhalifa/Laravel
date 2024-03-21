<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class packagesController extends Controller
{
    private $list = [
        ['id'=> 1, 'title'=> 'Spatie', 'slug'=>'spatie'],
        ['id'=> 2, 'title'=> 'No Captcha', 'slug'=>'no-captcha'],
        ['id'=> 3, 'title'=> 'SEOTools', 'slug'=>'seotools']

    ];
    public function getPackages()
    {
        $myList = $this->list;
        return view("packages.index",compact("myList"));
    }
}
