<html !DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <!--________________________________________style_______________________________________________-->
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
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

</head>
<!--______________________________________________body___________________________________-->
<body>

  <?php
          include 'connection.php';

          //get them from pervious pages
          $course_code = 1;//$_SESSION['course_id']];
          $as_id = 2;//$_SESSION['as_id']];
          $mat_type = 'Sheets';//$_SESSION['mat_type']];
          $mN=array();
          $mC=array();
          //get material name from db
          $sql = "SELECT mat_name , mat_content
                  FROM material 
                  WHERE mat_type='$mat_type' AND course_code= '$course_code' "; 
          $result = $conn->query($sql);         
          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                //show the list material names as a list of links in the side nav
                  $name=$row['mat_name'];
                  $mcontent=$row['mat_content'];
                  array_push($mN,$name);
                  array_push($mC,$mcontent);
                  
                }
          }
          $sql1 = "SELECT fst_name 
                  FROM academic_staff 
                  WHERE as_id='$as_id'"; 
          $result1 = $conn->query($sql1);         
          if ($result1->num_rows > 0) {
             // output data of each row
              while($row1 = $result1->fetch_assoc()) {
                //show the list material names as a list of links in the side nav
                  $as_name=$row1['fst_name'];
                  
                }

              }
  ?>
          
      </ul><br>
<!--___________________________________________________body___________________________________________________________-->
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
                  echo $as_name;
                 
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
            <li class = "dep2" style="margin-left: 135px;font-size: 18px;"> <?php echo $mat_type; ?></li>
           
          </ul>
      </div>
    </div>
<div id="body">
  <div>
  <div id="left" style="display:block;">
    <ul class="nav">
        <?php for ($i=0; $i < count($mN); $i++) {  ?>
        <li role="presentation">
          <a href="#<?php echo $mN[$i]; ?>" aria-controls="<?php echo $mN[$i]; ?>" role="tab" data-toggle="tab"><?php echo $mN[$i]; ?></a>
        </li>
        <?php } ?>
<!--____________________________Add New Material Button_________________________________________________-->
  <div id="bMaterial">
     <br>
    <?php
          //check if the user has access to add material
          $check="SELECT * FROM access WHERE course_code='$course_code' AND as_id='$as_id'";
          $checkResult =$conn->query($check);?>
          <?php if($checkResult->num_rows>0)
          //make the button appear if the user has access
            echo '<form>
                  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                  Add New Material
                  </button></form>';
    ?>
            
  </div>

    <!-- Modal related to the button (Add New Material) -->
    <div id="myModal" class="modal fade" role="dialog" >
        
          <div class="modal-dialog">

             <!-- Modal content-->
                 <div class="modal-content">
                   <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">New Material</h4>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="../Controller/Material.php">
                          Material Name: <br>
                          <input type="text" name="matname" ><br>

                           Material Content:<br>
                           <TEXTAREA NAME="matContent" ROWS=9 COLS=70 ></TEXTAREA> <br>
                    
                   
                        <button type="submit" class="btn btn-default" >Save</button>
        
                      </form>
                  </div>
                  </div>

          </div>  
           
        </div>          
  </div><!--end of left-->
  <div id="right">
        <div class="tab-content" style="display: block;">  
          <?php for ($i=0; $i < count($mN); $i++) {  ?>
            <div role="tabpanel" class="tab-pane" id="<?php echo $mN[$i]; ?>">
              <div class = "main">
                <ul class = "FList">
                  <p><?php echo $mC[$i] ?></p>
                   </ul>
              </div>
            </div>
          <?php } ?> 
        </div>
  </div> <!-- right !-->

</div> <!-- body!-->



</body>
</html>