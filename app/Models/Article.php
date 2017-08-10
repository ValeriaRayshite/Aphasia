<?php

namespace Aphasia\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{

protected $table="articles";
protected $fillable=['slug', 'section', 'en', 'ru', 'title_en', 'title_ru', 'content_en', 'content_ru', 'published',];

    public function showAll()
	{
		$articles = DB::table('articles')->latest('id')->get();
		return $articles;
	}

	public function showPublished()
	{
		$articles = $this->published()->get();
		
		return $articles;
	}

	public function showUnpublished()
	{
		$articles = DB::table('articles')->latest('id')
										 ->where('published', '=', '0')
										 ->get();
		return $articles;
	}

	public function scopePublished($query)
	{
		$query->latest('id')
			  ->where('published', '=', true);
	}
	
	
  
    public function add() 
	{
		return view('dashboard.add');
	}
}
