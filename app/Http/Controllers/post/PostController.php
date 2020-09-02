<?php

namespace LaraDev\Http\Controllers\post;

use Illuminate\Http\Request;
use LaraDev\Http\Controllers\Controller;
use LaraDev\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        echo "<h1><b>Artigo</b></h1>";
        echo "Titulo: {$post->title}<br>";
        echo "SubTitulo: {$post->subtitle}<br>";
        echo "Descrição: {$post->description}<br>";

        $autor = $post->author()->get()->first();

        if ($autor) {
            echo "<h1><b>Dados do Autor</b></h1>";
            echo "Nome: {$autor->name}<br>";
            echo "Email: {$autor->email}";
        }

//        $post->categories()->attach([1,4]);//adiciona as categorias na tabela intermediaria
//        $post->categories()->detach([1,4]);//remove as categorias na tabela intermediaria
//        $post->categories()->sync([7,4]);//sincroniza  as categorias na tabela intermediaria
//        $post->categories()->syncWithoutDetaching([1,4]);//sincroniza e permanece as anteriores  as categorias na tabela intermediaria

        $postCategories = $post->categories()->get();

        if ($postCategories) {

            echo "<h1><b>Categorias</b></h1>";
            foreach ($postCategories as $category) {
                echo "Titulo: #{$category->id} - {$category->name}<br>";
            }
        }

//        $post->comments()->create([
//            'content' => 'Hakuna Matata',
//        ]);

        $postComments = $post->comments()->get();

        if($postComments){
            echo "<h1><b>Comentários deste Artigo</b></h1>";
            foreach ($postComments as $commenst) {
                echo "Comentário: #{$commenst->id} - {$commenst->content}<br>";
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
