@extends('layouts.app')
@section('content')

<div class="container mx-auto p-6">
    <form method="post" action="{{route('pdf')}}">
        @csrf
        <fieldset class="border rounded p-4 mb-6 bg-green-500 shadow-xl">
            <legend class="font-semibold">EVENEMENTS</legend>
            <div class="flex items-center space-x-4 flex-col">
                <label for="event" class="w-32 m-5">Sélectionner :</label>
                <select id="event" name="event_title" class="w-1/2 border rounded py-1 px-2 mb-3">
                    <!-- Options du dropdown ici -->
                    @foreach($events as $event)
                        <option value="{{$event->title}}">{{$event->title}}</option>
                    @endforeach
                </select>
                <a href="#" class="text-blue-800 underline"> Ou Créer Un Nouvel Événement</a>
            </div>
        </fieldset>
        
        <fieldset class="border rounded p-4 mt-6 mb-6 bg-yellow-500 shadow-xl">
            <legend class="font-semibold">TICKETS</legend>
            <div class="flex items-center space-x-4 ">
                <label for="ticketCount" class="w-40 m-5">Nombre de tickets :</label>
                <input type="number" id="ticketCount" name="ticketCount" class="border rounded py-1 px-2  m-5">
            </div>
            <div class="flex items-center space-x-4 ">
                <label for="ticketCount" class="w-40 m-5">Type de tickets :</label>
                <select id="event" name="event_title" class="w-60 border rounded py-1 px-2 mb-3">
                    <!-- Options du dropdown ici -->
                        <option value="">VIP</option>
                        <option value="">REGULIER</option>
                        <option value="">PARTICULIER</option>
                </select>
            </div>
        </fieldset>
        <div class="flex space-x-6 ">
        @if(!$reponse)
            <button type="submit" class="mt-4 bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600" id="generateButton">Générer</button>
       @endif
       @if($reponse)
            <a href="{{route('fermer')}}">
                <button type="button" id="generateButton" class="mt-4 bg-green-500 text-white rounded py-2 px-4 hover:bg-blue-600">Fermer</button>
            </a>
        @endif
        </div>
        
    </form>
    
</div>


    <div>
        <iframe src="{{ asset('temp/ticket.pdf') }}" width="100%" height="500"></iframe>
    </div>


@stop