<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class MyController extends Controller
{

    public function show(Request $request){
         $data = User::all();           
         return response()->json($data);
               
        //  return view('welcome')->with(compact('data'));


    }


    public function create(Request $request){

        $validate = $request->validate([
         'email' => ['required'],
         'name' => ['Required']

        ]);
        
        $data = User::all();           
        return reponse()->json_encode($data);      

   }

    public function update($id){
        $data = User::all();           
        return reponse()->json_encode($data);  
    
   }

   public function delete($id){
    $data = User::all();           
    return reponse()->json_encode($data);  

}



}
