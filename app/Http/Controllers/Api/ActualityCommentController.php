<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActualityCommentRequest;
use App\Http\Requests\UpdateActualityCommentRequest;
use App\Models\ActualityComment;

class ActualityCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $actu_comments = ActualityComment::paginate(10);
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des poste effectuer ",
                'data' => $actu_comments
            ]);
        } catch (\Exception $e) {
            return response()->json($e);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActualityCommentRequest $request)
    {
        try {
            $new_actu_comment = new ActualityComment();
            $new_actu_comment->message = $request->message;
            $new_actu_comment->actu_id = $request->actu_id;
            $new_actu_comment->user_id = $request->user_id;
            $new_actu_comment->save();
            return response()->json([
                'status' => 200,
                'status_massage' => "Recuperation des poste effectuer ",
                'data' => $new_actu_comment
            ]);
        } catch (\Exception $e) {
            return response()->json($e);

        }
    }
    /**
     * Display the specified resource.
     */
    public function show(ActualityComment $actualityComment)
    {
        return view('model_views.actuality.comment.show', ['actu_comment' => $actualityComment]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActualityCommentRequest $request, ActualityComment $actualityComment)
    {
        try {
            $actualityComment->message = $request->message;
            $actualityComment->actu_id = $request->actu_id;
            $actualityComment->user_id = $request->user_id;
            $actualityComment->save();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('model_views.actuality.comment.show', ['actu_comment' => $actualityComment]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActualityComment $actualityComment)
    {
        $actualityComment->delete();
    }
}
