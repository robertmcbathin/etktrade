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
    /**
     * КАТЕГОРИИ УРОВНЯ 1
     * 
     */
    public function showCategoriesPage($category_id){
        $meta = DB::table('ETKTRADE_CATEGORIES')
                    ->where('id',$category_id)
                    ->first(); 
        $category = DB::table('ETKTRADE_CATEGORIES')
                        ->where('id',$category_id)
                        ->first();    
        $subcategories = DB::table('ETKTRADE_CATEGORIES')
                            ->where('parent',$category_id)
                            ->get();            
        return view('pages.categories',[
            'meta' => $meta,
            'category' => $category,
            'subcategories' => $subcategories
        ]);
    }
    /**
     * КАТЕГОРИИ УРОВНЯ 2
     * 
     */
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
                        ->paginate(24);
        return view('pages.subcategories',[
            'meta' => $meta,
            'category' => $category,
            'parent_category' => $parent_category,
            'grandparent_category' => $grandparent_category,
            'subcategories' => $subcategories,
            'products' => $products
        ]);        
    }
    /**
     * КАТЕГОРИИ УРОВНЯ 3
     * ЗДЕСЬ БУДУТ ОТОБРАЖАТЬСЯ АТТРИБУТЫ ДЛЯ СОРТИРОВКИ
     */
    public function showStockPage($stock_id){
        $meta = DB::table('ETKTRADE_CATEGORIES')
                    ->where('id',$stock_id)
                    ->first();
        $category = DB::table('ETKTRADE_CATEGORIES')
                        ->where('id',$stock_id)
                        ->first();
        $products = DB::table('ETKTRADE_PRODUCTS')
                        ->where('category_id',$stock_id)
                        ->paginate(24);
        $parent_category = DB::table('ETKTRADE_CATEGORIES')
                    ->where('id',$category->parent)
                    ->first();
        $grandparent_category = DB::table('ETKTRADE_CATEGORIES')
                                    ->where('id',$parent_category->parent)
                                    ->first();
        $attributes = DB::table('ETKTRADE_ATTRIBUTES')
                            ->where('category_id',$stock_id)
                            ->get();

        $product_list = [];
        foreach($products as $product){
            $product_list[] = $product->id;
        }
        $product_attributes = DB::table('ETKTRADE_PRODUCT_ATTRIBUTES')
                        ->join('ETKTRADE_ATTRIBUTES','ETKTRADE_ATTRIBUTES.id','=','ETKTRADE_PRODUCT_ATTRIBUTES.attribute_id')
                        ->whereIn('ETKTRADE_PRODUCT_ATTRIBUTES.product_id',$product_list)
                        ->selectRaw('ETKTRADE_PRODUCT_ATTRIBUTES.value, count(ETKTRADE_PRODUCT_ATTRIBUTES.value) as attr_count, ETKTRADE_PRODUCT_ATTRIBUTES.attribute_id, ETKTRADE_ATTRIBUTES.type')
                       // ->select('ETKTRADE_PRODUCT_ATTRIBUTES.*','ETKTRADE_ATTRIBUTES.title as title','ETKTRADE_ATTRIBUTES.unit as unit','ETKTRADE_ATTRIBUTES.type as type', DB::raw('count(ETKTRADE_PRODUCT_ATTRIBUTES.value) as value_count'))
                        ->groupBy('ETKTRADE_PRODUCT_ATTRIBUTES.value','ETKTRADE_PRODUCT_ATTRIBUTES.attribute_id', 'ETKTRADE_ATTRIBUTES.type')
                        ->get();
        return view('pages.stock',[
            'meta' => $meta,
            'category' => $category,
            'products' => $products,
            'parent_category' => $parent_category,
            'grandparent_category' => $grandparent_category,
            'attributes' => $attributes,
            'product_attributes' => $product_attributes,
        ]);
    } 

    public function showProductPage($product_id){
        $product = DB::table('ETKTRADE_PRODUCTS')
                    ->leftJoin('ETKTRADE_CATEGORIES', 'ETKTRADE_CATEGORIES.id', '=', 'ETKTRADE_PRODUCTS.category_id')
                    ->where('ETKTRADE_PRODUCTS.id',$product_id)
                    ->select('ETKTRADE_PRODUCTS.*', 'ETKTRADE_CATEGORIES.title as category')
                    ->first();
        $attributes = DB::table('ETKTRADE_PRODUCT_ATTRIBUTES')
                        ->join('ETKTRADE_ATTRIBUTES','ETKTRADE_ATTRIBUTES.id','=','ETKTRADE_PRODUCT_ATTRIBUTES.attribute_id')
                        ->where('product_id',$product->id)
                        ->select('ETKTRADE_PRODUCT_ATTRIBUTES.*','ETKTRADE_ATTRIBUTES.title as title','ETKTRADE_ATTRIBUTES.unit as unit')
                        ->get();
        return view('pages.product',[
            'product' => $product,
            'attributes' => $attributes
        ]);
    }
}
