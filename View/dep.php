<?php
include '../Controller/dep_controller.php';
session_start();
// $department_id = $_GET['department_id'];
$department_id = '15';
$data = get_dep($department_id);
$dep_id = $data[0];
$dep_name = $data[1];
$dep_year = $data[2];
$dep_class = $data[3];
//kol entries al courses fe array wa7da, al course code w wrah al course name t7t hna v 
$courses_data = get_courses($department_id);
$dep_years = get_years($dep_name);
?>
<html lang="en">
<style type="text/css">

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
    top: -150px;
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
  #left #categorize {
    margin-top: 100px;
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
  


</style>


<head>
	<meta charset="UTF-8">
	<title>Department courses </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<h1 class = "headd">
<?php
echo $dep_name ." ". $dep_class ."th";
?>
</h1>

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
                  <p><?php $this_id = this_id($dep_years[$i],'4',"cse"); ?></p>
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