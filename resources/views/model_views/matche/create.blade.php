<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('event.index') }}">Listes des evenements</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('matche.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="text-gray-600 body-font">
                <div class="container px-1 sm:py-8 md:py-4 lg:py-24 mx-auto">
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8   sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Titre</label>
                            <input value="{{ old('title') }}" type="text" id="full-name" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('title')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Description</label>
                            <input value="{{ old('description') }}" type="text" id="email" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('description')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Date debut</label>
                            <input value="{{ old('date_start') }}" type="date" id="full-name" name="date_start" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('date_start')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Date fin</label>
                            <input value="{{ old('date_end') }}" type="date" id="email" name="date_end" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('date_end')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Heure Debut</label>
                            <input value="{{ old('start_at') }}" type="time" id="full-name" name="start_at" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('start_at')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Heure Fin</label>
                            <input value="{{ old('end_at') }}" type="time" id="email" name="end_at" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('end_at')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>


                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Nom responsable</label>
                            <input value="{{ old('authors') }}" type="text" id="full-name" name="authors" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('authors')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Nombre de Place</label>
                            <input value="{{ old('nbr_participant') }}" type="number" id="email" name="nbr_participant" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('nbr_participant')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>



{{-- ------------------------------------------------------------------------------------------------------------- --}}
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-2 sm:space-y-0 space-y-4 sm:px-0">
                        <div class="class="relative flex-grow w-full">
                            <h1 class="mt-2 text-black">Fixer une place et son prix</h1>
                            <div class="mt-6 bg-white lg:w-[25rem]">
                                <input type="text" id="place" placeholder="Nom de la place" class="w-full bg-gray-100 bg-opacity-50 rounded border mb-3 border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <input type="number" id="prix" placeholder="prix : " class="w-full bg-gray-100 bg-opacity-50 mb-3 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <button id="ajouterplace" class="flex m-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-red-700 hover:text-black">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="relative flex-grow w-full" id="ifnti">
                            <h1 class="text-center mt-2 text-black">Listes des places & prix associés</h1>
                            <ul id="terrainchamps" class="bg-white mt-2">

                            </ul>

                        </div>

                    </div>


{{-- -------------------------------------------------------------------------------------------------------------------------- --}}
                    <div class="flex lg:w-2/3  sm:flex-row flex-col mx-auto mt-8  lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-center">
                        <div class="relative flex-grow w-full">
                        <input value="{{ old('image_path') }}" class="w-52" type="file" name="image_path" onchange="afficheImage(event)"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" accept=".png, .jpg, .jpeg, .gif, .svg">
                        @error('image_path')
                            <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                        @enderror
                        </div>
                        <div class="ims">
                            <label for="">Image</label>
                            <img class="bg-transparent object-cover overflow-hidden h-40 w-40" src="" alt="" class="img-product" id="file-preview">
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Equipe1 :  </label>
                            <input value="{{ old('equipe1_name') }}" type="text" id="full-name" name="equipe1_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('equipe1_name')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Equipe2 : </label>
                            <input value="{{ old('equipe2_name') }}" type="text" id="email" name="equipe2_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('equipe2_name')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 mb-4">
                        <button class="text-white flex m-auto bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Valider</button>
                    </div>
                </div>
            </section>
        </form>
    </div>
<script>
        function afficheImage(event){
            let entrer = event.target;
            let reader = new FileReader();
            reader.onload = function(){
                let dataUrl = reader.result;
                let output = document.getElementById('file-preview');
                output.src = dataUrl;
            };
            reader.readAsDataURL(entrer.files[0]);
        }
//---------------------------------------------------------------------------------------------------------------------------
        document.addEventListener("DOMContentLoaded", () => {
            const placeInput = document.getElementById("place");
            const prixTerplace = document.getElementById("prix");
            const ajouterButton = document.getElementById("ajouterplace");
            const terrainchamps = document.getElementById("terrainchamps");

            ajouterButton.addEventListener('click',(e) =>{
                e.preventDefault();
                const placeText = placeInput.value.trim();
                const placeTes = parseInt(prixTerplace.value);


                if (placeText ==="" && placeTes ==="") {
                    console.log("Veillez remplire les champs");
                }else{
                    const listItem = document.createElement("li");
                    listItem.innerHTML = `
                        <span class="text-black font-bold ">${placeText} ⇾ ${placeTes}</span>
                        <button class="edit">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-800 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </button>

                        <button class="delete">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-800 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    `;


                    listItem.querySelector(".delete").addEventListener("click", () => {
                        listItem.remove();
                    });

                    listItem.querySelector(".edit").addEventListener("click", () => {
                        const newText = prompt("Modifier le texte :", placeText);
                        if (newText !== null) {
                            placeText = newText.trim();
                            listItem.querySelector("span").textContent = `${placeText} (Place: ${placeTes})`;
                        }
                    });

                    terrainchamps.appendChild(listItem);

                    // Efface les champs après l'ajout d'une place et de son prix
                    placeInput.value = "";
                    prixTerplace.value = "";
                }
            });
        });
    </script>
</x-app-layout>
