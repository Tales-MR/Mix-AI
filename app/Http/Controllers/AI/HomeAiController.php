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


    public function teste(Request $request) {
        $result = Http::get("http://127.0.0.1:5000/teste-api");

        $result = $result->json();

        // Dump the result for debugging
        dd($result);

        return response()->json($result);
    }


}