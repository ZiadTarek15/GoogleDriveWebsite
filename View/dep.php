<?php
include '../Controller/dep_controller.php';
session_start();
// $temp = $_SESSION['department_id']
$temp = '15';
$data = get_dep($temp);
$dep_id = $data[0];
$dep_name = $data[1];
$dep_year = $data[2];
$dep_class = $data[3];
//kol entries al courses fe array wa7da, al course code w wrah al course name t7t hna v 
$courses_data = get_courses($temp);
$dep_years = get_years($dep_name);
?>
<html lang="en">
<style type="text/css">
  #left {
    margin: 20px;
    margin-left: 0px;
    margin-top: 20px;
    width: 150px;
    height: 500px;
    background-color: #ECECEC;
    float: left;
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
  ul.FList li {
    display:inline;
    margin: 0 50px 0 0;
        height: 500px;
    width: 500px;
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
  }
  .CN{
    font-size: 15px;
    text-align: center;
  }
  .course{
    position: relative;
    left: 950px;
    top: -150px;
  }


</style>


<head>
	<meta charset="UTF-8">
	<title>Department courses </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<h1>
<?php echo $dep_name; ?>
</h1>

<div id="left" style="display:block;">
    <ul class="nav nav-pills nav-stacked">
       <?php for ($i=0; $i < 2; $i++) {  ?>
        <li role="presentation">
          <a href="#tags" aria-controls="year3" role="tab" data-toggle="tab"><?php echo $dep_years[$i]; ?></a>
        </li>
        <?php } ?>
      </ul>
  </div>
<div id="right">
  <div class="tab-content" style="display: block;">
    <div role="tabpanel" class="tab-pane active" id="number0">
      <div class = "main">
        <ul class = "FList">
        <?php for ($i=0; $i < count($courses_data); $i=$i+2) {  ?>
          <li>
            <a href="#">
              <i class="fa fa-folder-open fa-5x"><p class = "CN"><?php 
              echo ( $courses_data[$i+1] . "(" . ($courses_data[$i]) . ")"); 
              ?></p>
            </i>
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class= "course">
  <form method="post" action="../Controller/add_course.php">
  <input type ="text" name="CC" placeholder ="Course code" required><br>
  <input type ="text" name="CN" placeholder ="Course name" required><br>
  <button type="submit">Add</button>
  </form>
</div>
</body>
</html>