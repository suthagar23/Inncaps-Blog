@extends('layout.login')
@section('content')


		    <div class="wrapper" >

                <form action="addnewuser" method="post" class="form-signin" style="width:100%;">
                    <div class="col-lg-10 " style="margin: 0 auto;text-align:center; position: relative; float: none;">
                        <h2>InnCaps - Suthagar Page</h2>
                        <p class="lead">New User</p>
                    </div>
                    <div class="form-group has-error">
                     @if (Session::has('password_not_match'))
                        <label class="control-label" for="inputError" style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;">Password does not match!</label>
                     @endif
                     </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required="" autofocus="" value="<?php if (Session::has('firstname')==true) {echo Session::get('firstname'); } ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required="" autofocus="" value="<?php if (Session::has('lastname')==true) {echo Session::get('lastname'); } ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required="" autofocus="" value="<?php if (Session::has('email')==true) {echo Session::get('email'); } ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="" autofocus="" value="<?php if (Session::has('username')==true) {echo Session::get('username'); } ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required=""/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Retype Password" required=""/>
                    </div>
                    {{csrf_field()}}
                    <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Create User</button>
                    <a class="btn btn-link" href="/login"  name="Sign_up" style=" width:100%; margin: 0 auto; position: relative; text-align: center; ">Back to Login</a>
                </form>
            </div>


@stop