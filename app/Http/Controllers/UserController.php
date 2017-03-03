<?php

namespace App\Http\Controllers;
use Redirect;
use Session;
use App\User;
use App\Login;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        if($request->password==$request->cpassword)
        {
        	$user=new User;
            $db=Login::where('username', '=', $request->username)->firstOrFail();
            // want to check username exists
            echo $db->username;
        	$user->userid=time();
        	$user->firstname=$request->firstname;
        	$user->lastname=$request->lastname;
        	$user->email=$request->email;
        	$user->userlevel='NORMAL';
        	$user->status=1;
            $user->save();

            $login=new Login;
            $login->loginid=time();
            $login->userid=$user->userid;
            $login->username=$request->username;

            $dir_password=$request->password;
            $salt= bin2hex(random_bytes (22));
    		$options = [
        		'cost' => 11,
        		'salt' => $salt,];
    		$encrypted_password=password_hash($dir_password, PASSWORD_BCRYPT, $options); // using hasing
     		
     		//$encrypted_password=crypt ( $dir_password, $salt ); // using crypt

     		$login->salt=$salt;
     		$login->password=$encrypted_password;
     		$login->status=1;
     		$login->save();
     
     		//return view('Login.login')->with(array('firstname' => $request->firstname,'insert_status'=>'success'));

            Session::flash('firstname', $request->firstname);
            Session::flash('success_insert', 'true');
           // return Redirect::to("login");
        }
        else
        {
            Session::flash('firstname', $request->firstname);
            Session::flash('lastname', $request->lastname);
            Session::flash('email', $request->email);
            Session::flash('username', $request->username);
            Session::flash('password_not_match', 'true');
            return Redirect::to("/newuser");
        }
    }
}
