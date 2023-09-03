<x-app-layout>
    <div class="creation">
        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
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
                                Titre
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Equipe 1 Goals
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Equipe 2 Goals
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Save
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($eventstoday as $even )
                            @if ($even->matche!==null)
                                <form action="{{route('score.update',['score'=>$even->matche->score_id])}}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <td class="px-6 py-4 text-center">
                                            {{ $even->title }}
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $even->matche->equipe1_name }}
                                            <input type="number" name="equipe1_goles" value="{{$even->matche->score->equipe1_goal}}" id="">
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            {{ $even->matche->equipe2_name }}
                                            <input type="number" name="equipe2_goles" value="{{$even->matche->score->equipe2_goal}}" id="">
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <div class="mt-4 mb-4">
                                                <button class="text-white flex m-auto bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Save</button>
                                            </div>
                                        </td>
                                    </tr>
                                </form>
                            @else
                                
                            @endif
                        @empty
                            Aucun match  en cour
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
