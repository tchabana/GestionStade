@extends('layouts.welcome')
@section('appli')

    <section class="voire">
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">

                <div class="lg:w-4/5 mx-auto flex flex-wrap border-4 rounded-xl shadow-md">
                    <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('storage/' . $actualite->image_path) }}">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest"> {{ $actualite->title }} </h2>


                        <p class="leading-relaxed"> {{ $actualite->message }} </p>

                        <div class="flex mt-4">
                            <span class="title-font font-medium text-2xl text-gray-900">Match</span>
                            <button class="flex ml-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded"> <a href="/">Accueil</a></button>
                        </div>
                    </div>
                </div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ --}}

                {{-- <div class="lg:w-4/5 mx-auto flex flex-wrap border-4 border-red-700 mt-4 mb-10 p-4">
                    <div class="flex border-2 items-center gap-2 m-auto">
                        <div class="box">
                            <div class="flex gap-2 items-center">
                                <img class="w-8 h-8 rounded-full" src="{{asset("foot.png")}}" alt="">
                                <p>SOKODE</p>
                            </div>
                            <div class="mt-2">
                                <p>Titre</p>
                                <p>Date</p>
                                <p>Heure</p>
                            </div>
                        </div>
                        <div class="box">
                            <img src="{{asset("codesQR/image_fvBQUVJU1NplJ1QbK9bdGqJTyMHNBJIL2DkkWXhOi0qEPI9N5Q39ZNLeHPiBgFkc.svg")}}" alt="">
                        </div>
                    </div>
                    
                </div> --}}
{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ --}}

                <section class="text-gray-600 body-font px-2 mt-10">
                    <section class="flex items-center lg:w-3/5 mx-auto mb-4">

                        <form action="{{ route('comment.store') }}" method="post">
                            @csrf
                            <div class="flex items-center bg-black rounded-xl px-2 h-20">
                                <div class="grid">
                                    <label for="" class="text-white italic">Commentaire</label>
                                    <hr class="mb-1">
                                    <div class="flex">
                                        <textarea class="h-10 bg-green-950 text-white rounded-md lg:w-[50rem] resize-none border-0 outline-none" name="message" id="" cols="30" rows="10"></textarea>
                                        <input type="hidden"  value="{{ $actualite->id}}" name="event_id">

                                        <button type="submit" class="flex  text-white bg-green-500 border-0 w-10 focus:outline-none hover:bg-green-600 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-center">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </section>


                    <div class="mb-10">
                        @forelse ($commentaire as $con)
                        <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col mb-4 bg-gray-800 rounded-xl p-2">
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                                <p class="leading-relaxed text-base text-white">
                                    {{ $con->message }}
                                </p>

                                <p class="flex justify-end text-green-500"><strong class="text-white mr-4">commenté le 👉 </strong> {{ $con->created_at}}</p>
                            </div>
                        </div>
                    @empty
                        <p>Aucun commentaire</p>
                    @endforelse
                    </div>
                </section>






        </section>
    </section>
@endsection
