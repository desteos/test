<?php
namespace App\Controllers;

use App\Models\Article;
use System\Response;

class ArticleController
{
    public function index()
    {
        $result = Article::all();

        echo Response::json($result);
    }

    public function show($id)
    {
        $result = Article::find($id);

        echo Response::json($result);
    }

    public function store()
    {
        echo 'store';
    }

    public function update($id)
    {
        echo 'update '.$id;
    }

    public function destroy($id)
    {
        echo 'destroy '.$id;
    }

    public function destroyAll()
    {
        echo 'destroy all';
    }
}