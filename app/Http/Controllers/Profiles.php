<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Profiles extends Controller
{
    public function list(){
    	$datas=Http::get('kambad.ir/dlog/api/read.php')->json();
    	//var_dump($datas);
    	return view('list',['datas'=>$datas]);
    }
    public function list_single($id){
    	$datas=Http::get('kambad.ir/dlog/api/read_single.php?id='.$id)->json();
    	//dd($datas);
    	return view('list_one',['datas'=>$datas]);
    }
    public function create(Request $request){
        $response = Http::post('kambad.ir/dlog/api/create.php', [
        	'order_id' => $request->order_id,
   	        'amount' => $request->amount,
   	        'response_code' => $request->response_code,
   	        'response_desc' => $request->response_desc
        ]);
         return redirect('/profiles');
    }
    public function update(Request $request,$id){
    //dd($request->response_desc);
    	$response = Http::patch('kambad.ir/dlog/api/update.php?id='.$id,[
    		'order_id' => $request->order_id,
   	        'amount' => $request->amount,
   	        'response_code' => $request->response_code,
   	        'response_desc' => $request->response_desc
    	]);
    	return redirect('/profiles');
    }
    public function delete($id){
    //dd($request->response_desc);
    	$response = Http::delete('kambad.ir/dlog/api/delete.php?id='.$id);
    	return redirect('/profiles');
    }
}


  
