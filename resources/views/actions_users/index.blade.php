{{-- </x-welcome-layout> --}}
@extends('layouts.welcome')
@section('appli')
    <section class="w-[92%] md:w-[96%] lg:w-[90%] m-auto lg:px-5 sm:px-5 md:px-5 mt-4">
        <div class="grid sm:grid-cols-1 md:grid-cols-2 md:gap-6 lg:grid-cols-4 xl:grid-cols-4">
            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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

            <div class="lg:h-[32rem] sm:h-[25rem]  bg-white border-4 shadow-lg rounded-xl mb-4  lg:w-96 md:h-[31rem]">
                <div class="w-full lg:h-72 sm:h-52  object-cover overflow-hidden rounded-lg md:h-60">
                    <img class="h-full w-full" src="{{ asset('ball.png') }}" alt="">
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
                                    14h:30
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
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis esse quod minima vitae, laborum quaerat nisi corporis ipsam omnis culpa?
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
        </div>
    </section>

@endsection
