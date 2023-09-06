<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('user.create') }}">Créer un gérant</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <h2>Comptes activés</h2>
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
                                {{$activ->role}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form action="" method="post">
                                        <button type="submit" class="bg-blue-500">Editer</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4 text-center">
                                <form action="" method="post">
                                        <button type="submit" class="bg-yellow-500">Desactiver</button>
                                    </form>
                                </td>
                           
                            </tr>
                            @empty 
                                <h2>Acun employe activé</h2>
                            @endforelse    
                    </tbody>
                </table>
            </div>
        </div>

        <h2>Comptes désactivés</h2>
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
                               Restorer
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
                                {{$desac->role}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                  <form action="" method="post">
                                    <button type="submit" class="bg-red-500">Supprimer</button>
                                  </form>
                                </td>
                                <td class="px-6 py-4 text-center">
                                <form action="" method="post">
                                    <button type="submit" class="bg-green-500">Restorer</button>
                                  </form>
                                </td>

                            </tr>
                     @empty 
                        <h2>Acun compte désactivé</h2>
                    @endforelse
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
