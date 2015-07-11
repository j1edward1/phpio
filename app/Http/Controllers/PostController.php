<?php

namespace App\Http\Controllers;

use Log;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        return response()->json(Post::orderBy('postDate', 'desc')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function store(Request $request)
    {

        $content = $request->input('content');

        Log::debug($content);


        $post = new Post;
        $post->postType = 'TXT';
        $post->postDate = date("Y-m-d H:i:s");
        $post->content = $content;
        $post->user_id = 1;
        $post->save();



        return response()->json(array('success' => true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */

    public function destroy($id)
    {
        //
        Post::destroy($id);
        return response()->json(array('success' => true));

    }
}
