<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfilePage(){
    	$cart_items = DB::table('ETKTRADE_CART_ITEMS')
    	                ->join('ETKTRADE_PRODUCTS','ETKTRADE_PRODUCTS.id','=','ETKTRADE_CART_ITEMS.product_id')
    					->where('ETKTRADE_CART_ITEMS.user_id',Auth::user()->id)
    					->select('ETKTRADE_CART_ITEMS.*','ETKTRADE_PRODUCTS.*','ETKTRADE_CART_ITEMS.id as item_id')
    					->get();
    	/**
    	 * CALCULATING AMOUNT
    	 */
    	foreach ($cart_items as $cart_item) {
    		$cart_item->amount = $cart_item->price * $cart_item->product_count;
    	}
    	/**
    	 * CALCULATING TOTAL
    	 */
    	$cart_total = 0;
    	foreach($cart_items as $cart_item){
    		$cart_total += $cart_item->amount;
    	}
    	return view('profile.index',[
    		'cart_items' => $cart_items,
    		'cart_total' => $cart_total
    	]);
    }

    public function postDeleteCartItem(Request $request){
        $cart_item = $request->cart_item;
        try {
            DB::table('ETKTRADE_CART_ITEMS')
              ->where('id',$cart_item)
              ->delete();
        } catch (Exception $e) {
            
        }
        return redirect()->back();
    }

    /**
     * AJAX
     */
    public function ajaxAddToCart(Request $request){
    	$product_id = $request->productId;
    	$user_id = Auth::user()->id;

    	/**
    	 * 	IF CART EXISTS
    	 */
        if ($cart = DB::table('ETKTRADE_CARTS')
        			->where('user_id',$user_id)
        			->first()){
        	/**
        	 * IF PRODUCT EXISTS
        	 */
        	if ($product = DB::table('ETKTRADE_CART_ITEMS')
        				->where('user_id',$user_id)
        				->where('product_id',$product_id)
        				->first()) {
        		DB::table('ETKTRADE_CART_ITEMS')
        			->where('user_id',$user_id)
        			->where('product_id',$product_id)
        			->update([
        				'product_count' => ++$product->product_count
        			]);
        	} else {
        	/**
        	 * IF PRODUCT DOESN'T EXISTS
        	 */
        	    DB::table('ETKTRADE_CART_ITEMS')
        			->insert([
        				'user_id' => $user_id,
        				'product_id' => $product_id,
        				'cart_id' => $cart->id,
        				'product_count' => 1 
        			]);
        	}
        } else{
        	$cart = DB::table('ETKTRADE_CARTS')
        				->insertGetId([
        					'user_id' => $user_id
        				]);
        	DB::table('ETKTRADE_CART_ITEMS')
        					->insert([
        						'product_id' => $product_id,
        						'user_id' => $user_id,
        						'cart_id' => $cart,
        						'product_count' => 1
        					]);
        }

        /**
         * ITEMS COUNT TO DISPLAY
         */
        $cart_items = DB::table('ETKTRADE_CART_ITEMS')
        				->where('user_id',$user_id)
        				->get();
        $item_count = 0;
        foreach ($cart_items as $cart_item) {
        	$item_count += $cart_item->product_count;
        }
        return response()->json(['message' => 'success','item_count' => $item_count],200);
    }

    public function ajaxCheckCart(Request $request){
        if(Auth::user()){
        $cart_items = DB::table('ETKTRADE_CART_ITEMS')
                        ->where('user_id',Auth::user()->id)
                        ->get();
        $item_count = 0;
        foreach ($cart_items as $cart_item) {
            $item_count += $cart_item->product_count;
        }
     	return response()->json(['message' => 'success','item_count' => $item_count],200);
        }

    }

    public function ajaxDecreaseItemCount(Request $request){
        $cart_item_id = $request->cartItemId;

        try {
            $cart_item = DB::table('ETKTRADE_CART_ITEMS')
                            ->where('id', $cart_item_id)
                            ->first(); 
            DB::table('ETKTRADE_CART_ITEMS')
              ->where('id', $cart_item_id)
              ->update([
                'product_count' => --$cart_item->product_count
              ]);
            /** 
            * RECALCULATE AMOUNT
            **/
            $product = DB::table('ETKTRADE_PRODUCTS')
                        ->where('id',$cart_item->product_id)
                        ->first();
            $item_amount = $cart_item->product_count * $product->price;
            /**
            * RECALCULATE TOTAL
            **/
           $cart_items = DB::table('ETKTRADE_CART_ITEMS')
                           ->join('ETKTRADE_PRODUCTS','ETKTRADE_PRODUCTS.id','=','ETKTRADE_CART_ITEMS.product_id')
                           ->where('ETKTRADE_CART_ITEMS.user_id',Auth::user()->id)
                           ->select('ETKTRADE_CART_ITEMS.*','ETKTRADE_PRODUCTS.*','ETKTRADE_CART_ITEMS.id as item_id')
                           ->get();
           /**
            * CALCULATING AMOUNT
            */
           foreach ($cart_items as $item) {
               $item->amount = $item->price * $item->product_count;
           }
           /**
            * CALCULATING TOTAL
            */
           $cart_total = 0;
           foreach($cart_items as $item){
               $cart_total += $item->amount;
           }
        } catch (Exception $e) {
            
        }
        return response()->json(['message' => 'success','item_count' => $cart_item->product_count, 'item_amount' => $item_amount, 'cart_total' => $cart_total],200);
    }

    public function ajaxIncreaseItemCount(Request $request){
        $cart_item_id = $request->cartItemId;

        try {
            $cart_item = DB::table('ETKTRADE_CART_ITEMS')
                            ->where('id', $cart_item_id)
                            ->first(); 
            DB::table('ETKTRADE_CART_ITEMS')
              ->where('id', $cart_item_id)
              ->update([
                'product_count' => ++$cart_item->product_count
              ]);
            /** 
            * RECALCULATE AMOUNT
            **/
            $product = DB::table('ETKTRADE_PRODUCTS')
                        ->where('id',$cart_item->product_id)
                        ->first();
            $item_amount = $cart_item->product_count * $product->price;
            /**
            * RECALCULATE TOTAL
            **/
           $cart_items = DB::table('ETKTRADE_CART_ITEMS')
                           ->join('ETKTRADE_PRODUCTS','ETKTRADE_PRODUCTS.id','=','ETKTRADE_CART_ITEMS.product_id')
                           ->where('ETKTRADE_CART_ITEMS.user_id',Auth::user()->id)
                           ->select('ETKTRADE_CART_ITEMS.*','ETKTRADE_PRODUCTS.*','ETKTRADE_CART_ITEMS.id as item_id')
                           ->get();
           /**
            * CALCULATING AMOUNT
            */
           foreach ($cart_items as $item) {
               $item->amount = $item->price * $item->product_count;
           }
           /**
            * CALCULATING TOTAL
            */
           $cart_total = 0;
           foreach($cart_items as $item){
               $cart_total += $item->amount;
           }
        } catch (Exception $e) {
            
        }
        return response()->json(['message' => 'success','item_count' => $cart_item->product_count, 'item_amount' => $item_amount, 'cart_total' => $cart_total],200);
    }


}
