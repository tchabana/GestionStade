<x-app-layout>
<div class="creation">
    <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('actuality.index') }}">Listes des Actualites</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('actuality.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="groupe">
                <label for="">Title : </label>
                <input type="text" name="title" value="{{ $actuality->title }}">
                @error('title')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>
            {{-- @dd($actuality->message) --}}
            <div class="groupe">
                <label for="">Message : </label>
                <input type="text"  name="message" id="" cols="30" rows="10" value="{{ $actuality->message }}"></input>
                @error('message')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="" class="mb-4">Image</label>
                <div class="ims">
                    <img src="" alt="" class="img-product" id="file-preview">
                </div>
                <input type="file" name="image_path" accept="images/*" onchange="afficheImage(event)">
                @error('image_path')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div>
                <button type="submit" class="text-white flex m-auto mt-4 bg-green-500 border-0 py-2 px-8 focus:outline-none hover:bg-green-600 rounded text-lg font-bold">Valider</button>
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
</x-app-layout>
