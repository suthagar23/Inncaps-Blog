<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Session;
use Redirect;
class LoginController extends Controller
{
    public function checkLogin(Request $request)
    {
    	$username=$request->username;
    	$dir_password=$request->password;
    	//$login=new Login;
    	$db=Login::where('username', '=', $username)->first();

    	$salt = $db->salt;
		$options = [
    		'cost' => 11,
    		'salt' => $salt,];
		$encrypted_password=password_hash($dir_password, PASSWORD_BCRYPT, $options); // using hasing
		$database_password= $db->password;
		if($encrypted_password==$database_password)
		{
			return Redirect::to("/dashboard");
		}
		else
		{
			Session::flash('login_failed', "true");
        	return Redirect::to("login");
		}
    }
}
