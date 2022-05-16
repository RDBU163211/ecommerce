<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProperManagerController extends Controller
{
    public function register()
    {
    return view('Proper_manager.register');
    }
      function store(Request $request)
      
      {
        $Proper_manager =new  Proper_manager();
        $store_keeper->pm_lname = $request->pm_lname;
        $Proper_manager->pm_fname = $request->pm_fname;
        $Proper_manager->pm_sex = $request->pm_sex;
        $Proper_manager->pm_brithdate = $request->pm_brithdate;
        $Proper_manager->pm_email = $request->pm_email;
        $Proper_manager->pm_phone = $request->pm_phone;
       $is_saved = $Proper_manager->save();
      if($is_saved){
      echo " group project is SUCCESSFULLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
  {
   $Proper_manager = Proper_manager::all();
   return view('Proper_manager.list', compact('Proper_manager'));
  }
  public function edit($id)
   {
   $Proper_manager =Proper_manager::find($id);
   return view('Proper_manager.edit', compact('Proper_manager'));
   }
   public function update(Request $request)
   {
   //Validate
   $request->validate(['pm_lname' => 'required' ]);
    $Proper_manager = store_keeper::find($request->id);
    $Proper_manager->pm_lname = $request->pm_name;
    $Proper_manager->pm_fname = $request->pm_fname;
    $Proper_manager->pm_sex = $request->pm_sex;
    $Proper_manager->pm_brithdate = $request->pm_brithdate;
    $Proper_manager->pm_email = $request->pm_email;
    $Proper_manager->pm_phone = $request->pm_phone;
    $Proper_manager->save();
    return redirect('Proper_manager/list');
    }
    public function delete($id)
   {
    Proper_manager::where('id', $id)->delete();
   return redirect('Proper_manager/');
   }
  
   public function get_by_id($id)
   {
    $Proper_manager= Proper_manager::where('id', $id)->first();
    return view('Proper_manager', compact(Proper_manager'));
    }  
}