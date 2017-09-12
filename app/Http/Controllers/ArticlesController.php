<?php

namespace App\Http\Controllers;

use App\Article;
use Auth;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function create(){
    	return view('articles/create');
    }
    public function update_get($id){

    	$article = Article::find($id);
    	//dump($article);
    	return view('articles/update', ['article'=>$article]);
    }

    public function save(Request $query){

    	$user = Auth::user();
    	$article = new Article;
        $article->user_id = $user->id;
        $article->title = $query->title;
        $article->body = $query->body;
        $article->save();

    	return redirect()->route('home');
    }

    public function update_post(Request $query, $id){

    	$user = Auth::user();
    	$article = Article::find($id);
        $article->user_id = $user->id;
        $article->title = $query->title;
        $article->body = $query->body;
        $article->update();

    	return redirect()->route('home');
    }

    public function delate($id){

    	$article = Article::find($id);
        $article->delete();

    	return redirect()->route('home');
    }
}
