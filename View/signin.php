<html !DOCTYPE=html>
<head>
	<title>Academic Content</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<link href='https://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/signin.css">
</head>
<body>

  <div class="panel1" id="panel-1">
  	<div id="panel1container">
	<div class="welcome">
	</br>
		<h1 class="head">The Official Website</h1><br>
		<h2 class="head">For The Courses And Projects</h2><br>
		<h3 class="head">Of Faculty of Engineering</h3><br>
		<h4 class="head">Ain Shams University</h4>
	</br>
		<button type="button" class ="btnn" data-toggle="modal" data-target="#myModal">Join Now!</button><br><br>
		<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signin" style="color:#00BFFF" id="link">Already Have Account? Sign In Now!</a>
	</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-size:25px;"><strong>Sign Up!</strong></h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{action('RegisterController@doRegister')}}" id="signup">
        	<label id="label-username" for="username"></label>
        	<input type="text" name="username" required placeholder="Username" class="input-form" id="username">
        	<label id="label-email" for="email"></label>
        	<input type="email" name="email" placeholder="Email Address" class="input-form" required id="email">
        	<label for="password" id="label-password"></label>
        	<input type="password" name="password" placeholder="Password" class="input-form" required id="password">
        	<label for="password" id="label-password-con"></label>
        	<input type="password" name="conpassword" placeholder="Password Confirmation" class="input-form" required id="conpassword">

             </div>
      <div class="modal-footer">
      	<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signin" style="float:left;margin-top:15px;">Already Have Account? Sign In Now!</a>
        <button type="button" data-dismiss="modal" class="btn btn-danger" id="danger">Close</button>
        <input type="submit" value="Sign Up" class="btn btn-success" style="margin-right:15px;" id="submit" onclick="check()" data-loading-text="Creating Account...">
       
       </form>
      </div>
    </div>

  </div>
</div>

<div id="signin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-size:25px;"><strong>Sign in!</strong></h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{action('LoginController@doLogin')}}" id="signup-signin" url="login">
        	<label id="label-username" for="username-signin"></label>
        	<input type="text" name="username-signin" required placeholder="Username" class="input-form" id="username-signin">
        	<label for="password-signin" id="label-password-signin"></label>
        	<input type="password" name="password-signin" placeholder="Password" class="input-form" required id="password-signin">
             </div>
      <div class="modal-footer">
      	<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal" style="float:left;margin-top:15px;">Don't Have Account? Sign Up Now!</a>
        <button type="button" data-dismiss="modal" class="btn btn-danger" id="danger">Close</button>
        <input type="submit" value="Sign In" class="btn btn-success" style="margin-right:15px;" id="submit-signin">
       
       </form>
      </div>
     
    </div>

  </div>
  </div>
</div>
	</body>
</html>