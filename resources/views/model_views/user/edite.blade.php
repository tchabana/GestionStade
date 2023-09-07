<x-app-layout>
<div class="creation">
    <!-- --------------------bouton listes des utilisateur -------------------------------- -->
        <div class="listes">
            <a href="{{ route('user.index') }}">Listes des employes</a>
        </div>

        <hr class="bars">
        <!-- -------------------------formulaires ---------------------------------------------- -->
        <form action="{{ route('user.update',$employe) }}" method="post">
            @csrf 
            @method('put')
            <div class="groupe">
                <label for="">Name: </label>
                <input type="text" name="name" value="{{$employe->name}}">
            </div>

            <div class="groupe">
                <label for="">Email: </label>
                <input type="email" name="email" value="{{$employe->email}}">
            </div>
            <div class="groupe">
                <label for="">Contact: </label>
                <input type="text" name="phone_number"  value="{{$employe->phone_number}}">
            </div>

            <div class="groupe">
                <label for="">Role: </label>
               <select name="role" id="">
                <option value="{{$role}}" default>{{$role}}</option>
                @if($role == 'gerant')
                <option value="admin">admin</option>
               @else 
               <option value="gerant">gerant</option>
               @endif
               </select>
            </div>

            <div class="groupe">
                <button type="submit">Editer</button>
            </div>
        </form>
    </div>

    
</x-app-layout>
