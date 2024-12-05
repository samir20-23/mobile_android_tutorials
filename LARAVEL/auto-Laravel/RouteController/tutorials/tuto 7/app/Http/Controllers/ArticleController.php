<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article ;

class ArticleController extends Controller
{
    
    public function index()
    {
        //afficher la liste des articles 
        $articles = Article::all();
        return view('articles.index' , compact('articles'));
    }

    
    public function create()
    {
        // affiche la formulaire de création
        return view('articles.create' );
    }

    
    public function store(Request $request)
    {
        // Enregistrer un nouvelle article

        $validated = $request->validate(
            ['title'=> 'required|max:255' ,
             'content' => 'required']
        );
        Article::create($validated);
        return redirect()->route('articles.index')->with('success', 'Article créé avec succé .');
    }

  
    public function show(Article $article)
    {
        // Afficher un article
        return view('articles.show' , compact('article') );

    }

    
    public function edit(Article $article)
    {
        // Afficher le formulaire de modification
        return view('articles.edit' , compact('article')) ;
    }

   
    public function update(Request $request, Article $article)
    {
        //Enregistrer les modifications
        $validated = $request->validate(
            [
                'title' => 'required|max:255',
                'content' => 'required'
            ]
            );
        $article->update($validated);
        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succés' );

    }

 
    public function destroy(Article $article)
    {
        // Suprimer un article
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès.');
    
    }
}

/*
<?php
tuto 1
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index() {
        // Simuler une liste d'articles
        $articles = [
            ['id' => 1, 'title' => 'Introduction à Laravel', 'content' => 'Lorem ipsum...'],
            ['id' => 2, 'title' => 'Pourquoi choisir Laravel ?', 'content' => 'Lorem ipsum...']
        ];
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        // Simuler un article unique
        $article = [
            'id' => $id,
            'title' => "Article $id",
            'content' => 'Contenu de l’article...'
        ];
        return view('articles.show', compact('article'));
    }
}
*/