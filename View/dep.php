<?php
include '../Controller/dep_controller.php';
session_start();
$department_id = $_GET['department_id'];
// $department_id = '15';
$data = get_dep($department_id);
$dep_id = $data[0];
$dep_name = $data[1];
$dep_year = $data[2];
$dep_class = $data[3];
//kol entries al courses fe array wa7da, al course code w wrah al course name t7t hna v 
$courses_data = get_courses($department_id);
$dep_years = get_years($dep_name,$dep_class);
?>
<html lang="en">
<style type="text/css">
  .navbar {
    border-radius: 0px;
    margin-right: -98px;
    margin-left: -99px;
    font-family: 'Handlee', cursive;
   }
  .fa 
  {
    color: #6C7A89;
    border-radius: 25px;
    border: 2px solid #6C7A89;
    padding: 20px; 
    top:100px;
  }
  .fa:hover{
    color: #6C7A89;
    border-radius: 25px;
    border: 2px solid #6C7A89;
    background: rgba(108, 122, 137, .5);
    padding: 20px; 
    top:100px;
  }
  .FList{
    position: relative;
    top:20px;
  }
  ul.FList li {
    display:inline;
    margin: 0 50px 0 0;
    height: 500px;
    width: 500px;
    font-family: 'Handlee', cursive;
  }
  ul p
  {
    font-family: 'Handlee', cursive;
  }
  .main{
    position: relative;
    margin: 0 auto;
    top: 120px;
    left: 100px;
    width: 1000px;
  }
  h1{
    position: relative;
    top:50px;
    left: 180px;
    font-family: 'Handlee', cursive;
  }
  .headd
  {
    font-family: 'Handlee', cursive;
    width: 70%;
  }
  .CN{
    font-size: 15px;
    text-align: center;
  }
  .course{
    position: relative;
    left: 300px;
    top: -50px;
    width: 70%;
  }
  #body {
    margin-top:-20px;
    background-color: rbga(0,0,0,0);
    height: 625px;
    font-family: 'Handlee', cursive;
  }
  #left {
    width: 250px;
    height: 547px;
    background-color: #6C7A89;
    float: left;
    padding-top: -10px;
    box-shadow: 0.5px 0px 1px #888888;
    margin-top: 78px;
    
  }
  #left .nav {
    margin-top: 80px;
  }
  .nav li {
    text-align: center;
  }
  .nav a {
    color: black;
    font-size: 20px;
  }
  body {
    font-family: 'Handlee', cursive;
  }
  .course label
  {
    font-family: 'Handlee', cursive;
  }
  .course button
  {
    font-family: 'Handlee', cursive;
  }
  .course input
  {
    font-family: 'Handlee', cursive;
  }
  .FList i{
    text-align: center;
  }
  #ann {
    background-color:#f6f6f6; 
    padding:14px;
    padding-left: -500px;
    box-shadow: 0px 0.5px 1px #888888;
    margin-bottom: -143px;
    z-index: 1;
    box-shadow: 0px 1px 1px #888888;
    position: relative;
    top:-18px;
  }
  #logo2 {
    position: relative;
    top:0px;
    left: 270px;
  }
 .item2{
    position: relative;
    top:0px;
    left: 270px;
    font-family: 'Handlee', cursive; 
  }
  .word2{
    position: relative;
    top:0px;
    left: 270px;
    font-family: 'Handlee', cursive;
  }
    .dep2{
    position: relative;
    top:0px;
    left: 270px;
    font-family: 'Handlee', cursive;
  }
</style>


<head>
  <meta charset="UTF-8">
  <title>Department courses </title>

   <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
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
                  $id = $_SESSION['user'];
                  viewUsername($id);
                  ?>
                </a>
                <ul class="dropdown-menu" style="border-radius:0;border: 0px;
                 background-color: #ededed;padding-bottom: 5px;">
                 <a href="#" style=" text-decoration:none;margin-left: 30px;margin-right: 30px;color: #696969;">Sign Out</a> 
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->


        </div><!-- /.container-fluid -->
      </nav>
    </div> <!-- /.row -->
  </div> <!-- /.contaier -->




<div id="ann">
      <div>
      <ul class="list-inline">
        <li><a href="#" style="margin-left: -230px;">
                <img alt="Brand" src="../images/logo1.png" width="30" height="30" id="logo2">
              </a>
            </li>
            <li class = "item2" style="text-align: left;margin-left: -230px;"><h4>Drive</h4></li>
            <li class = "dep2" style="margin-left: 135px;font-size: 18px;"> <?php echo $dep_name ." ". $dep_class ."th"; ?></li>
            <li class = "word2" style="margin-left: 135px;font-size: 18px;">Courses</li>
          </ul>
      </div>
    </div>



<div id="body">
  <div id="left" style="display:block;">
    <ul class="nav">
        <?php for ($i=0; $i < count($dep_years); $i++) {  ?>
        <li role="presentation">
          <a href="#<?php echo $dep_years[$i]; ?>" aria-controls="<?php echo $dep_years[$i]; ?>" role="tab" data-toggle="tab"><?php echo $dep_years[$i]; ?></a>
        </li>
        <?php } ?>    
  </div>
  <div id="right">
        <div class="tab-content" style="display: block;">  
          <?php for ($i=0; $i < count($dep_years); $i++) {  ?>
            <div role="tabpanel" class="tab-pane" id="<?php echo $dep_years[$i]; ?>">
              <div class = "main">
                <ul class = "FList">
                  <p><?php $this_id = this_id($dep_years[$i],$dep_class,$dep_name); ?></p>
                   <?php $year_courses = get_courses($this_id)?>
                   <?php for ($j=0; $j < count($year_courses); $j=$j+2) {  ?>
                    <li>
                      <?php $_SESSION['year_course'] = $dep_years[$i]; ?>
                      <a href="course.php?course_code=<?php echo $year_courses[$j] ?>">
                        <i class="fa fa-folder-open fa-5x"><p class = "CN"><?php 
                        echo ( $year_courses[$j+1] . "(" . ($year_courses[$j]) . ")"); 
                        ?></p>
                      </i>
                      </a>
                    </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          <?php } ?> 
        </div>
  </div> <!-- right !-->
</div> <!-- body!-->

<div class= "course">
  <form class="form-inline" method="post" action="../Controller/add_course.php">
  <div class="form-group">
    <label for="exampleInputName2">Course-Code</label>
    <input type="text" name="CC" class="form-control" id="exampleInputName2" placeholder="course code">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Course-Name</label>
    <input type="text" name="CN" class="form-control" id="exampleInputEmail2" placeholder="course name">
  </div>
  <button type="submit" class="btn btn-default">Add</button>
</form>
</div>
</body>
</html>