<x-app-layouts>

    <!-- ===================================bar de navigator vertical=============================== -->
    <div class="w-screen h-screen flex">
        <div class="hidden h-full bg-gray-200 text-white w-[350px] lg:block xl:block md:block">
            <div class="h-[50px] bg-gray-900 flex justify-start items-center">
                <div class="font-bold text-xl px-4">GESTION STADE</div>
            </div>
<!-- --------------------------------restes des menu du nav vertical qui evoluera---------------------------------- -->
            <div class="h-[calc(100vh-50px)] bg-gray-800 py-[20px]">
                <div class="px-[20px] flex flex-1 space-y-[10px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
            </div>
        </div>

<!-- =================================bar de navigation horizontal================================ -->
        <div class="w-full h-full bg-gray-400">
            <div class="h-[50px] bg-gray-100 flex items-center shadow-sm px-[30px] w-full justify-between py-[10px] z-10 border-b">
                <!-- menu dim -->
                <div class="cursor-pointer w-[30px] md:hidden" id="cacher">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 border-2 p-1 bg-slate-800 text-white rounded-lg ">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>

                <div class="profile">
                    <div class="teams">
                        <h1>Equipe</h1>
                    </div>
                    <div class="photo">
                        <h1>photo</h1>
                    </div>
                </div>

            </div>
<!-- =====================================contenu principal================================ -->
            <div class="h-[calc(100vh-50px)] bg-white p-2 overflow-y-scroll">
                <div class="bg-gray-100 w-full p-4 rounded-lg hover:bg-gray-400 ">
<!-- ------------------------------------tous les enfant create index etc ----------------------------------------- -->
                    <!-- <h1>Create</h1> -->

                    <div class="creation">
                        <!-- --------------------bouton listes des utilisateur -------------------------------- -->
                        <div class="listes">
                            <a href="#">Listes des utilisateurs</a>
                        </div>

                        <hr class="bars">
                        <!-- -------------------------formulaires ---------------------------------------------- -->
                        <form action="">
                            <div class="groupe">
                                <label for="">Nom : </label>
                                <input type="text" name="">
                            </div>

                            <div class="groupe">
                                <label for="">Email : </label>
                                <input type="email" name="">
                            </div>

                            <div class="groupe">
                                <label for="">Phone_number : </label>
                                <input type="text" name="">
                            </div>

                            <div class="groupe">
                                <label for="">Password : </label>
                                <input type="password" name="">
                            </div>

                            <div class="groupe">
                                <label for="">COnfirm_password : </label>
                                <input type="password" name="">
                            </div>

                            <div class="groupe">
                                <label for="">Role : </label>
                                <select name="" id="">
                                    <option value="">administrateur</option>
                                </select>
                            </div>
                            <div class="groupe">
                                <button type="submit">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layouts>
