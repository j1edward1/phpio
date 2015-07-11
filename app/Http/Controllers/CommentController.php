<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentController extends Controller
{

    public function store()
    {
        //
        Comment::create(array('commentDate' => date(),
                            'content' => Input::get('content'),
                            'user_id' => 1,
                            'post_id' => Input::get('post_id')));

        return response()->json(array('success' => true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        
        return response()->json(Comment::wherePostId($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
   
    public function destroy($id)
    {
        //
        Comment::destroy($id);
    }
}
