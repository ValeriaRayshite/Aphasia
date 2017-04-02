<?php

namespace Aphasia\Http\Controllers;

use Illuminate\Http\Request;
use Aphasia\Http\Requests;
use Mail;
use Aphasia\Mail\Survey;
use Aphasia\Mail\SurveyRu;
use Aphasia\Mail\SurveyEn;


class MailController extends Controller
{
    public function surveyRu(Request $request) {
    	$input = $request->all();
    //dd($input);
    
    	Mail::to('rayshite@gmail.com')->send(new SurveyRu($input));
    	return redirect()->back();
    }

    public function surveyEn(Request $request) {
    	$input = $request->all();
    //dd($input);
    
    	Mail::to('rayshite@gmail.com')->send(new SurveyEn($input));
    	return redirect()->back();
    }




    public function contactRu(Request $request) {
        $input = $request->all();
    //dd($input);
    
        Mail::to('rayshite@gmail.com')->send(new ContactRu($input));
        return redirect()->back();
    }

    public function contactEn(Request $request) {
        $input = $request->all();
    //dd($input);
    
        Mail::to('rayshite@gmail.com')->send(new ContactEn($input));
        return redirect()->back();
    }
}
