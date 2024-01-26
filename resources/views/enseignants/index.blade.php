@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Enseignants</h1>
            <div>
                <a style="margin: 19px;" href="{{ route('enseignants.create')}}" class="btn btn-primary">Ajouter un  enseignant</a>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Date de Naissance</td>
                        <td>Lieu de Naissance</td>
                        <td>Sexe</td>
                        <td>Nationalite</td>
                        <td>Situation Matrimoniale</td>
                        <td>Nombre d'Enfant</td>
                        <td>Adresse</td>
                        <td>Email</td>
                        <td>Telephone</td>
                        <td>Statut</td>
                        <td>Date d'Arrivee a l'Emploi</td>
                        <td>Ecole de Prestation</td>
                        <td>CHI</td>

                        <td colspan="2">Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($enseignants as $enseignant)
                        <tr>
                            <td>{{$enseignant->id}}</td>
                            <td>{{$enseignant->Nom}}</td>
                            <td>{{$enseignant->Prenom}}</td>
                            <td>{{$enseignant->DateNaissance}}</td>
                            <td>{{$enseignant->LieuNaissance}}</td>
                            <td>{{$enseignant->Sexe}}</td>
                            <td>{{$enseignant->Nationalite}}</td>
                            <td>{{$enseignant->SituationMatrimoniale}}</td>
                            <td>{{$enseignant->NombreEnfants}}</td>
                            <td> {{$enseignant->Adresse}}</td>
                            <td>{{$enseignant->Email}}</td>
                            <td>{{$enseignant->Telephone}}</td>
                            <td>{{$enseignant->Statut}}</td>
                            <td>{{$enseignant->DateArriveeEmploi}}</td>
                            <td>{{$enseignant->EcolePrestation}}</td>
                            <td>{{$enseignant->CHI}}</td>

                            <td>
                                <a href="{{ route('enseignants.edit', $enseignant->id)}}" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('enseignants.destroy', $enseignant->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-12"> @if(session()->get('success'))
    <div class="alert alert-success"> {{ session()->get('success') }} </div> @endif</div>
    </div>
@endsection

