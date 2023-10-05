<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('matche.index') }}">Listes des Maches</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('matche.update',$event) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <section class="text-gray-600 body-font">
                <div class="container px-1 sm:py-8 md:py-4 lg:py-24 mx-auto">
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8   sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Titre</label>
                            <input type="text" id="full-name" value="{{ $event->event->title }}"  name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('title')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Description</label>
                            <input type="text" id="email" value="{{ $event->event->description }}" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('description')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Date debut</label>
                            <input type="date" id="full-name" name="date_start" value="{{ $event->event->date_start }}"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('date_start')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Date fin</label>
                            <input type="date" id="email"  name="date_end" value="{{ $event->event->date_end }}"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('date_end')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Heure Debut</label>
                            <input type="time" id="full-name" value="{{ $event->event->start_at }}" name="start_at" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('start_at')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Heure Fin</label>
                            <input type="time" id="email" value="{{ $event->event->end_at }}" name="end_at" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('end_at')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>


                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Nom responsable</label>
                            <input type="text" id="full-name" value="{{ $event->event->authors }}" name="authors" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('authors')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Nombre de Place</label>
                            <input type="number" id="email" value="{{ $event->event->nbr_participant }}"  name="nbr_participant" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('nbr_participant')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>
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
                                @forelse ($prix as $p )
                                    <li>
                                        <input class="text-black font-bold " value="{{$p}}" type="text" id="email" name="${niem_ipute}">
                                        <button class="delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-800 cursor-pointer">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </li>
                                @empty
                                    
                                @endforelse
                            </ul>

                        </div>

                    </div>
                    <div class="flex lg:w-2/3  sm:flex-row flex-col mx-auto mt-8  lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-center">
                        <div class="relative flex-grow w-full">
                            <input class="w-52" accept=".jpg, .jpeg, .png" type="file" value="{{ $event->event->image_path }}" name="image_path" onchange="afficheImage(event)"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('image_path')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="ims">
                            <label for="">Image</label>
                            <img class="border-4 bg-black h-full w-full" src="{{asset("storage/".$event->event->image_path)}}" alt="" class="img-product" id="file-preview">
                        </div>
                    </div>
                    {{-- @dd("storage".$event->event->image_path) --}}
                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Equipe1 :  </label>
                            <input value="{{$event->equipe1_name}}" type="text" id="full-name"   name="equipe1_name"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('equipe1_name')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Equipe2 : </label>
                            <input value="{{$event->equipe2_name}}" type="text" id="email" name="equipe2_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('equipe2_name')
                                <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-4 mb-4">
                        <button class="text-white flex m-auto bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg">Button</button>
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
            let niem_ipute = 0;
            const placeInput = document.getElementById("place");
            const prixTerplace = document.getElementById("prix");
            const ajouterButton = document.getElementById("ajouterplace");
            const terrainchamps = document.getElementById("terrainchamps");

            const chaineCaractere = /^[A-Za-z\s]+$/

            ajouterButton.addEventListener('click',(e) =>{
                e.preventDefault();
                const placeText = placeInput.value.trim();
                const placeTes = parseInt(prixTerplace.value);

                if (placeText.match(chaineCaractere) && placeTes != "" && placeTes > 0) {
                    niem_ipute++;
                    const listItem = document.createElement("li");
                    listItem.innerHTML = `
                        <input class="text-black font-bold " value="${placeText} ⇾ ${placeTes}" type="text" id="email" name="${niem_ipute}">

                        <button class="delete">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-800 cursor-pointer">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                        </button>
                    `;


                    listItem.querySelector(".delete").addEventListener("click", () => {
                        listItem.remove();
                    });

                    // listItem.querySelector(".edit").addEventListener("click", () => {
                    //     const newText = prompt("Modifier le texte :", placeText);
                    //     if (newText !== null) {
                    //         placeText = newText.trim();
                    //         listItem.querySelector("span").textContent = `${placeText} (Place: ${placeTes})`;
                    //     }
                    // });

                    terrainchamps.appendChild(listItem);

                    // Efface les champs après l'ajout d'une place et de son prix
                    placeInput.value = "";
                    prixTerplace.value = "";
                }else{
                    alert("Veuillez saisir un texte valide");
                }
            });
        });
    </script>
</x-app-layout>
