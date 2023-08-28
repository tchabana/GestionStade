<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('matche.create') }}">Créer un match</a>
        </div>

        <div>
            @forelse ($matches as $matche)
                <h1> {{ $matche->equipe1_name }} </h1>
                <h2> {{ $matche->equipe2_name }} </h2>
            @empty
                Aucun matche programmé
            @endforelse
        </div>

    </div>
</x-app-layout>
