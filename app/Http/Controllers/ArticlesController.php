<?php

namespace Aphasia\Http\Controllers;

//use Illuminate\Http\Request;

use Aphasia\Http\Controllers\Controller;
use Aphasia\Models\Article;
use DB;

//use Illuminate\Support\Facades\Request;

use Illuminate\Http\Request as HttpRequest;
use Request;


class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $articleModel) 
    {
        $articles = $articleModel->showAll();
        return view('dashboard.dashboard', ['articles' => $articles]);
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        $this->validate($request, [
            'title_en' => 'unique:articles,title_en',
            'title_ru' => 'unique:articles,title_ru',
   ]);

        $article = new Article;
        $article->slug = str_slug("'" . $request->title_en . "'", '-');
        $article->section = $request->section;
	$article->en = $request->en;
	$article->ru = $request->ru;
        $article->title_en = $request->title_en;
        $article->title_ru = $request->title_ru;
        $article->content_en = $request->content_en;
        $article->content_ru = $request->content_ru;
        $article->published = $request->published;

        //if ($request->hasFile('img')) {
        //    $file = $request->file('img')->getClientOriginalName();
         //   $pref = date('G:i--jMo');
        //}


        //Storage::prepend('file.log', date('G:i--jMo'));
        //$request->file('img')->storeAs('img', $pref.$file);
         $article->save();
        return back()->with('message','Категория добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $articleModel, $lang, $unit, $slug)
    {
	$allSlugs_ru = DB::table('articles')->where('ru', '=', 1)->get()->pluck('slug')->toArray();    
        $allSlugs_en = DB::table('articles')->where('en', '=', 1)->get()->pluck('slug')->toArray();

	if (($lang != "ru") and ($lang != "en")) {
		return view('errors.404');
	} else if (($lang == "en") and (!(in_array($slug, $allSlugs_en)))) {
		return view('errors.404');
	} else if (($lang == "ru") and (!(in_array($slug, $allSlugs_ru)))) {
		return view('errors.404');
	}
		
	
	$en = Article::published()->where('slug', $slug)->get()->pluck('en')->toArray();
        $ru = Article::published()->where('slug', $slug)->get()->pluck('ru')->toArray();
        $article = Article::published()->where('slug', $slug)->get(); 

        if ($unit == 'For-professionals-and-students') {
            $items_ru = Article::published()
		->where('section', '=', 'For-professionals-and-students')
		->where('ru', '=', true)->get();

	    $items_en = Article::published()
		->where('section', '=', 'For-professionals-and-students')
		->where('en', '=', true)->get();

            $rootOfSections = DB::table('sections')->where('section', '=', 'For-professionals-and-students')->get();
	    



        } else if ($unit == 'For-patients-and-their-families') {
            $items_ru = Article::published()
		->where('section', '=', 'For-patients-and-their-families')
		->where('ru', '=', 1)->get();

	    $items_en = Article::published()
		->where('section', '=', 'For-patients-and-their-families')
		->where('en', '=', 1)->get();

            $rootOfSections = DB::table('sections')->where('section', '=', 'For-patients-and-their-families')->get();                    
        }
//dd($items_ru);
        if ($lang == 'en') { 
		if ($ru[0] == 0) {
			$url = 0;
		} else {
	                $url = Request::url();
           	        $url = str_replace('/en/', '/ru/', $url);
		}
            return view('en.article', ['items_ru' => $items_ru, 'items_en' => $items_en, 'rootOfSections' => $rootOfSections->all(), 'article'=>$article])->with(array('url'=>$url, 'unit'=>$unit));
        } else {
            if ($en[0] == 0) {
                        $url = null;
            } else {
                        $url = Request::url();
                        $url = str_replace('/ru/', '/en/', $url);
            }

            return view('ru.article', ['items_ru' => $items_ru, 'items_en' => $items_en, 'rootOfSections' => $rootOfSections->all(), 'article'=>$article])->with(array('url'=>$url, 'unit'=>$unit));
        }

    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::find($id);
        return view('dashboard.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HttpRequest $request, $id)
    {
       
        Article::find($id)->update($request->all());
        return redirect()->route('all')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        return back()->with('message','Статья удалена');

    }
}
