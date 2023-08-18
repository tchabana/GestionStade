<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $user = User::all();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $user
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $user
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        try {
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $user
            ]);
        } catch (\Exception $ex) {
            return response()->json($ex);
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $user
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
    public function login(LoginUserRequest $request)
    {
        if (auth()->attempt($request->only(['email', 'password']))) {
            $user = auth()->user();
            $token = $user->createToken("MA_CLE")->plainTextToken;
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $user,
                'token' => $token
            ]);
        }else{
            return response()->json(['error' => 'Unauthorized','status' => 401]);
        }

        // return $this->respondWithToken($token);
    }

   
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
