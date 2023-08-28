@extends('layouts.welcome')
@section('appli')
<div class="scroll-px-52">
    <div class="flex w-4/5  m-auto gap-4">
        <div>
            <div class="w-[65rem] p-4 h-[35rem] bg-gray-500 rounded-lg object-cover overflow-hidden">
                <img class="h-full w-full rounded-lg" src="{{ asset('1.jpg') }}" alt="">
            </div>
            <div>
                <div class="w-[65rem] p-6 rounded-lg">
                    <div class="flex justify-end gap-4">
                        <div class="flex items-center gap-2 bg-gray-700 text-white p-1 rounded-full cursor-pointer">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                </svg>
                            </p>
                            <h1>150</h1>
                        </div>

                        <div>
                            <a href="" class="flex items-center gap-2  bg-gray-700 text-white p-1 rounded-full cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z" />
                                </svg>

                                <p>partager</p>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <div class="bg-gray-500 w-[65rem] mt-2 p-6 rounded-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo quaerat quos inventore est harum veritatis quibusdam nihil obcaecati eos optio quidem ad vero aperiam architecto, molestiae numquam? Repellendus sint nihil, officiis iste, facilis quibusdam architecto nemo error labore voluptatem laudantium. Ipsum magni impedit molestias commodi! Ratione, voluptatibus aperiam perferendis at quia repellat sequi voluptas natus a. Ipsa accusantium repellat tenetur aperiam vero rem ipsam eveniet similique ab molestias quibusdam maiores quia molestiae exercitationem reprehenderit est quas delectus ad debitis, consequuntur praesentium nesciunt. Velit dolore repudiandae ea consectetur laborum totam animi corporis debitis, mollitia perspiciatis eaque ducimus necessitatibus temporibus sapiente sequi.
                </div>
            </div>
        </div>


{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
        <div class="border-2 bg-white rounded-lg w-[30rem] p-4">
            <div class="rounded-lg">

                <div class="flex items-center w-96 h-[10rem] rounded-xl hover:shadow-2xl p-1 bg-gray-500 mb-4">
                    <div class="w-[10rem] h-full bg-gray-200 object-cover overflow-hidden rounded-l-xl">
                        <img class="w-full h-full" src="{{ asset('1.jpg') }}" alt="">
                    </div>

                    <div class="w-[15rem] h-full bg-green-800 rounded-r-xl">
                        <div>
                            <h2 class="text-white px-2"><strong>Danse traditionnelle</strong></h2>
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
                                <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit, blanditiis?</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
