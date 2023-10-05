@extends('layouts.welcome')
@section('appli')

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
            <div class="h-full flex flex-col items-center text-center
                hover:bg-gray-950
             bg-gray-100 shadow-md hover:shadow-2xl hover:rounded-lg">
                <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="{{ asset('storage/' . $even->image_path) }}">

                <div class="w-full">
                @if ($even->matche!==null)
                    <h2 class="title-font font-medium text-lg text-gray-900 hover:text-white">{{$even->matche!==null?$even->matche->equipe1_name:""}} <strong class="text-red-500 text-2xl"> vs </strong> {{$even->matche!==null?$even->matche->equipe2_name:""}}</h2>
                @else
                    <h2 class="title-font font-medium text-xl text-red-900 hover:text-white">{{$even->title}}</h2>
                @endif
                <h3 class="mb-3 text-green-500">Stade Municipal</h3>
                <div class="flex items-center text-red-600 justify-center gap-10">
                    <h1>Dt: {{ $even->start_at }}</h1>
                    <h2>Fin : {{ $even->start_at }}</h2>
                </div>
                <p class="mb-4 px-2">{{ substr($even->description, 0, 50) }}</p>

                <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-4" href=" {{ route('payticket', [$even->id]) }} ">voir plus
                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                    </svg>
                    </a>
                </div>
            </div>
            </div>
        @empty
            <p class="text-center">Pas d'actualité</p>
        @endforelse
      </div>


    </div>
    <div class="mx-48 mb-10">
        {{ $eventes->onEachSide(1)->links() }}
    </div>
  </section>


@endsection
