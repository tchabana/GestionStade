<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('matche.create') }}">Créer un match</a>
        </div>

        {{-- <div>
            @forelse ($matches as $matche)
                <h1> {{ $matche->equipe1_name }} </h1>
                <h2> {{ $matche->equipe2_name }} </h2>
            @empty
                Aucun matche programmé
            @endforelse
        </div> --}}
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-4 mx-auto">
              <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <table class="table-auto w-full text-left whitespace-no-wrap">
                  <thead >
                    <tr>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-lg bg-green-500 rounded-tl rounded-bl text-center">Equipe A</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-lg bg-green-500 text-center">Equipe B</th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-lg bg-green-500 text-center">Date </th>
                      <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-lg bg-green-500 text-center">Responsable</th>
                      {{-- <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th> --}}
                    </tr>
                  </thead>
                  <tbody class="bg-yellow-700">
                    @forelse ($matches as $matche)
                        <tr>
                        <td class="px-4 py-3 text-white  text-center">{{ $matche->equipe1_name }}</td>
                        <td class="px-4 py-3 text-white  text-center">{{ $matche->equipe2_name }}</td>
                        <td class="px-4 py-3 text-white  text-center">{{ $matche->created_at }}</td>
                        <td class="px-4 py-3 text-white  text-center text-lg ">{{ $matche->equipe1_name }}</td>
                        </tr>
                    @empty
                        Aucun matche programmé
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </section>


    </div>
</x-app-layout>
