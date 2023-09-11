{{-- <x-app-layout>
    <div class="creation">
        <div class="listes">
            <a href="{{ route('event.index') }}">Listes des evenements</a>
        </div>

        <hr class="bars">
        <form action="{{ route('matche.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="groupe">
                <label for="">Title : </label>
                <input type="text" name="title">
            </div>

            <div class="groupe">
                <label for="">Description : </label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="groupe">
                <label for="">Date_start : </label>
                <input type="date" name="date_start" id="">
            </div>

            <div class="groupe">
                <label for="">Date_end : </label>
                <input type="date" name="date_end" id="">
            </div>

            <div class="groupe">
                <label for="">Start_at : </label>
                <input type="time" name="start_at" id="">
            </div>

            <div class="groupe">
                <label for="">End_at : </label>
                <input type="time" name="end_at" id="">
            </div>

            <div class="groupe">
                <label for="">Authors : </label>
                <input type="text" name="authors">
            </div>

            <div class="groupe">
                <label for="">Participant_count : </label>
                <input type="number" name="nbr_participant">
            </div>

            <div class="groupe">
                <label for="" class="mb-4">Image</label>
                <div class="ims">
                    <img src="" alt="" class="img-product" id="file-preview">
                </div>
                <input type="file" name="image_path" onchange="afficheImage(event)">
            </div>

            <div class="equipe">
                <div class="groupe">
                    <label for="">equipe_1 : </label>
                    <input type="text" name="equipe1_name">
                </div>

                <div class="groupe">
                    <label for="">equipe_2 : </label>
                    <input type="text" name="equipe2_name">
                </div>
            </div>

            <div class="groupe">
                <button type="submit">Valider</button>
            </div>
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
    </script>
</x-app-layout> --}}


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
                        <input type="text" id="full-name" name="title" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                        <label for="email" class="leading-7 text-sm text-gray-600">Description</label>
                        <input type="text" id="email" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                        <label for="full-name" class="leading-7 text-sm text-gray-600">Date debut</label>
                        <input type="date" id="full-name" name="date_start" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                        <label for="email" class="leading-7 text-sm text-gray-600">Date fin</label>
                        <input type="date" id="email" name="date_end" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                        <label for="full-name" class="leading-7 text-sm text-gray-600">Heure Debut</label>
                        <input type="time" id="full-name" name="start_at" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                        <label for="email" class="leading-7 text-sm text-gray-600">Heure Fin</label>
                        <input type="time" id="email" name="end_at" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>


                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto    lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                        <label for="full-name" class="leading-7 text-sm text-gray-600">Nom responsable</label>
                        <input type="text" id="full-name" name="authors" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                        <label for="email" class="leading-7 text-sm text-gray-600">Nombre de Place</label>
                        <input type="number" id="email" name="nbr_participant" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>

                    <div class="flex lg:w-2/3  sm:flex-row flex-col mx-auto mt-8  lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-center">
                        <div class="relative flex-grow w-full">
                        <input class="w-52" type="file" name="image_path" onchange="afficheImage(event)"  class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" accept=".png, .jpg, .jpeg, .gif, .svg">
                        </div>
                        <div class="ims">
                            <label for="">Image</label>
                            <img class="border-4 bg-black h-full w-full" src="" alt="" class="img-product" id="file-preview">
                        </div>
                    </div>

                    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto   lg:px-8 sm:space-x-20 sm:space-y-0 space-y-4 sm:px-0 items-end">
                        <div class="relative flex-grow w-full">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Equipe1 :  </label>
                        <input type="text" id="full-name" name="equipe1_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Equipe2 : </label>
                            <input type="text" id="email" name="equipe2_name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-transparent focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
    </script>
</x-app-layout>
