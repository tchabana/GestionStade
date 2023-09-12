<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;

class ApiCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommentRequest $request)
    {
        try {
            $comment = Comment::Create([
                'user_id' => $request->user_id,
                'event_id' => $request->event_id,
                'message' => $request->message,
            ]);
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $comment
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
    public function allcommentforevent(string $event_id)
    {
        try {
            $comments = Comment::where('event_id', '=', $event_id )->get();
            return response()->json([
                'status' => 200,
                'status_massage' => "Ok",
                'data' => $comments
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }
}
