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

    public function updateDiplome(Request $request, $id)
    {
        // Validation des données du formulaire
        $request->validate([
            'nomDiplome' => 'required|string|max:50',
            'niveauDiplome' => 'required|string|max:50',
        ]);

        // Récupération du diplôme existant
        $diplome = diplomes::findOrFail($id);

        // Mise à jour des données du diplôme
        $diplome->nomDiplome = $request->nomDiplome;
        $diplome->niveauDiplome = $request->niveauDiplome;

        // Sauvegarde des modifications
        $diplome->save();

        // Redirection avec un message de succès
        return redirect()->route('diplome.index')->with('success', 'Diplôme mis à jour avec succès');
    }

    public function createDiplome()
    {
        $diplome = new diplomes();
        return view('ajoutDiplome', compact('diplome'));
    }

    public function storeDiplome(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nomDiplome' => 'required|string|max:50',
            'niveauDiplome' => 'required|string|max:50',
            'codeU' => 'required|int|max:50',
        ]);

        // Création d'une nouvelle instance de diplome
        $nouveauDiplome = new diplomes([
            'nomDiplome' => $request->nomDiplome,
            'niveauDiplome' => $request->niveauDiplome,
            'codeU' => $request->codeU,
        ]);

        // Sauvegarde du nouveau diplôme
        $nouveauDiplome->save();

        // Redirection avec un message de succès
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
        // Validation des données du formulaire
        $request->validate([
            'nomProgramme' => 'required|string|max:50',
            'dureeEchange' => 'required|int|max:50',
        ]);

        // Récupération du programme existant
        $programme = programmes::findOrFail($id);

        // Mise à jour des données du programme
        $programme->nomProgramme = $request->nomProgramme;
        $programme->dureeEchange = $request->dureeEchange;

        // Sauvegarde des modifications
        $programme->save();

        // Redirection avec un message de succès
        return redirect()->route('programme.index')->with('success', 'Programme mis à jour avec succès');
    }

    public function createProgramme()
    {
        $programme = new programmes();
        return view('ajoutProgramme', compact('programme'));
    }

    public function storeProgramme(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'nomProgramme' => 'required|string|max:50',
            'dureeEchange' => 'required|int|max:50',
            'codeDiplome' => 'required|int|max:50',
            'codeDiplome_1' => 'required|int|max:50',
        ]);

        // Création d'une nouvelle instance de programme
        $nouveauProgramme = new programmes([
            'nomProgramme' => $request->nomProgramme,
            'dureeEchange' => $request->dureeEchange,
            'codeDiplome' => $request->codeDiplome,
            'codeDiplome_1' => $request->codeDiplome_1,
        ]);

        // Sauvegarde du nouveau programme
        $nouveauProgramme->save();

        // Redirection avec un message de succès
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
        // Validation des données du formulaire
        $request->validate([
            'LibelleCours' => 'required|string|max:50',
            'nbECTS' => 'required|int|max:50',
            'annee' => 'required|int|max:50',
        ]);

        // Récupération du cours existant
        $cours = cours::findOrFail($id);

        // Mise à jour des données du cours
        $cours->LibelleCours = $request->LibelleCours;
        $cours->nbECTS = $request->nbECTS;
        $cours->annee = $request->annee;

        // Sauvegarde des modifications
        $cours->save();

        // Redirection avec un message de succès
        return redirect()->route('cours.index')->with('success', 'Cours mis à jour avec succès');
    }

    public function createCours()
    {
        $cours = new cours();
        return view('ajoutCours', compact('cours'));
    }

    public function storeCours(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'LibelleCours' => 'required|string|max:50',
            'nbECTS' => 'required|int|max:50',
            'annee' => 'required|int|max:50',
            'codeDiplome' => 'required|int|max:50',
        ]);

        // Création d'une nouvelle instance de cours
        $nouveauCours = new cours([
            'LibelleCours' => $request->LibelleCours,
            'nbECTS' => $request->nbECTS,
            'annee' => $request->annee,
            'codeDiplome' => $request->codeDiplome,
        ]);

        // Sauvegarde du nouveau cours
        $nouveauCours->save();

        // Redirection avec un message de succès
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
