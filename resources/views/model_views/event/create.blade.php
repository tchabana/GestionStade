<x-app-layout>
    <div class="creation">
        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="#">Listes des utilisateurs</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="">
            <div class="groupe">
                <label for="">Title : </label>
                <input type="text" name="">
            </div>

            <div class="groupe">
                <label for="">Email : </label>
                <input type="email" name="">
            </div>

            <div class="groupe">
                <label for="">Description : </label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="groupe">
                <label for="">Date_on : </label>
                <input type="date" name="" id="">
            </div>

            <div class="groupe">
                <label for="">Start_at : </label>
                <input type="time" name="" id="">
            </div>

            <div class="groupe">
                <label for="">End_at : </label>
                <input type="time" name="" id="">
            </div>

            {{-- <div class="groupe">
                <label for="">Role : </label>
                <select name="" id="">
                    <option value="">administrateur</option>
                </select>
            </div> --}}
            <div class="groupe">
                <label for="">Authors : </label>
                <input type="text" name="">
            </div>

            <div class="groupe">
                <label for="">Participant_count : </label>
                <input type="number" name="">
            </div>


            <div class="groupe">
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</x-app-layout>

