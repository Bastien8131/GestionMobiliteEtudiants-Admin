<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diplomes;
use App\Models\universites;
use App\Models\programmes;
use App\Models\cours;

class accueil extends Controller
{
    public function fonctionDiplome()
    {
        $diplomes = diplomes::with('universites')->get();
        $universites = universites::all();
    
        return view('diplome', compact('diplomes', 'universites'));
    }

    public function fonctionProgramme()
    {
        $programmes = programmes::with('diplomes')->get();
        $diplomes = diplomes::all();
    
        return view('programme', compact('programmes', 'diplomes'));
    }

    public function fonctionCours()
    {
        $cours = cours::with('diplomes')->get();
        $diplomes = diplomes::all();
    
        return view('cours', compact('cours', 'diplomes'));
    }
}
