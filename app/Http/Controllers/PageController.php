<?php

namespace Aphasia\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Aphasia\Models\Page;
use Aphasia\Models\Article;
use DB;



class PageController extends Controller
{
  
  public function root($lang, $unit) {
  
   	if ($unit == 'For-patients-and-their-families') {
      $items = Article::published()->where('section', '=', 'For-patients-and-their-families')->get();

      if ($lang == 'en') {
        $rootOfSections = 'For patients and their families';
        $url = Request::url();
        $url = str_replace('/en/', '/ru/', $url);
        return view('en.survey', ['items' => $items])->with(array('url'=>$url, 'rootOfSections'=>$rootOfSections, 'unit'=>$unit));
      } else {
        $rootOfSections = 'Пациентам и их близким';
        $url = Request::url();
        $url = str_replace('/ru/', '/en/', $url);
        return view('ru.survey', ['items' => $items])->with(array('url'=>$url, 'rootOfSections'=>$rootOfSections, 'unit'=>$unit));
    }

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
    	return view('en.page', ['items' => $items, 'rootOfSections' => $rootOfSections->all()])->with(array('url'=>$url, 'unit'=>$unit));
    } else {
      $url = Request::url();
      $url = str_replace('/ru/', '/en/', $url);
    	return view('ru.page', ['items' => $items, 'rootOfSections' => $rootOfSections->all()])->with(array('url'=>$url, 'unit'=>$unit));
    }

  }



    
}

