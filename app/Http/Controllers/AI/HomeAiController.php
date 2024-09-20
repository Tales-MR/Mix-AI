<?php

namespace App\Http\Controllers\AI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class HomeAiController extends Controller {

    public function index() {

        return Inertia::render('Auth/Register');
    }


    public function getAi(Request $request) {
        $result = Http::get("http://127.0.0.1:5000/ai");

        $result = $result->json();

        // Dump the result for debugging
        dd($result);

        return response()->json($result);
    }


    public function trainAi() {
    
        return Inertia::render("AI/Train-AI");
    }

    

    public function manageAis() {
        $result = Http::get("http://127.0.0.1:5000/get-all-ais");
        $result2 = Http::get("http://127.0.0.1:3200/hey");

        $result = $result->json();
        $result2 = $result2->json();


        return Inertia::render("AI/Manage-AI", [
            "data_ai" => $result, 
            "data_node" => $result2
        ]);
    }
    
}