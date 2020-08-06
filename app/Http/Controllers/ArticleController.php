<?php

namespace App\Http\Controllers;
use GitDown;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderByDesc('updated_at')->where('online', true)->get();
        return view ('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=> 'required',
        ]);
        $article = new Article;
        $article->title = $request->title;
        $article->body_md = $request->body;
        $article->summary_md = $request->summary;
        $article->online = $request->online;
        //generate article slug for nice URLs
        $article->slug = str_slug($article->title, '-') . '-' . $article->id;

        //parse body and summary to HTML via GitHub API
        $article->body_html = GitDown::parseAndCache($request->body) ;
        $article->summary_html = GitDown::parseAndCache($request->summary); 

        //save article
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($param)
    {
        //
        $articleFound = Article::where('slug', $param)->first();
        if ($articleFound->online){
            return view ('articles.show', ['article' => $articleFound]);
        }
        return redirect()->route('articles.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
