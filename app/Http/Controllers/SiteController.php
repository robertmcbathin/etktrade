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
        $spec_products = DB::table('ETKTRADE_GOODS')
                            ->where('is_spec',1)
                            ->limit(3)
                            ->get();
    	return view('index',[
    		'categories' => $categories,
    		'top_products' => $top_products,
            'spec_products' => $spec_products
    	]);
    }

    public function showSubcategoriesPage($subcategory_id){
        $meta = DB::table('ETKTRADE_CATEGORIES')
                    ->where('id',$subcategory_id)
                    ->first();
        $category = DB::table('ETKTRADE_CATEGORIES')
                        ->where('id',$subcategory_id)
                        ->first();

        $subcategories = DB::table('ETKTRADE_CATEGORIES')
                            ->where('parent',$subcategory_id)
                            ->get();

        /**
         * FETCH PRODUCTS
         */
        $cat_list = [];
        foreach ($subcategories as $subcategory) {
            $cat_list[] = $subcategory->id;
        }
        $products = DB::table('ETKTRADE_GOODS')
                        ->whereIn('category_id',$cat_list)
                        ->paginate(25);
        return view('pages.subcategories',[
            'meta' => $meta,
            'category' => $category,
            'subcategories' => $subcategories,
            'products' => $products
        ]);        
    }
}
