<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('matche.index') }}">Listes des utilisateurs</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('matche.store') }}" method="post">
            @csrf
            <div class="groupe">
                <label for="">Nom_equipe1 : </label>
                <input type="text" name="equipe1_name">
            </div>
            <div class="groupe">
                <label for="">Nom_equipe2 : </label>
                <input type="text" name="equipe2_name">
            </div>

            <div class="groupe">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</x-app-layout>

