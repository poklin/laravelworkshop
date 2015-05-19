<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

	//
	public function index()
	{
		/*$data = array(
		    'title'  => 'Poklin Title',
		    'body' => 'Descption Body',
		);*/
		//$name = 'Poklin';
		//$age = '20';
	    $articles =  Article::all();
		$articles = $articles->toArray();
		$data = array(
			'name' => 'Rakesh',
			'email' => 'sharmarakesh395@gmail.com'
		);
		print_r($articles);
		// $articles = "Poklin";
		return view('articles.index')->with('articles',$articles);
		// return view('articles.index',compact($articles));
		// return view('articles.index');
	}
}
