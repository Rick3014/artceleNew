<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class LanguageController extends Controller
{
	/**
	* @desc Change the current language
	* $request Ajax request
	*/
    public function changeLanguage(Request $request){
    	if($request->ajax()){
    		$request->session()->put('locale', $request->locale);
    	}
    }
}
