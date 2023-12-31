<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form method="POST" action="{{route('searchevent')}}" id="search-form">
            <div>
                <input class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="q" id="q" placeholder="{{ __('Search') }}">
            </div>
        </form>
        <div class="creation">
            <div>
                <div class="mb-10">
                    {{-- bouttonAfficher --}}
                </div>
            </div>
            <hr class="horizontal-row">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase bg-green-900 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                TITRE
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                DESCRIPTION
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Date && Heure DÉBUT
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Date && HEURE FIN
                            </th>
                            
                            <th scope="col" class="px-6 py-3 text-center">
                                AUTEURS
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                STATUS
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                NBRE GÉNÉRÉ DE TICKETS
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Nbr <br> participants
                            </th>
                            <th scope="col" class="px-6 py-3">
                                TICKETS DISPO
                            </th>
                            <th scope="col" class="px-6 py-3">
                                supprimer
                            </th>
                        </tr>
                    </thead>
                    <tbody id="tableau" >
                        @forelse ($events as $even )
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" id="{{$even->id}}">
                                <td class="px-6 py-4 text-center">
                                    {{ $even->title }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ substr($even->description, 0, 50) }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                    {{ $even->date_start.' '.$even->start_at }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                {{ $even->date_end.' '.$even->end_at }}

                                </td>
                                
                                <td class="px-6 py-4 text-center">
                                    {{ $even->authors }}
                                </td>

                                <td class="px-6 py-4 text-center">
                                   {!! $even->status() !!}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{$even->nbr_ticket_gen_local + $even->nbr_ticket_gen_online}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    {{ $even->nbr_participant }}
                                </td>
                                <td class="px-6 py-4 ">
                                    {{$even->nbr_participant - ($even->nbr_ticket_gen_local+$even->nbr_ticket_gen_online)}}
                                </td>
                                <td class="px-6 py-4 ">
                                    <form action="{{ route('event.destroy', $even)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <small>
                                            <button type="submit">
                                                <div>
                                                    <div>
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-600">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                        </svg>
                                                    </div>
                                                    <h3>Delete</h3>
                                                </div>
                                            </button>
                                        </small>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            Aucun evenement prevu actuellement
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        {{ $events->onEachSide(1)->links() }}
    </div>
    <script src="{{asset('js/search.js')}}"></script>
</x-app-layout>
