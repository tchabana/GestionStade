@extends('layouts.app')
@section('content')
    <div class="creation">
        <div class="listes">
            <a href="{{ route('event.index') }}">Listes des evenements</a>
        </div>
        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('event.store') }}" method="post">

            @csrf
            <div class="groupe">
                <label for="">Title : </label>
                <input type="text" name="title" value="{{ $event->title }}">
            </div>

            <div class="groupe">
                <label for="">Description : </label>
                <textarea name="description" id="" cols="30" rows="10" value="{{ $event->description }}"></textarea>
            </div>

            <div class="groupe">
                <label for="">Date_on : </label>
                <input type="date" name="date_on" id="" value="{{ $event->date_on }}">
            </div>

            <div class="groupe">
                <label for="">Start_at : </label>
                <input type="time" name="start_at" id="" value="{{ $event->start_at }}">
            </div>

            <div class="groupe">
                <label for="">End_at : </label>
                <input type="time" name="end_at" id="" value="{{ $event->end_at }}">
            </div>

            <div class="groupe">
                <label for="">Authors : </label>
                <input type="text" name="authors" value="{{ $event->authors }}">
            </div>

            <div class="groupe">
                <label for="">Participant_count : </label>
                <input type="number" name="nbr_participant" value="{{ $event->nbr_participant }}">
            </div>

            <div class="groupe">
                <label for="">Info supplementaire : </label>
                <textarea name="info_suplementaire" id="" cols="30" rows="10" value="{{ $event->info_suplementaire }}"></textarea>
            </div>

            <div class="groupe">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
@endsection
