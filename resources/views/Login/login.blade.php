@extends('layout.login')
@section('content')


		    <div class="wrapper"  >
                <form action="checklogin" method="post" class="form-signin">
                    <div class="col-lg-8 " style="margin: 0 auto;text-align:center; position: relative; float: none;">
                        <h2>InnCaps</h2>
                        <p class="lead">Suthagar Page</p>
                    </div>

                    <div class="form-group has-success">
                     @if (Session::has('success_insert'))
                        <label class="control-label" for="inputError" style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;"><?php echo Session::get('firstname'); ?>!, you account has beenc created</label>
                     @endif
                     </div>
			          
                    <div class="form-group has-error">
                     @if (Session::has('login_failed'))
                        <label class="control-label" for="inputError" style="width:100%; margin: 0 auto;text-align:center; position: relative;  float: none;">Incorrect Username or Password!</label>
                     @endif
                     </div>
                   
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="" autofocus="" />
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required=""/>
                    </div>
                    {{csrf_field()}}
                    <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
                    <a class="btn btn-link" href="/newuser"  name="Sign_up" style=" width:100%; margin: 0 auto; position: relative; text-align: center; ">Create New User</a>
                </form>
            </div>


@stop