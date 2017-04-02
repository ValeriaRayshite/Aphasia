<?php

namespace Aphasia\Models;

use Illuminate\Database\Eloquent\Model;
use DB;


class Page extends Model
{
	

    public function menu($lang, $unit) {
    	if ($lang == 'en') {
    	$items = DB::table('articles')->where('category', '=', $unit)->get();
    	} else {
    	$items = DB::table('articles')->where('category', '=', $unit)->get();
    	}

		
		return $items;

    	
    }
}
