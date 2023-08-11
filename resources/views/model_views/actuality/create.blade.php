<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="#">Listes des utilisateurs</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="" method="" enctype="multipart/form-data">
            <div class="groupe">
                <label for="">Title : </label>
                <input type="text" name="">
            </div>

            <div class="groupe">
                <label for="">Message : </label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="groupe">
                <label for="" class="mb-4">Image</label>
                <div class="ims">
                    <img src="" alt="" class="img-product" id="file-preview">
                </div>
                <input type="file" name="image" accept="image/*" onchange="afficheImage(event)">
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
</x-app-layout>
