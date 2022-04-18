<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
  
 public function regitser(Request $request)
 {
 return view ('product.register');
}

 public function store(Request $request){
 
 
 
  $product = new product();
  $product->name = $request->name;
 $product->id = $request->id;
  $product->unit = $request->unit;
  $product->price = $request->price;
  $product->quantity = $request->quantity;
 
  $is_successed=$product::save();
  if($is_successed){
  echo 'record save successfully';}
  
  else
  echo 'somting went wrong the agin';

}
}