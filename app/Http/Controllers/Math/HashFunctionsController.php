<?php


namespace App\Http\Controllers\Math;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class HashFunctionsController extends Controller {


    public function index()
    {
        return Inertia::render("Math/HashFunctions");
    }
    

    public function functionIndex($module) 
    {



    }

}