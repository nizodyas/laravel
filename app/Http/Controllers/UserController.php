<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

public function postSignUp(Request $request){
	$email = $request['email'];
	$name = $request['name'];
	$password = bcrypt($request['password']);

	$user = new User();
	$user->email = $email;
	$user->name = $name;
	$user->password = $password;

	$user->save(); //writes in db
	return redirect()->back();
}

public function postSignIn(Request $request){

}
}
?>