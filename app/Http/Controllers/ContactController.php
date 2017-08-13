<?php

namespace Aphasia\Http\Controllers;


use Illuminate\Support\Facades\Request;
use Aphasia\Models\Page;
use Aphasia\Models\Article;
use DB;

class ContactController extends Controller
{
    public function root($lang, $unit) {
  
   	if ($unit == 'For-patients-and-their-families') {
   	     $items_ru = Article::published()
        	        ->where('section', '=', 'For-patients-and-their-families')
                	->where('ru', '=', true)->get();

             $items_en = Article::published()
                ->where('section', '=', 'For-patients-and-their-families')
                ->where('en', '=', true)->get();

      $rootOfSections = DB::table('sections')->where('section', '=', 'For-patients-and-their-families')->get();

    }else if ($unit == 'About-the-problem-of-aphasia') {
			$items_en = null;
                        $items_ru = null;
   			$rootOfSections = DB::table('sections')->where('section', '=', 'About-the-problem-of-aphasia')->get();
   	} else if ($unit == 'For-professionals-and-students') {
   		 $items_ru = Article::published()
                ->where('section', '=', 'For-professionals-and-students')
                ->where('ru', '=', true)->get();

            $items_en = Article::published()
                ->where('section', '=', 'For-professionals-and-students')
                ->where('en', '=', true)->get();

   		$rootOfSections = DB::table('sections')->where('section', '=', 'For-professionals-and-students')->get();
      $slug = $unit;
   	} else {
		$items_en = null;
                $items_ru = null;
   		$rootOfSections = DB::table('sections')->where('section', '=', 'About-the-project')->get();
   	}
    if ($lang == 'en') {
      $url = Request::url();
      $url = str_replace('/en/', '/ru/', $url);
    	return view('en.contact', ['items_en' => $items_en, 'items_ru' => $items_ru, 'rootOfSections' => $rootOfSections->all()])->with(array('url'=>$url, 'unit'=>$unit));
    } else {
      $url = Request::url();
      $url = str_replace('/ru/', '/en/', $url);
    	return view('ru.contact', ['items_en' => $items_en, 'items_ru' => $items_ru, 'rootOfSections' => $rootOfSections->all()])->with(array('url'=>$url, 'unit'=>$unit));
    }
}
}
