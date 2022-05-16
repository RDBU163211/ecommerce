<?php

namespace App\Http\Controllers;

use App\Models\store_keeper;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function register()
    {
    return view('store.register');
    }
      function store(Request $request)
      
      {
        $store_keeper =new store_keeper();
        $store_keeper->s_lname = $request->s_lname;
        $store_keeper->s_fname = $request->s_fname;
        $store_keeper->s_sex = $request->s_sex;
        $store_keeper->s_brithdate = $request->s_brithdate;
        $store_keeper->s_email = $request->s_email;
        $store_keeper->s_phone = $request->s_phone;
       $is_saved = $store_keeper->save();
      if($is_saved){
      echo " group project is SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
  {
   $store_keeper = store_keeper::all();
   return view('store_keeper.list', compact('store_keeper'));
  }
  public function edit($id)
   {
   $store_keeper = store_keeper::find($id);
   return view('store_keeper.edit', compact('store_keeper'));
   }
   public function update(Request $request)
   {
   //Validate
   $request->validate(['s_lname' => 'required' ]);
    $store_keeper = store_keeper::find($request->id);
    $store_keeper->s_lname = $request->s_name;
    $store_keeper->s_fname = $request->s_fname;
    $store_keeper->s_sex = $request->s_sex;
    $store_keeper->s_brithdate = $request->s_brithdate;
    $store_keeper->s_email = $request->s_email;
    $store_keeper->s_phone = $request->s_phone;
    $store_keeper->save();
    return redirect('store_keeper/list');
    }
    public function delete($id)
   {
    store_keeper::where('id', $id)->delete();
   return redirect('store_keeper/');
   }
  
   
}
