<?php

namespace App\Http\Controllers;

use App\Events\LangChanged;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function ChangeLang($lang)
    {
        session()->put('lang' , $lang);
        return redirect(route('home'));
    }//end method

}
