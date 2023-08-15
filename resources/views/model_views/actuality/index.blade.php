@extends('layouts.app')
@section('content')
<div class="creation">
    <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        {{-- <div class="listes">
            <a href="{{ route('actuality.index') }}">Listes des utilisateurs</a>
        </div>

        <hr class="bars"> --}}

        <div class="flex gap-5 flex-wrap">
            <div class="bg-blue-400 grid grid-cols-2 w-[22rem] rounded-lg border-2 overflow-hidden">
                <div class="w-[10rem] h-[8rem] object-cover">
                    <img class="w-full h-full" src="ball.png" alt="">
                </div>

                <div>
                    <div class="text-center">
                        <h1 class="font-bold italic">Titre</h1>
                    </div>
                    <div class="">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, amet?
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
