<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ArticlesController extends Controller {

	//
	public function index()
	{
	    $articles =  Article::latest('published_at')->published()->get();
		// $articles = $articles->toArray();
		
		// print_r($articles);
		// $articles = "Poklin";
		return view('articles.index',compact('articles'));
		// return view('articles.index',compact($articles));
		// return view('articles.index');
	}

	public function show($id)
	{
		// Will return a ModelNotFoundException if no user with that id
		
		// $article = Article::findOrFail($id);

		    /*if(is_null($article))
		    {
		    	abort(404);
		    }*/
		// return view('articles.show', compact('$article'));
		
		$article = Article::findOrFail($id);
		// dd($article->published_at->diffForHumans());
		// print_r($articles);
		// $articles = "Poklin";
		return view('articles.show')->with('article',$article);
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(ArticleRequest $request)
	{
		Article::create($request->all());

		return redirect('article');
	}

	public function edit($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.edit')->with('article',$article);
	}

	public function update(ArticleRequest $request, $id)
	{
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('article');
	}

}
