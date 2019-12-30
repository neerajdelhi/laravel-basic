<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;

class MessagesController extends Controller
{
	public function index(){
		die('reached');
	}
    public function submit(Request $request){
		//print_r($request->all()); die;
		$validatedData = $request->validate([
            'name' => 'required | max:60',
			'email' => 'required| email'
    ]);
	
	$contact = new contact;
	$contact->name = $request->name;
	$contact->email = $request->email;
	$contact->message = $request->message;
	
		if($contact->save()){
			echo "<script>alert('Message sent');</script>";
		}else{
			echo "<script>alert('Not saved');</script>";
		}
		return redirect('/');
    }
}
