<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\detail;

class MyController extends Controller
{
    //
    public function form(Request $req){
       $user = new detail;

       $user->name = $req->name;
       $var = implode($req->fields);
       $user->fieldofIntrests = $var;

       $user->save();
        return back();
    }
    public function edit($id){
        $ed = DB::table('details')->where('id',$id)->first();
        return view('edit',compact('ed'));
    }
    public function update(Request $req){
         $var = implode($req->fields);
          DB::table('details')->where('id',$req->id)->update([
            'name'=>$req->name,
            'fieldofIntrests'=>$var
        ]);

        return redirect('/');

    }

   
}
