@extends('layouts.welcome')
@section('appli')

<h1 class="text-2xl ml-10 text-red-700">Toutes les actualités en directe</h1>

<section class="w-[92%] md:w-[96%] lg:w-[90%] m-auto lg:px-5 sm:px-5 md:px-5 mt-4">
    <div class="mt-4">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 md:gap-6 lg:grid-cols-4 xl:grid-cols-4">
                @forelse ($actualite as $actus)
                    <div class="flex items-center w-96 h-[10rem] rounded-xl hover:shadow-2xl p-1 bg-gray-500 mb-4">

                        <div class="w-[10rem] h-full bg-gray-200 object-cover overflow-hidden rounded-l-xl">
                            <img class="w-full h-full" src="{{ asset('storage/' . $actus->image_path) }}" alt="">
                        </div>

                        <div class="w-[15rem] h-full bg-green-800 rounded-r-xl">
                            <div>
                                <h2 class="text-white px-2"><strong>{{ $actus->title }}</strong></h2>
                            </div>
                            <div class="relative">
                                <div class="absolute top-[-2.5rem] right-[1px] dimitrio bg-green-900 w-[30px] h-[30px]  cursor-pointer hover:bg-yellow-500 hover:border-green-700 hover:border-2">
                                    <a href="" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1 mt-1 text-yellow-300 hover:text-red-900">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="bg-green-900 p-2 dims mt-4 h-[7rem]">
                                    <p class="text-white">{{ $actus->message }}</p>
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



<h1 class="text-2xl ml-10 text-red-700">Toutes les actualités en directe</h1>
    <section class="w-[92%] md:w-[96%] lg:w-[90%] m-auto lg:px-5 sm:px-5 md:px-5 mt-4">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 md:gap-6 lg:grid-cols-4 xl:grid-cols-4">
            @forelse ($eventes as $even)
                <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                    <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                        {{-- <img class="h-full w-full" src="{{ asset('storage/' . $actus->image_path) }}" alt=""> --}}
                    </div>
                    <div class="mt-4">
                        <div>
                            <h1 class="font-bold text-lg">Togo & Etats-Unis</h1>
                        </div>

                        <div>
                            <div class="flex items-center gap-10 px-2 mt-2">
                                <div class="flex items-center gap-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h1 class="text-lg ront-bold">
                                        {{ $even->start_at }}
                                    </h1>
                                </div>
                                <div class="flex items-center gap-3">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                        </svg>
                                    </div>
                                    <h1 class="text-orange-800 font-bold text-lg">
                                        stade municipal
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="px-1 mt-2 ">
                            {{ $even->description }}
                        </div>
                    </div>

                    <div class="flex items-center justify-between px-4 mt-2 ">
                        <div>
                            <a class="cursor-pointer" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:scale-50 text-orange-700 scale-[1.2]">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>
                            </a>
                        </div>
                        <div>
                        <a class="cursor-pointer" href="">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:scale-50 text-blue-700 scale-[1.3]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </a>
                        </div>
                    </div>
                </div>
            @empty
                Pas d'actualité
            @endforelse
        </div>
    </section>

@endsection




{{-- <td class="px-6 py-4 text-center">
    {{ $even->title }}
</td>
<td class="px-6 py-4 text-center">
    {{ $even->description }}
</td>
<td class="px-6 py-4 text-center">
    {{ $even->date_on }}
</td>
<td class="px-6 py-4 text-center">
    {{ $even->start_at }}
</td>
<td class="px-6 py-4 text-center">
    {{ $even->end_at }}
</td>
<td class="px-6 py-4 text-center">
    {{ $even->nbr_participant }}
</td>
<td class="px-6 py-4 text-center">
    {{ $even->authors }}
</td>
<td class="px-6 py-4 text-center">
    {{ $even->info_suplementaire }}
</td> --}}
