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
            'title' => 'required|unique:articles,title',
            'title_ru' => 'required|unique:articles,title_ru',
            'content' => 'required',
            'content_ru' => 'required',
   ]);

        $article = new Article;
        $article->slug = str_slug("'" . $request->title . "'", '-');
        $article->section = $request->section;
        $article->title = $request->title;
        $article->title_ru = $request->title_ru;
        $article->content = $request->content;
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
        if ($unit == 'About-the-problem-of-aphasia') {
            $items = Article::published()->where('section', '=', 'About-the-problem-of-aphasia')->get();
            $rootOfSections = DB::table('sections')->where('section', '=', 'About-the-problem-of-aphasia')->get();
           

        } else if ($unit == 'For-professionals-and-students') {
            $items = DB::table('articles')->where('section', '=', 'For-professionals-and-students')->get();
            $rootOfSections = DB::table('sections')->where('section', '=', 'For-professionals-and-students')->get();

        } else if ($unit == 'For-patients-and-their-families') {
            $items = DB::table('articles')->where('section', '=', 'For-patients-and-their-families')->get();
            $rootOfSections = DB::table('sections')->where('section', '=', 'For-patients-and-their-families')->get();
            $article = Article::published()->where('slug', $slug)->get(); 

            if ($lang == 'en') { 
                $rootOfSections = 'For patients and their families';
                $url = Request::url();
                $url = str_replace('/en/', '/ru/', $url);
                return view('en.article', ['items' => $items, 'rootOfSections' => $rootOfSections, 'article'=>$article])->with(array('url'=>$url, 'unit'=>$unit));
            } else {
                $rootOfSections = 'Пациентам и их близким';
                $url = Request::url();
                $url = str_replace('/ru/', '/en/', $url);
                return view('ru.article', ['items' => $items, 'rootOfSections' => $rootOfSections, 'article'=>$article])->with(array('url'=>$url, 'unit'=>$unit));
        }

        } else {
            $items = DB::table('articles')->where('section', '=', 'About-the-project')->get();
            $rootOfSections = DB::table('sections')->where('section', '=', 'About-the-project')->get();
        }

        $article = Article::published()->where('slug', $slug)->get(); 
        //dd($article);

        if ($lang == 'en') { 
            $url = Request::url();
            $url = str_replace('/en/', '/ru/', $url);
            return view('en.article', ['items' => $items, 'rootOfSections' => $rootOfSections->all(), 'article'=>$article])->with(array('url'=>$url, 'unit'=>$unit));
        } else {
            $url = Request::url();
            $url = str_replace('/ru/', '/en/', $url);
            return view('ru.article', ['items' => $items, 'rootOfSections' => $rootOfSections->all(), 'article'=>$article])->with(array('url'=>$url, 'unit'=>$unit));
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
        $this->validate($request, [
            'title' => 'required',
            'title_ru' => 'required',
            'content' => 'required',
            'content_ru' => 'required',
        ]);
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
