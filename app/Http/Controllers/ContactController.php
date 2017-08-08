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
      $items = Article::published()->where('section', '=', 'For-patients-and-their-families')->get();
      $rootOfSections = DB::table('sections')->where('section', '=', 'For-patients-and-their-families')->get();

    }else if ($unit == 'About-the-problem-of-aphasia') {
   		  $items = Article::published()->where('section', '=', 'About-the-problem-of-aphasia')->get();
   			$rootOfSections = DB::table('sections')->where('section', '=', 'About-the-problem-of-aphasia')->get();
   	} else if ($unit == 'For-professionals-and-students') {
   		$items = Article::published()->where('section', '=', 'For-professionals-and-students')->get();
   		$rootOfSections = DB::table('sections')->where('section', '=', 'For-professionals-and-students')->get();
      $slug = $unit;
   	} else {
   		$items = Article::published()->where('section', '=', 'About-the-project')->get();
   		$rootOfSections = DB::table('sections')->where('section', '=', 'About-the-project')->get();
   	}
    if ($lang == 'en') {
      $url = Request::url();
      $url = str_replace('/en/', '/ru/', $url);
    	return view('en.contact', ['items' => $items, 'rootOfSections' => $rootOfSections->all()])->with(array('url'=>$url, 'unit'=>$unit));
    } else {
      $url = Request::url();
      $url = str_replace('/ru/', '/en/', $url);
    	return view('ru.contact', ['items' => $items, 'rootOfSections' => $rootOfSections->all()])->with(array('url'=>$url, 'unit'=>$unit));
    }
}
}
