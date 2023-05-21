<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PolicyController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        if (Gate::allows('view', $post)) {
            // The user is authorized to view the post
            // Return the response
        } else {
            // The user is not authorized to view the post
            // Return an error response or redirect
        }
    }
}
