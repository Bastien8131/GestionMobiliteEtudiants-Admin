<?php

namespace App\Http\Controllers;
//use App\Models\;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\diplomes;
use App\Models\universites;
use App\Models\programmes;
use App\Models\cours;

class accueil extends Controller
{
    // Partie diplôme
    public function fonctionDiplome()
    {
        $diplomes = diplomes::with('universites')->get();
        $universites = universites::all();

        return view('diplome', compact('diplomes', 'universites'));
    }

    public function editDiplome($id)
    {
        $diplome = diplomes::findOrFail($id);
        return view('editDiplome', compact('diplome'));
    }

    // Fonction updateDiplome() qui permet de mettre à jour les données d'un diplôme sélectionné dans le formulaire
    public function updateDiplome(Request $request, $id)
    {
        // On valide les données du formulaire
        $request->validate([
            'nomDiplome' => 'required|string|max:250',
            'niveauDiplome' => 'required|string|max:250',
            'codeU' => 'required|int|max:250',
        ]);

        // On récupère le diplôme que l'on souhaite modifier
        $diplome = diplomes::findOrFail($id);

        // On met à jour les données du diplôme
        $diplome->nomDiplome = $request->nomDiplome;
        $diplome->niveauDiplome = $request->niveauDiplome;
        $diplome->codeU = $request->codeU;

        // On sauvegarde les modifications
        $diplome->save();

        // On redirige vers la page de gestion des diplômes
        return redirect()->route('diplome.index')->with('success', 'Diplôme mis à jour avec succès');
    }

    public function createDiplome()
    {
        $diplome = new diplomes();
        return view('ajoutDiplome', compact('diplome'));
    }

    public function storeDiplome(Request $request)
    {
        $request->validate([
            'nomDiplome' => 'required|string|max:250',
            'niveauDiplome' => 'required|string|max:250',
            'codeU' => 'required|int|max:250',
        ]);

        // On crée une nouvelle instance de diplome
        $nouveauDiplome = new diplomes([
            'nomDiplome' => $request->nomDiplome,
            'niveauDiplome' => $request->niveauDiplome,
            'codeU' => $request->codeU,
        ]);

        $nouveauDiplome->save();

        return redirect()->route('diplome.index')->with('success', 'Diplôme ajouté avec succès');
    }

    public function confirmDeleteDiplome($id)
    {
        $diplome = diplomes::findOrFail($id);
        return view('suppressionDiplome', compact('diplome'));
    }

    public function destroyDiplome($id)
    {
        $diplome = diplomes::findOrFail($id);
        $diplome->delete();
        return redirect()->route('diplome.index')->with('success', 'Diplôme supprimé avec succès');
    }

       
    public function diplomesParUniv($universiteId = null)
    {
        $universites = universites::all();
        $selectedUniversite = $universiteId ? universites::find($universiteId) : null;
        
        // On récupère les diplômes associés à l'université sélectionnée
        $diplomes = $selectedUniversite ? $selectedUniversite->diplomes : collect();
    
        return view('diplomeUniv', compact('universites', 'selectedUniversite', 'diplomes'));
    }

    // Partie programme
    public function fonctionProgramme()
    {
        $programmes = programmes::with('diplomes')->get();
        $diplomes = diplomes::all();

        return view('programme', compact('programmes', 'diplomes'));
    }

    public function editProgramme($id)
    {
        $programme = programmes::findOrFail($id);
        return view('editProgramme', compact('programme'));
    }

    public function updateProgramme(Request $request, $id)
    {
        $request->validate([
            'nomProgramme' => 'required|string|max:250',
            'dureeEchange' => 'required|int|max:999',
            'codeDiplome' => 'required|int|max:250',
        ]);

        $programme = programmes::findOrFail($id);

        $programme->nomProgramme = $request->nomProgramme;
        $programme->dureeEchange = $request->dureeEchange;
        $programme->codeDiplome = $request->codeDiplome;

        $programme->save();

        return redirect()->route('programme.index')->with('success', 'Programme mis à jour avec succès');
    }

    public function createProgramme()
    {
        $programme = new programmes();
        return view('ajoutProgramme', compact('programme'));
    }

    public function storeProgramme(Request $request)
    {
        $request->validate([
            'nomProgramme' => 'required|string|max:250',
            'dureeEchange' => 'required|int|max:999',
            'codeDiplome' => 'required|int|max:250',
            'codeDiplome_1' => 'required|int|max:250',
        ]);

        $nouveauProgramme = new programmes([
            'nomProgramme' => $request->nomProgramme,
            'dureeEchange' => $request->dureeEchange,
            'codeDiplome' => $request->codeDiplome,
            'codeDiplome_1' => $request->codeDiplome_1,
        ]);

        $nouveauProgramme->save();

        return redirect()->route('programme.index')->with('success', 'Programme ajouté avec succès');
    }

    public function confirmDeleteProgramme($id)
    {
        $programme = programmes::findOrFail($id);
        return view('suppressionProgramme', compact('programme'));
    }

    public function destroyProgramme($id)
    {
        $programme = programmes::findOrFail($id);
        $programme->delete();
        return redirect()->route('programme.index')->with('success', 'Programme supprimé avec succès');
    }

    // Partie cours
    public function fonctionCours()
    {
        $cours = cours::with('diplomes')->get();
        $diplomes = diplomes::all();

        return view('cours', compact('cours', 'diplomes'));
    }

    public function editCours($id)
    {
        $cours = cours::findOrFail($id);
        return view('editCours', compact('cours'));
    }

    public function updateCours(Request $request, $id)
    {
        $request->validate([
            'LibelleCours' => 'required|string|max:250',
            'nbECTS' => 'required|int|max:50',
            'annee' => 'required|int|max:9999',
            'codeDiplome' => 'required|int|max:250',
        ]);

        $cours = cours::findOrFail($id);

        $cours->LibelleCours = $request->LibelleCours;
        $cours->nbECTS = $request->nbECTS;
        $cours->annee = $request->annee;
        $cours->codeDiplome = $request->codeDiplome;

        $cours->save();

        return redirect()->route('cours.index')->with('success', 'Cours mis à jour avec succès');
    }

    public function createCours()
    {
        $cours = new cours();
        return view('ajoutCours', compact('cours'));
    }

    public function storeCours(Request $request)
    {
        $request->validate([
            'LibelleCours' => 'required|string|max:250',
            'nbECTS' => 'required|int|max:50',
            'annee' => 'required|int|max:9999',
            'codeDiplome' => 'required|int|max:250',
        ]);

        $nouveauCours = new cours([
            'LibelleCours' => $request->LibelleCours,
            'nbECTS' => $request->nbECTS,
            'annee' => $request->annee,
            'codeDiplome' => $request->codeDiplome,
        ]);

        $nouveauCours->save();

        return redirect()->route('cours.index')->with('success', 'Cours ajouté avec succès');
    }

    public function confirmDeleteCours($id)
    {
        $cours = cours::findOrFail($id);
        return view('suppressionCours', compact('cours'));
    }

    public function destroyCours($id)
    {
        $cours = cours::findOrFail($id);
        $cours->delete();
        return redirect()->route('cours.index')->with('success', 'Cours supprimé avec succès');
    }

    public function coursParDiplome($diplomeId = null)
    {
        $diplomes = diplomes::all();
        $selectedDiplome = $diplomeId ? diplomes::find($diplomeId) : null;
        
        // On récupère les cours associés au diplome sélectionnée
        $cours = $selectedDiplome ? $selectedDiplome->cours : collect();
    
        return view('coursDiplome', compact('diplomes', 'selectedDiplome', 'cours'));
    }

    public function demandeMobilites(){
        $demandeMobilites = DB::select('SELECT * FROM demandesmobilite');
        return view('gestionDemandeMobilite')
            ->with('demandeMobilites', $demandeMobilites)
            ;
    }

    public function consulterContrats(){
        $listeContrats = DB::select('SELECT * FROM contrats');
        return view('listeContrats')
            ->with('listeContrats', $listeContrats)
            ;
    }

    public function demandeFinancement(){
        $demandeFinancements = DB::select('SELECT * FROM demandesfinancement');
        return view('gestionDemandeFinancement')
            ->with('demandeFinancements', $demandeFinancements)
            ;
    }
}
