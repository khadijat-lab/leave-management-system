<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
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
    public function store(Request $request)
    {
        $new_comment = new Comment();
        $new_comment->start_date = $request->start_date;
        $new_comment->end_date = $request->end_date;
        $new_comment->message = $request->message;
        $new_comment->leave_id = $request->leave_id;
        $new_comment->save();

        // Retrieve the associated leave and update its status
        $leave = Leave::find($request->leave_id);
        $leave->status = 'Approved';
        $leave->save();
        
        return redirect(route('home'));
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
    public function update(Request $request, Comment $comment)
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
}
