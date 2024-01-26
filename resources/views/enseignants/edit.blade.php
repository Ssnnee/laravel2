@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update an Enseignant</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif

            <form method="post" action="{{ route('enseignants.update', $enseignant->id) }}">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="Nom">Nom:</label>
                    <input type="text" class="form-control" name="Nom" value="{{ $enseignant->Nom }}" />
                </div>

                <div class="form-group">
                    <label for="Prenom">Prenom:</label>
                    <input type="text" class="form-control" name="Prenom" value="{{ $enseignant->Prenom }}" />
                </div>

                <div class="form-group">
                    <label for="DateNaissance">Date de Naissance:</label>
                    <input type="date" class="form-control" name="DateNaissance" value="{{ $enseignant->DateNaissance }}" />
                </div>

                <div class="form-group">
                    <label for "LieuNaissance">Lieu de Naissance:</label>
                    <input type="text" class="form-control" name="LieuNaissance" value="{{$enseignant->LieuNaissance }}"  />
                </div>

                <div class="form-group">
                    <label for "Sexe">Sexe :</label>
                    <input type="text" class="form-control" name="Sexe" value="{{ $enseignant->Sexe }}"/>
                </div>

                <div class="form-group">
                    <label for "Nationalite">Nationalite :</label>
                    <input type="text" class="form-control" name="Nationalite" value="{{ $enseignant->Nationalite }}"/>
                </div>

                <div class="form-group">
                    <label for "SituationMatrimoniale">Situation Matrimoniale :</label>
                    <input type="text" class="form-control" name="SituationMatrimoniale" value="{{ $enseignant->SituationMatrimoniale }}"/>
                </div>

                <div class="form-group">
                    <label for "NombreEnfants">Nombre d'Enfant :</label>
                    <input type="text" class="form-control" name="NombreEnfants" value="{{ $enseignant->NombreEnfants }}"/>
                </div>

                <div class="form-group">
                    <label for="Adresse">Adresse:</label>
                    <input type="text" class="form-control" name="Adresse" value="{{ $enseignant->Adresse }}"/>
                </div>

                <div class="form-group">
                    <label for "Quartier">Quartier :</label>
                    <input type="text" class="form-control" name="Quartier" value="{{ $enseignant->Quartier }}"/>
                </div>

                <div class="form-group">
                    <label for "Email">Email :</label>
                    <input type="text" class="form-control" name="Email" value="{{ $enseignant->Email }}"/>
                </div>

                <div class="form-group">
                    <label for "Telephone">Telephone :</label>
                    <input type="text" class="form-control" name="Telephone" value="{{ $enseignant->Telephone }}"/>
                </div>


                <div class="form-group">
                    <label for "Statut">Statut :</label>
                    <input type="text" class="form-control" name="Statut" value="{{ $enseignant->Statut }}"/>
                </div>

                <div class="form-group">
                    <label for "DateArriveeEmploi">Date d'arrivée Emploi :</label>
                    <input type="date" class="form-control" name="DateArriveeEmploi" value="{{ $enseignant->DateArriveeEmploi }}"/>
                </div>

                <div class="form-group">
                    <label for "EcolePrestation">Ecole Prestation :</label>
                    <input type="text" class="form-control" name="EcolePrestation" value={{ $enseignant->EcolePrestation }}"/>
                </div>

                <div class="form-group">
                    <label for "CHI">CHI :</label>
                    <input type="text" class="form-control" name="CHI" value="{{ $enseignant->CHI }}"/>
                </div>

                <button type="submit" class="btn btn-primary">Mettre à jour </button>
            </form>
        </div>
    </div>
@endsection

