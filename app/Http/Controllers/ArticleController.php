<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private $article = [
        ["id"=> 1, "designation"=>"article1","prix"=>100],
        ["id"=> 2, "designation"=>"article2","prix"=>200],
        ["id"=> 3, "designation"=>"article3","prix"=>300]
    ];

    public function index()
    {
        return view("ListArticle",["article"=>$this->article]);
    }

    public function show($id)
    {
        
        foreach($this->article as $v)
        {
            if($v["id"] == $id)
           {
            return view("article",compact("v"));
           }
          
        }

    }
}
