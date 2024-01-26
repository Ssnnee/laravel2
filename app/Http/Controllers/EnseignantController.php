<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignants = Enseignant::all();

        return view('enseignants.index', compact('enseignants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enseignants.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
            'Nom' => 'required|string|max:255',
            'Prenom' => 'required|string|max:255',
            'DateNaissance' => 'required|date',
            'LieuNaissance' => 'required|string|max:255',
            'Sexe' => 'required|string|max:255',
            'Nationalite' => 'required|string|max:255',
            'SituationMatrimoniale' => 'required|string|max:255',
            'NombreEnfants' => 'required|integer',
            'Adresse' => 'required|string|max:255',
            'Quartier' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
            'Telephone' => 'required|string|max:255',
            'Statut' => 'required|string|max:255',
            'DateArriveeEmploi' => 'required|date',
            'EcolePrestation' => 'required|string|max:255',
            'CHI' => 'required|string|max:255',
        ]);

        $enseignant = Enseignant::create($request->all());

        return redirect('enseignants')
            ->with('success', 'Enseignant créé avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enseignant = Enseignant::find($id);

        return view('enseignants.edit', compact('enseignant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $request->validate([
            'Nom' => 'required|string|max:255',
            'Prenom' => 'required|string|max:255',
            'DateNaissance' => 'required|date',
            'LieuNaissance' => 'required|string|max:255',
            'Sexe' => 'required|string|max:255',
            'Nationalite' => 'required|string|max:255',
            'SituationMatrimoniale' => 'required|string|max:255',
            'NombreEnfants' => 'required|integer',
            'Adresse' => 'required|string|max:255',
            'Quartier' => 'required|string|max:255',
            'Email' => 'required|string|max:255',
            'Telephone' => 'required|string|max:255',
            'Statut' => 'required|string|max:255',
            'DateArriveeEmploi' => 'required|date',
            'EcolePrestation' => 'required|string|max:255',
            'CHI' => 'required|string|max:255',
        ]);

        $enseignant = Enseignant::find($id);
        $enseignant->update($request->all());

        return redirect('enseignants')
            ->with('success', 'Enseignant mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enseignant = Enseignant::find($id);
        $enseignant->delete();

        return redirect('enseignants')
            ->with('success', 'Enseignant supprimé avec succès');
    }
}
