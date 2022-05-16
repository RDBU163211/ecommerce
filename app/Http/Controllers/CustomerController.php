<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function register()
    {
    return view('Customer.register');
    }
      function store(Request $request)
      
      {
        $Customerr =new  Customer();
        $Customer->c_lname = $request->c_lname;
        $Customer->c_fname = $request->c_fname;
        $Customer->c_sex = $request->c_sex;
        $Customer->c_brithdate = $request->c_brithdate;
        $Customer->c_email = $request-c_email;
        $Customer->c_phone = $request->c_phone;
       $is_saved = $Customer->save();
      if($is_saved){
      echo " group project is SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
  {
   $Customer = Customer::all();
   return view('Customer.list', compact('Customer'));
  }
  public function edit($id)
   {
   $Customer =Customer::find($id);
   return view('Customer.edit', compact('Customer'));
   }
   public function update(Request $request)
   {
   //Validate
   $request->validate(['s_lname' => 'required' ]);
    $Customer= store_keeper::find($request->id);
    $Customer->pm_lname = $request->pm_name;
    $Customer->pm_fname = $request->pm_fname;
    $Customer->pm_sex = $request->pm_sex;
    $Customer->pm_brithdate = $request->pm_brithdate;
    $Customer->pm_email = $request->pm_email;
    $Customer->pm_phone = $request->pm_phone;
    $Customer->save();
    return redirect('Customer/list');
    }
    public function delete($id)
   {
    Customer::where('id', $id)->delete();
   return redirect('Customer/');
   }
  
   public function get_by_id($id)
   {
    $Customer= Customer::where('id', $id)->first();
    return view('Proper_manager', compact(Proper_manager'));
    }  
    //
}
