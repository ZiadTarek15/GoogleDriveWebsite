<!doctype html>
<html lang="en">
<head>

 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//js.pusher.com/2.2/pusher.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script type="text/javascript" src="includes/imagetransition.js"></script>
<script type="text/javascript" src="includes/checkenabledisable.js"></script>
<script type="text/JavaScript" src="js/functions.js"></script> 
   
<style>
   body{
    font-family: 'Handlee', cursive;
    color: #696969;
   }
   .navbar {
    border-radius: 0px;
    margin-right: -98px;
    margin-left: -99px;
   }

</style>

</head><!-- header section -->

<body>
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" style="display: inline;">
            <a class="navbar-brand" href="#">
              <img alt="Brand" src="../images/logo2.png" width="40" height="35" id="logo" style="margin-top: -10px;">
              <ul style="margin-top: -25px;margin-left: 20px;">Faculty of Engineering</ul>
            </a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="#" id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Notification
                </a>
                <ul class="dropdown-menu" aria-labelledby="dLabel">
                <!-- Notification fns-->
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                    aria-haspopup="true" aria-expanded="false">
                  <?php 
                  session_start();
                  include('connection.php');
                  $id = $_SESSION['user'];
                  viewUsername($id);
                  ?>
                </a>
                <ul class="dropdown-menu" style="border-radius:0;border: 0px;
                 background-color: #ededed;padding-bottom: 5px;">
                 <a href="../Controller/signout.php" style=" text-decoration:none;margin-left: 30px;margin-right: 30px;color: #696969;">Sign Out</a> 
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->
      </nav>
    </div> <!-- /.row -->
  </div> <!-- /.contaier -->
</body>
</html>