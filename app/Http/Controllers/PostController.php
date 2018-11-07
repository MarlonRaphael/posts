<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();

        $path               = $request->file('arquivo')->store('images', 'public');

        $post->nome         = $request->input('nome');
        $post->email        = $request->input('email');
        $post->titulo       = $request->input('titulo');
        $post->subtitulo    = $request->input('subtitulo');
        $post->mensagem     = $request->input('mensagem');
        $post->arquivo      = $path;
        $post->likes        = 0;

        $post->save();

        dd($post);

        return response($post, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (isset($post))
        {
            Storage::disk('public')->delete($post->arquivo);
            $post->delete();
            return response('Post removido', 204);
        }
        return response('Post não encontrado', 404);
    }

    /**
     * Adicionar likes ao post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function like($id)
    {
        $post = Post::find($id);

        if (isset($post))
        {
            $post->likes++;
            $post->save();
            return $post;
        }
        return response('Post não encontrado', 404);
    }
}
