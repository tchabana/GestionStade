<x-app-layout>
<div class="creation">
    <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('user.index') }}">Listes des gérants</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="groupe">
                <label for="">Name: </label>
                <input type="text" name="name">
            </div>

            <div class="groupe">
                <label for="">Email: </label>
                <input type="email" name="email">
            </div>
            <div class="groupe">
                <label for="">Contact: </label>
                <input type="number" name="phone_number">
            </div>

            <div class="groupe">
                <label for="">Password: </label>
                <input type="password" name="password">
            </div>

            <div class="groupe">
                <button type="submit">Enregistrer</button>
            </div>
        </form>
    </div>

    
</x-app-layout>
