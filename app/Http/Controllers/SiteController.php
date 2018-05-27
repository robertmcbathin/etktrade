<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiteController extends Controller
{
    public function showMainPage(){
    	$categories = DB::table('ETKTRADE_CATEGORIES')
    					->get();
    	$top_products = DB::table('ETKTRADE_PRODUCTS')
    						->limit(6)
    						->get();
        $spec_products = DB::table('ETKTRADE_PRODUCTS')
                            ->whereNotNull('price_without_discount')
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
        $parent_category = DB::table('ETKTRADE_CATEGORIES')
                    ->where('id',$category->parent)
                    ->first();
        $grandparent_category = DB::table('ETKTRADE_CATEGORIES')
                                    ->where('id',$parent_category->parent)
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
        $products = DB::table('ETKTRADE_PRODUCTS')
                        ->whereIn('category_id',$cat_list)
                        ->paginate(25);
        return view('pages.subcategories',[
            'meta' => $meta,
            'category' => $category,
            'parent_category' => $parent_category,
            'grandparent_category' => $grandparent_category,
            'subcategories' => $subcategories,
            'products' => $products
        ]);        
    }

    public function showProductPage($product_id){
        $product = DB::table('ETKTRADE_PRODUCTS')
                    ->leftJoin('ETKTRADE_CATEGORIES', 'ETKTRADE_CATEGORIES.id', '=', 'ETKTRADE_PRODUCTS.category_id')
                    ->where('ETKTRADE_PRODUCTS.id',$product_id)
                    ->select('ETKTRADE_PRODUCTS.*', 'ETKTRADE_CATEGORIES.title as category')
                    ->first();
        return view('pages.product',[
            'product' => $product
        ]);
    }
}
