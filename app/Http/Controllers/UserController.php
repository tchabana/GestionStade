<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $employesA = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at == null;
        });
       
        $employesD = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at !== null;
        });
        return view('model_views.user.index',compact('employesA','employesD'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('model_views.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role = 'gerant'; 
        $user->save();
        $user->assignRole('gerant');

        $employesA = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at == null;
        });
        $employesD = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at !== null;
        });
        return view('model_views.user.index',compact('employesA','employesD'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,User $employe)
    {
        return view('model_views.user.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $employe)
    {
        $role = $request->input('role');
        $employe->update($request->all());
        $employe->assignRole($role);

        $employesA = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at == null;
        });
        $employesD = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at !== null;
        });
        return view('model_views.user.index',compact('employesA','employesD','employe'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $employe)
    {
        $employe->forceDelete();
        $employesA = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at == null;
        });
        $employesD = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at !== null;
        });
        return view('model_views.user.index',compact('employesA','employesD','employe'));
    }

    public function desactiver(User $employe)
    {
        $employe->delete();
        $employesA = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at == null;
        });
        $employesD = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at !== null;
        });
        
        return view('model_views.user.index',compact('employesA','employesD','employe'));
    }

    public function restore(User $employe)
    {
        $employe->restore();
        $employesA = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at == null;
        });
        $employesD = User::all()->filter(function ($employe) {
            return in_array($employe->role, ['gerant', 'admin']) && $employe->deleted_at !== null;
        });
        return view('model_views.user.index',compact('employesA','employesD','employe'));
    }
}
