<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table="tbllogin";
    protected $primarykey="loginid";

	protected $fillable = [ 'loginid','username', 'salt', 'password'];
    protected $hidden = [];

}
