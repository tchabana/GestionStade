@extends('layouts.welcome')
@section('appli')

    <section class="voire">
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">

                <div class="lg:w-4/5 mx-auto flex flex-wrap border-4 rounded-xl shadow-md">
                    <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('storage/' . $actualite->image_path) }}">
                    <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                        <h2 class="text-sm title-font text-gray-500 tracking-widest"> {{ $actualite->title }} </h2>

                        <div class="flex mb-4">
                            <span class="flex items-center">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-green-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                            </svg>
                            <span class="text-gray-600 ml-3">4 Visiteurs</span>
                            </span>

                        </div>
                        <p class="leading-relaxed"> {{ $actualite->message }} </p>

                        <div class="flex mt-4">
                            <span class="title-font font-medium text-2xl text-gray-900">Match</span>
                            <button class="flex ml-auto text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded"> <a href="/">Home</a></button>
                            <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                            </svg>
                            </button>
                        </div>
                    </div>
                </div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ --}}

                {{-- <div class="lg:w-4/5 mx-auto flex flex-wrap border-4 border-red-700 mt-4 mb-10 p-4"> --}}


                    {{-- <section class="text-gray-600 body-font">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-2 mx-auto">
                              <div class="flex flex-wrap -m-4">

                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="bg-gray-100 p-6 rounded-lg">

                                        <div class="w-full h-40 bg-black">
                                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="" alt="content">
                                        </div>
                                        <div class="mt-2">
                                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">USA & USB</h2>

                                            <p>Stade municiapl</p>

                                            <div class="flex items-center gap-4">
                                                <h5>D : 18:05:00</h5>
                                                <h5>F : 18:05:00</h5>
                                            </div>

                                            <p>Date : 11-10-2023</p>
                                            <p class="leading-relaxed text-base">
                                                Lorem ipsum dolor sit amet.
                                            </p>

                                            <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0" href="  ">voir plus
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="bg-gray-100 p-6 rounded-lg">

                                        <div class="w-full h-40 bg-black">
                                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="" alt="content">
                                        </div>
                                        <div class="mt-2">
                                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">USA & USB</h2>

                                            <p>Stade municiapl</p>

                                            <div class="flex items-center gap-4">
                                                <h5>D : 18:05:00</h5>
                                                <h5>F : 18:05:00</h5>
                                            </div>

                                            <p>Date : 11-10-2023</p>
                                            <p class="leading-relaxed text-base">
                                                Lorem ipsum dolor sit amet.
                                            </p>

                                            <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0" href="  ">voir plus
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="bg-gray-100 p-6 rounded-lg">

                                        <div class="w-full h-40 bg-black">
                                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="" alt="content">
                                        </div>
                                        <div class="mt-2">
                                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">USA & USB</h2>

                                            <p>Stade municiapl</p>

                                            <div class="flex items-center gap-4">
                                                <h5>D : 18:05:00</h5>
                                                <h5>F : 18:05:00</h5>
                                            </div>

                                            <p>Date : 11-10-2023</p>
                                            <p class="leading-relaxed text-base">
                                                Lorem ipsum dolor sit amet.
                                            </p>

                                            <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0" href="  ">voir plus
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 md:w-1/2 p-4">
                                    <div class="bg-gray-100 p-6 rounded-lg">

                                        <div class="w-full h-40 bg-black">
                                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="" alt="content">
                                        </div>
                                        <div class="mt-2">
                                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">USA & USB</h2>

                                            <p>Stade municiapl</p>

                                            <div class="flex items-center gap-4">
                                                <h5>D : 18:05:00</h5>
                                                <h5>F : 18:05:00</h5>
                                            </div>

                                            <p>Date : 11-10-2023</p>
                                            <p class="leading-relaxed text-base">
                                                Lorem ipsum dolor sit amet.
                                            </p>

                                            <a class="text-green-500 inline-flex items-center md:mb-2 lg:mb-0" href="  ">voir plus
                                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M5 12h14"></path>
                                                    <path d="M12 5l7 7-7 7"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                </div>







                              </div>
                            </div>
                        </section>
                    </section> --}}


                {{-- </div> --}}
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
                            <div class="h-14 w-14 sm:mr-10 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 flex-shrink-0">
                            </div>
                            <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                                <h2 class="text-xl title-font font-bold mb-2 text-white">Dimitri</h2>
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





                {{-- <section class="text-gray-600 body-font">
                    <div class="container px-5 py-24 mx-auto flex flex-col">
                      <div class="lg:w-4/6 mx-auto">
                        <div class="rounded-lg h-64 overflow-hidden">
                          <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('1.jpg') }}">
                        </div>

                        <div class="flex flex-col sm:flex-row mt-10">
                          <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">

                            <div class="flex flex-col items-center text-center justify-center">
                                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">TOGO vs GHANA</h2>
                                <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">Stade Municipal</h2>
                                <h4 class="font-medium title-font mt-4 text-gray-900 text-lg">Date</h4>
                                <h4 class="font-medium title-font mt-4 text-gray-900 text-lg">Heure Debut</h4>
                                <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                                <p class="text-base">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam aut at autem nulla illum, earum accusamus? Tenetur voluptatibus officiis eligendi!
                                </p>
                            </div>
                          </div>

                          <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-900 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left bg-gray-500">

                          </div>
                        </div>

                      </div>
                    </div>
                  </section>




























                </div> --}}
        </section>
    </section>
@endsection
