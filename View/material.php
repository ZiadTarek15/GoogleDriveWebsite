<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
        <?php
          include 'connection.php';
         
          $course_code = 1;//$_SESSION['course_id']];
          $mat_type = 'Sheets';//$_SESSION['mat_type']];
          $mat_year = 2015;//$_SESSION['mat_year']];

          $sql = "SELECT mat_name 
                  FROM material 
                  WHERE mat_type='$mat_type' AND course_code= '$course_code' AND mat_year='$mat_year'"; 
          $result = $conn->query($sql);         
          if ($result->num_rows > 0) {
             // output data of each row
              while($row = $result->fetch_assoc()) {
                  $name=$row['mat_name'];
                  echo"<li><a href name=$name>".$name."</a></li>";
                  echo "<br>";
                 
                }
          }
      
          ?>
      </ul><br>


    
    </div>

    <div class="col-sm-9">
      
      <?php
        if($name==true){
          echo"<h4><small>".$name."</small></h4>";
            $sql1 = "SELECT mat_content 
                  FROM material 
                  WHERE mat_type='$mat_type' AND course_code= '$course_code' AND mat_year='$mat_year' AND mat_name='$name'"; 
          $result = $conn->query($sql1);         
          if ($result->num_rows > 0) {
             // output data of each row
              while($row1 = $result->fetch_assoc()) {
                  $name2=$row1['mat_content'];
                  echo"<p>".$name2."<p>";
                  echo "<br>";
                }
          }

      }
      ?>
          </div>
        </div>
      

</body>
</html>