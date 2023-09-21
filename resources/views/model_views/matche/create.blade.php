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

                    <div class="accord mt-8">
                        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                            <div class="relative flex w-full">
                                <div class="flex">
                                    <input type="text" id="place"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Type de place">
                                    <input type="number" id="prix"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Prix associé">
                                </div>
                                <button id="valider" class="w-10 h-10 bg-red-900 rounded-full text-white text-5xl px-1 cursor-pointer">+</button>
                            </div>
                            <div class="relative flex-grow w-full">
                                <div id="allterrains">

                                </div>
                            </div>

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
                            <img class="border-4 bg-black h-full w-full" src="" alt="" class="img-product" id="file-preview">
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
        const terrains = [{id: 1, place: 'Vip',  prix: 500 }];
        const valideButton = document.getElementById('valider');


        valideButton.addEventListener('click', ajoutePlacePrix);

        afficheTout();
        updateDonneAfficher();


        function updateDonneAfficher() {
            const deleteButtons = document.querySelectorAll(".Supprimer");
            const editButtons = document.querySelectorAll(".Mofifier");

            deleteButtons.forEach((button) =>
                button.addEventListener('click',() => deleteTerrain(button.id))
            );
            editButtons.forEach((button) =>
                button.addEventListener('click',() => modifiers(button.id))
            );
        }


        function ajoutePlacePrix(e) {
            e.preventDefault();

            const entreDonnee = {
                id: terrains.length !== 0 ? terrains[terrains.length-1].id + 1 : 1,
                place : document.getElementById('place').value,
                prix: document.getElementById('prix').value,
            };
            if (entreDonnee.place !== "" && entreDonnee.prix !== "") {
                terrains.push(entreDonnee);
                afficheTout();
            }

        }

        function afficheTout() {
            document.getElementById('allterrains').innerHTML = "";
            terrains.forEach((dim) =>{
                const newInput = {
                    Place : document.createElement('input'),
                    Prix : document.createElement('input'),
                };

                const newDiv = document.createElement('div');
                const newButtons = {
                    Supprimer: document.createElement('input'),
                    Modifier : document.createElement('input'),
                };

                for(const [key, value] of Object.entries(newInput)){
                    value.setAttribute("type", "text");
                    value.setAttribute("id", `${key}OfTerrain${dim.id}`);

                    key === "Place" && value.setAttribute("value", dim.place);
                    key === "Prix" && value.setAttribute("value", dim.prix);

                    newDiv.appendChild(value);
                    document.getElementById('allterrains').appendChild(newDiv);
                };

                for(const [key, value] of Object.entries(newButtons)){
                    value.setAttribute('type', 'button');
                    value.setAttribute('class', key);
                    value.setAttribute('id', dim.id);
                    value.setAttribute('value', key);

                    newDiv.appendChild(value);

                }
            });

            updateDonneAfficher();
        }


        function deleteTerrain(id) {
            terrains.forEach((dim) => {
                const userPositionInArray = terrains.indexOf(dim);
                dim.id === parseInt(id) && terrains.splice(userPositionInArray, 1);
            });

            afficheTout();
        }

        function modifiers(id) {
            const newInput = {
                place : document.getElementById(`PlaceOfTerrain${id}`).value,
                prix : document.getElementById(`PrixOfTerrain${id}`).value,
            };

            terrains.forEach((dim) => {
                if (dim.id === parseInt(id)) {
                    dim.place = newInput.place;
                    dim.prix = newInput.prix;
                }
            });
        }
    </script>
</x-app-layout>
