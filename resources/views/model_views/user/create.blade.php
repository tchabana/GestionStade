@extends('layouts.base')
@section('content')
    <div class="creation">
        <div>
            <div class="mb-10">
                <a class="bouttonAfficher" href="#"> Listes utilisateurs </a>
            </div>
        </div>
        <hr class="horizontal-row">
        <form action=" # " method="post">
            @csrf
            <div>
                <div class="groupe">
                    <label for="">Nom : </label>
                    <input type="text" placeholder="nom" name="name">
                </div>

                <div class="groupe">
                    <label for="">Email : </label>
                    <input type="email" placeholder="email" name="email">
                </div>

                <div class="groupe">
                    <label for="">Password : </label>
                    <input type="password" placeholder="password" name="password">
                </div>

                <div class="groupe">
                    <label for="">Confirm Password:</label>
                    <input type="password" placeholder="confirm-password" name="confirm-password">
                </div>

                {{-- <div class="groupe">
                    <label for="">Role :</label>
                    <select name="roles[]" class="form-control" multiple>
                        @foreach($roles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div> --}}

                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-4 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Soumettre</button>
                </div>
            </div>
        </form>
    </div>
@endsection
