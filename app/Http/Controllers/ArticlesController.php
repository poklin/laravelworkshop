<?php namespace App\Http\Controllers;

use App\Article;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ArticlesController extends Controller {


    /**
     * Create a new articles controller instance
     */
	public function __construct()
	{
		$this->middleware('auth',['except' => 'index','show']);
	}

	/**
	 * [index Article]
	 * @return view
	 */
	public function index()
	{
	    $articles =  Article::latest('published_at')->published()->get();
        $latest = Article::latest()->first();
		// $articles = $articles->toArray();
		
		// print_r($articles);
		// $articles = "Poklin";
		return view('articles.index',compact('articles','latest'));
		// return view('articles.index',compact($articles));
		// return view('articles.index');
	}

	/**
	 * [show article]
	 * @param  Article $article
	 * @return view
	 */
	public function show(Article $article)
	{
		return view('articles.show')->with('article',$article);
	}

	/**
	 * [create article]
	 * @return view
	 */
	public function create()
	{
        $tags = Tag::lists('name','id');
		return view('articles.create',compact('tags'));
	}

	/**
	 * [store article]
	 * @param  ArticleRequest $request
	 * @return view
	 */
	public function store(ArticleRequest $request)
	{
//        dd($request->input('tag_list'));
//        session()->flash('flash_message','Your article has been created');
//        session()->flash('flash_message_important',true);
        $this->createArticle($request);

        flash('Your Article Has Been Created')->important();
        flash()->overlay('Your Article Has Been Created!','Good Job!');

		return redirect('article')->with('flash_message');
	}

	/**
	 * [edit Article]
	 * @param  Article $article
	 * @return view
	 */
	public function edit(Article $article)
	{
        $tags = Tag::lists('name','id');

		return view('articles.edit',compact('article','tags'));
	}

	/**
	 * Description
	 * @param ArticleRequest $request
	 * @param Article $article
	 * @return view
	 */
	public function update(ArticleRequest $request, Article $article)
	{
//        dd($request->input('tag_list'));
		$article->update($request->all());

        $this->syncTags($article,$request->input('tag_list'));

		return redirect('article');
	}

    /**
     * Sync up the list of tags in the database
     *
     * @param Article $article
     * @param Array $tags
     */
    private function syncTags(Article $article,array $tags)
    {
        $article->tags()->sync($tags); //sync / detach / attach
    }

    /**
     * Save a new article
     *
     * @param ArticleRequest $request
     * @return Article
     */
    private function createArticle(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());

        $this->syncTags($article, $request->input('tag_list'));

        return $article;
    }
}
