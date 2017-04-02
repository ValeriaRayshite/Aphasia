<?php

namespace Aphasia\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Article extends Model
{

protected $table="articles";
protected $fillable=['slug', 'section', 'title', 'title_ru', 'content', 'content_ru', 'content2', 'content2_ru', 'content3', 'content3_ru', 'content4', 'content4_ru', 'content5', 'content5_ru', 'content6', 'content6_ru', 'content7', 'content7_ru', 'content8', 'content8_ru', 'content9', 'content9_ru', 'content10', 'content10_ru', 'content11', 'content11_ru', 'content12', 'content12_ru', 'content13', 'content13_ru', 'content14', 'content14_ru', 'content15', 'content15_ru', 'published',];

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
			  ->where('published', '=', '1');
	}
	
	
  
    public function add() 
	{
		return view('dashboard.add');
	}
}
