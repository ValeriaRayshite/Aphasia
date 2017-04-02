<?php

namespace Aphasia\Http\Controllers;


use Aphasia\Http\Controllers\Controller;


class RedirectController extends Controller
{
public function redirect() 
{
	$countryCode = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	if ( $countryCode == 'ru' || $countryCode == 'ua' || $countryCode == 'by' || $countryCode == 'md' || $countryCode == 'lv' || $countryCode == 'lt' || $countryCode == 'ee' || $countryCode == 'ge' || $countryCode == 'ab' || $countryCode == 'os' || $countryCode == 'am' || $countryCode == 'az' || $countryCode == 'kz' || $countryCode == 'kz' || $countryCode == 'uz' || $countryCode == 'tz' || $countryCode == 'tj') {
		return redirect()->route('ru');
	} else {
		return redirect()->route('en');
	} 
}


}