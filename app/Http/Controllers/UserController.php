<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth','role:admin']);
    }
    public function index()
    {

        $employesD = User::onlyTrashed()->get();
        $employesA = User::whereNull('deleted_at')->get();
        // $admin_connecter = Auth()->user();
        // $employesA = $employesA->filter(function ($item) {
        //     //return $item->id !== $admin_connecter->id;
        //     dd($item);
        // });
        // dd($admin_connecter);
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
    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make($request->password);
        $user->role = 'gerant';
        $user->save();
        $user->assignRole('gerant');

        return redirect()->route('user.index');
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
        //dd($employe);
        $role = $employe->getRoleNames()->first();
        //dd($role);
        return view('model_views.user.edite',compact('employe','role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $employe)
    {
        $newRole = $request->input('role');
        $employe->syncRoles([]);
        $employe->role = $newRole;
        $employe->name =  $request->name;
        $employe->email = $request->email;
        $employe->phone_number = $request->phone_number;
        $employe->save();
        $employe->assignRole($newRole);

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employe = User::onlyTrashed()->find($id);
        $employe->forceDelete();
        return redirect()->route('user.index');
    }

    public function desactiver(User $employe)
    {
        $employe->delete();
        return redirect()->route('user.index');
    }

    public function restore(string $id)
    {
        $employe = User::onlyTrashed()->find($id);
        $employe->restore();
        return redirect()->route('user.index');
    }
}
