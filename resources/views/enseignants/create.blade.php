@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add an Enseignant</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif

            <form method="post" action="{{ route('enseignants.store') }}">
                @csrf

                <div class="form-group">
                    <label for="Nom">Nom:</label>
                    <input type="text" class="form-control" name="Nom"/>
                </div>

                <div class="form-group">
                    <label for="Prenom">Prenom:</label>
                    <input type="text" class="form-control" name="Prenom"/>
                </div>

                <div class="form-group">
                    <label for="DateNaissance">Date de Naissance:</label>
                    <input type="date" class="form-control" name="DateNaissance"/>
                </div>

                <div class="form-group">
                    <label for "LieuNaissance">Lieu de Naissance:</label>
                    <input type="text" class="form-control" name="LieuNaissance"/>
                </div>

                <div class="form-group">
                    <label for "Sexe">Sexe :</label>
                    <input type="text" class="form-control" name="Sexe"/>
                </div>

                <div class="form-group">
                    <label for "Nationalite">Nationalite :</label>
                    <input type="text" class="form-control" name="Nationalite"/>
                </div>

                <div class="form-group">
                    <label for "SituationMatrimoniale">Situation Matrimoniale :</label>
                    <input type="text" class="form-control" name="SituationMatrimoniale"/>
                </div>

                <div class="form-group">
                    <label for "NombreEnfants">Nombre d'Enfant :</label>
                    <input type="text" class="form-control" name="NombreEnfants"/>
                </div>

                <div class="form-group">
                    <label for="Adresse">Adresse:</label>
                    <input type="text" class="form-control" name="Adresse"/>
                </div>

                <div class="form-group">
                    <label for "Quartier">Quartier :</label>
                    <input type="text" class="form-control" name="Quartier"/>
                </div>

                <div class="form-group">
                    <label for "Email">Email :</label>
                    <input type="text" class="form-control" name="Email"/>
                </div>

                <div class="form-group">
                    <label for "Telephone">Telephone :</label>
                    <input type="text" class="form-control" name="Telephone"/>
                </div>


                <div class="form-group">
                    <label for "Statut">Statut :</label>
                    <input type="text" class="form-control" name="Statut"/>
                </div>

                <div class="form-group">
                    <label for "DateArriveeEmploi">Date d'arrivée Emploi :</label>
                    <input type="date" class="form-control" name="DateArriveeEmploi"/>
                </div>

                <div class="form-group">
                    <label for "EcolePrestation">Ecole Prestation :</label>
                    <input type="text" class="form-control" name="EcolePrestation"/>
                </div>

                <div class="form-group">
                    <label for "CHI">CHI :</label>
                    <input type="text" class="form-control" name="CHI"/>
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer  l'Enseignant</button>
            </form>
        </div>
    </div>
@endsection

