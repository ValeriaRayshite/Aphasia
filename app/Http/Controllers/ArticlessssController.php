<?php

namespace Aphasia\Http\Controllers;

use DB;
use Aphasia\Http\Controllers\Controller;
use Aphasia\Models\Article;

class ArticlesController extends Controller
{
	



	public function showAll(Article $articleModel)
	{
		$articles = $articleModel->showAll();
		return view('dashboard.dashboard', ['articles' => $articles]);
	}

	public function create() 
	{
		return view('dashboard.add');
	}

	public function showPublished(Article $articleModel)
	{
		$articles = $articleModel->showPublished();

		return view('dashboard.dashboard', ['articles' => $articles]);
	}

	public function showUnpublished(Article $articleModel)
	{
		$articles = $articleModel->showUnpublished();

		return view('dashboard.dashboard', ['articles' => $articles]);
	}

	public function store(Article $articleModel, Request $request)
	{
		dd($request->all());
		$articleModel->add($request->all());
		return redirect()->route('all');
	}
	
}




