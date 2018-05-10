<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    public function showMainPage(){
    	$categories = DB::table('ETKTRADE_CATEGORIES')
    					->get();
    	$top_products = DB::table('ETKTRADE_GOODS')
    						->limit(6)
    						->get();
    	return view('index',[
    		'categories' => $categories,
    		'top_products' => $top_products
    	]);
    }
}
