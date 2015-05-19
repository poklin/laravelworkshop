<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
	public function about()
	{
		$people = [
			'Taylor Swift', 'Jackie Chan', 'Daniel Lim'
		];

		return view('Pages.about',compact('people'));
	}

}
