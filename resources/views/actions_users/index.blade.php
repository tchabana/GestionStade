@extends('layouts.welcome')
@section('appli')


<h1 class="text-2xl ml-10 text-red-700">Toutes les actualités en directe</h1>
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">

        @forelse ($actualite as $actus)
            <div class="p-4 md:w-1/3">
            <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{ asset('storage/' . $actus->image_path) }}" alt="blog">
                <div class="p-6">
                <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $actus->title }}</h1>
                <p class="leading-relaxed mb-3">
                    {{ $actus->message }}
                </p>
                <div class="flex items-center flex-wrap ">
                    <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0" href=" {{ route('show',['id' => $actus->id]) }} ">voir plus
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>1.2K
                    </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>6
                    </span>
                </div>
                </div>
            </div>
            </div>
        @empty
            Pas d'actualité
        @endforelse
      </div>
    </div>
  </section>

{{-- ------------------------------------------------------------------------------------------------ --}}



<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">TON EQUIPE</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
            Profiter de meilleur moment du foot dans la ville de sokodé, choissier le match auquel vous voulez participez
        </p>
      </div>
      <div class="flex flex-wrap -m-4">
        @forelse ($eventes as $even)
            <div class="p-4 lg:w-1/4 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center bg-gray-100 shadow-md hover:shadow-2xl hover:border-green-800 hover:border-2 hover:rounded-lg">
                <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="{{ asset('storage/' . $even->image_path) }}">

                <div class="w-full">
                <h2 class="title-font font-medium text-lg text-gray-900">{{$even->matche!==null?$even->matche->equipe1_name:""}} & {{$even->matche!==null?$even->matche->equipe2_name:""}}</h2>
                <h3 class="text-gray-500 mb-3">Stade Municipal</h3>
                <h1>{{ $even->start_at }}</h1>
                <p class="mb-4">{{ $even->description }}</p>
                <span class="inline-flex">
                    <a class="text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                    </a>
                    <a class="ml-2 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                    </a>
                </span>
                </div>
            </div>
            </div>
        @empty
            Pas d'actualité
        @endforelse
      </div>
    </div>
  </section>


@endsection
