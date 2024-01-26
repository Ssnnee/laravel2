<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom',
        'Prenom',
        'DateNaissance',
        'LieuNaissance',
        'Sexe',
        'Nationalite',
        'SituationMatrimoniale',
        'NombreEnfants',
        'Adresse',
        'Quartier',
        'Email',
        'Telephone',
        'Statut',
        'DateArriveeEmploi',
        'EcolePrestation',
        'CHI',
    ];

    protected $dates = [
        'DateNaissance',
        'DateArriveeEmploi',
        'created_at',
        'updated_at',
    ];
}
