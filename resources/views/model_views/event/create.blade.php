<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('event.index') }}">Listes des evenements</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('other.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="groupe">
                <label for="">Title : </label>
                <input type="text" name="title">
                @error('title')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror

            </div>

            <div class="groupe">
                <label for="">Description : </label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
                @error('description')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">Date_start : </label>
                <input type="date" name="date_start" id="">
                @error('date_start')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">Date_end : </label>
                <input type="date" name="date_end" id="">
                @error('date_end')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">Start_at : </label>
                <input type="time" name="start_at" id="">
                @error('start_at')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">End_at : </label>
                <input type="time" name="end_at" id="">
                @error('end_at')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">Authors : </label>
                <input type="text" name="authors">
                @error('authors')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="">Participant_count : </label>
                <input type="number" name="nbr_participant">
                @error('nbr_participant')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            <div class="groupe">
                <label for="" class="mb-4">Image</label>
                <div class="ims">
                    <img src="" alt="" class="img-product" id="file-preview" accept=".png, .jpg, .jpeg, .gif, .svg">
                </div>
                <input type="file" name="image_path" accept="images/*" onchange="afficheImage(event)">
                @error('image_path')
                    <small class="text-red-800 animate-pulse"> {{ $message }} </small>
                @enderror
            </div>

            {{-- <div class="groupe">
                <label for="">Info supplementaire : </label>
                <textarea name="info_suplementaire" id="" cols="30" rows="10"></textarea>
            </div> --}}
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
</x-app-layout>
