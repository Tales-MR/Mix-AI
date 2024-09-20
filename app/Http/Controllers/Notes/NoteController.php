<?php

namespace App\Http\Controllers\Notes;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class NoteController extends Controller {


    public function index() 
    {
        return Inertia::render("Notes/Note");
    }
    
}