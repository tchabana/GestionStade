@extends('layouts.app')
@section('content')
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="#">Listes des utilisateurs</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="">
            <div class="groupe">
                <label for="">Nom_equipe1 : </label>
                <input type="text" name="">
            </div>
            <div class="groupe">
                <label for="">Nom_equipe2 : </label>
                <input type="text" name="">
            </div>

            <div class="groupe">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
@endsection
