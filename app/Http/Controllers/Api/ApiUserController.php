<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $user = User::paginate(10);
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
    public function store(Request $request)
    {
        //
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
}
