<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('user.create') }}">Créer un employe</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->

        <div class="creation">
            <div>
                <div class="mb-5">
                    <h1 class="text-blue-500 text-center">COMPTES ACTIVÉS</h1>
                </div>
            </div>
            <hr class="horizontal-row">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase bg-green-900 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Contact
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Editer
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Désactiver
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($employesA as $activ)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 text-center">
                                   {{$activ->name}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                {{$activ->email}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                {{$activ->phone_number}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                @if($activ->hasRole('gerant'))
                                    gerant
                                @else
                                    admin
                                @endif
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form action="{{route('user.edit',$activ)}}" method="get">
                                        <button type="submit" class="text-blue-500">Editer</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 text-center">
                                <form action="{{route('desactive',$activ)}}" method="post">
                                    @csrf
                                    @method('delete')
                                        <button type="submit" class="text-yellow-500">Desactiver</button>
                                    </form>
                                </td>

                            </tr>
                            @empty
                                <h1 class="font-red-500">Aucun employe activé</h1>
                            @endforelse
                    </tbody>
                </table>
            </div>
        </div>


        <div class="creation">
            <div>
                <div class="mb-5">
                <h1 class="text-red-500 text-center">COMPTES DÉSACTIVÉS</h1>
                </div>
            </div>
            <hr class="horizontal-row">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs uppercase bg-green-900 text-white">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-center">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Contact
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Supprimer
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                               Activer
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                      @forelse($employesD as $desac)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 text-center">
                                  {{$desac->name}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                   email1
                                </td>
                                <td class="px-6 py-4 text-center">
                                {{$desac->email}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                @if($desac->hasRole('gerant'))
                                    gerant
                                @else
                                    admin
                                @endif
                                </td>
                                <td class="px-6 py-4 text-center">
                                  <form action="{{route('user.destroy',$desac->id)}}" method="post">
                                    @csrf 
                                    @method('delete')
                                        <button type="submit" class="text-red-500">Supprimer</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 text-center">
                                 <form action="{{route('user.restore',$desac->id)}}" method="post">
                                    @csrf 
                                    @method('put')
                                        <button type="submit" class="text-green-500">Réactiver</button>
                                    </form>
                                </td>

                            </tr>
                     @empty
                        <h2>Aucun compte désactivé</h2>
                    @endforelse
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
