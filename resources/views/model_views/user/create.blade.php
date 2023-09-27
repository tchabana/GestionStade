<x-app-layout>
<div class="creation">
    <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('user.index') }}">Listes des employes</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="groupe">
                <label for="">Name: </label>
                <input type="text" name="name">
                @error('name')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">Email: </label>
                <input type="email" name="email">
                @error('email')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>
            <div class="groupe">
                <label for="">Contact: </label>
                <input type="text" name="phone_number">
                @error('phone_number')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">Password: </label>
                <input type="password" name="password">
                @error('password')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div>
                <button type="submit" class="text-white flex mt-5 bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg font-bold">Enregistrer</button>
            </div>
        </form>
    </div>


</x-app-layout>
