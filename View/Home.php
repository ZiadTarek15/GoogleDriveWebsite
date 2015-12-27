<?php include 'main.php';?>
<style>
	#body {
		margin-top:-20px;
		background-color: rbga(0,0,0,0);
		height: 625px;
		color: #696969;
	}
	#left {
		width: 250px;
		height: 547px;
		background-color: #ededed;
		float: left;
		box-shadow: 0.5px 0px 1px #888888;
		margin-top: 78px;
		
	}
	#left #categorize {
		margin-top: 40px	}
	#left #ADD {;

		margin-left: 50px;
		margin-top: 30px;
	}
	#left #E3dady a:hover,#left #ONE a:hover, #left #TWO a:hover,#left #THREE a:hover
	,#left #FOUR a:hover{background-color: #bdbdbd; border-radius: 0px;}
	#left #E3dady a, #left #ONE a, #left #TWO a,#left #THREE a,#left #FOUR a{
		color: #696969;
		border: 0px; 
		box-shadow: none;
		background-color:transparent;
		width: 250px;
		height: 50px;
		text-align: left;
		padding-left: 30px;
		position: relative;
	}
	#left .dropdown-menu{
		border-radius:0;
		border: 0px; 
		background-color: #d7d7d7;
		text-align: left;
		box-shadow: none;
		padding-bottom: 5px;
	} 
	#left .dropdown-submenu {
    position: relative;
	}
	#left .dropdown-submenu>.dropdown-menu {
	    top: 0;
	    left: 100%;
	    margin-top: -6px;
	    margin-left: -1px;
	    -webkit-border-radius: 0px;
	    -moz-border-radius: 0px;
	    border: 0px;
	}
	#left .dropdown-submenu:hover>.dropdown-menu {
	    display: block;
	}
	
	#firstROW{
		background-color:#f6f6f6; 
		margin-left: 250px;
		
	}
	#right #ann {
		background-color:#f6f6f6; 
		padding:14px;
		padding-left: -500px;
		box-shadow: 0px 0.5px 1px #888888;
		margin-bottom: 3px;
		z-index: 1;
		box-shadow: 0px 1px 1px #888888;
	}
	td {
		padding-right: 50px; 
		font-size: 12px; 
		padding-left: 10px;
		box-shadow: 0px 0.5px 0.5px #888888;
		height: 50px;
	}
</style>

<div id="body">
	<div id ="left">
		<div class="dropdown" id ="ADD">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
				Add Department</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
			<form method="post" action="../Controller/add_dep.php">
			  <input type ="text" name="ID" placeholder ="Department ID" required><br>
			  <input type ="text" name="DN" placeholder ="Department Name" required><br>
			  <input type ="text" name="DC" placeholder ="Class" required><br>
			  <input type ="text" name="DY" placeholder ="Year" required><br>
			  <button type="submit">Add</button>
			 </form>
			</ul>
		</div>
		<div id="categorize">
		<div class="dropdown" id = "E3dady">
          	<a id="dLabel" role="button"class="btn btn-primary" data-target="#" href="dep.php?department_id=0">
				<img alt="Brand" src="../images/folder.png" width="20" height="20" id="logo" style="margin-top: -10px;">
				Preparatory</a>
		</div>
		<div class="dropdown" id = "ONE" style="box-shadow: 0px 0.2px 0.5px #888888;">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				<img alt="Brand" src="../images/folder.png" width="20" height="20" id="logo" style="margin-top: -10px;">
				First</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li><a href="dep.php?department_id=10">Electrical</a></li>	
				<li class="divider"></li>	
				<li><a href="dep.php?department_id=11">Civil</a></li>
				<li class="divider"></li>
				<li><a href="dep.php?department_id=12">Architectural</a></li>
				<li class="divider"></li>		
				<li><a href="dep.php?department_id=13">Mechanical</a></li>
			</ul>
		</div>
		<div class="dropdown" id = "TWO" style="box-shadow: 0px 0.2px 0.5px #888888;">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				<img alt="Brand" src="../images/folder.png" width="20" height="20" id="logo" style="margin-top: -10px;">
				Second</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li><a href="dep.php?department_id=20">Electrical</a></li>
				<li class="divider"></li>		
				<li><a href="dep.php?department_id=21">Civil</a></li>
				<li class="divider"></li>
				<li><a href="dep.php?department_id=22">Architectural</a></li>
				<li class="divider"></li>		
				<li><a href="dep.php?department_id=23">Mechanical</a></li>
			</ul>
		</div>
		<div class="dropdown" id = "THREE" style="box-shadow: 0px 0.2px 0.5px #888888;">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				<img alt="Brand" src="../images/folder.png" width="20" height="20" id="logo" style="margin-top: -10px;">
				Third</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Electrical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="dep.php?department_id=300">CSE</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=301">Communication</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=302">Power</a></li>
                	</ul>
				</li>
				<li class="divider"></li>		
				<li><a href="dep.php?department_id=31">Civil</a></li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Architectural</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="dep.php?department_id=320">Design</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=321">Urban</a></li>
                	</ul>
				</li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Mechanical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="dep.php?department_id=330">Power</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=331">Mechatronics</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=332">Production</a></li>
                	</ul>
				</li>
			</ul>
		</div>
		<div class="dropdown" id = "FOUR" style="box-shadow: 0px 0.2px 0.5px #888888;">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				<img alt="Brand" src="../images/folder.png" width="20" height="20" id="logo" style="margin-top: -10px;">
				Fourth</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Electrical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="dep.php?department_id=400">CSE</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=401">Communication</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=402">Power</a></li>
                	</ul>
				</li>
				<li class="divider"></li>		
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Civil</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="dep.php?department_id=410">Structural</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=411">Public Works</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=412">Irrigation</a></li>
                	</ul>
				</li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Architectural</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="dep.php?department_id=420">Design</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=421">Urban</a></li>
                	</ul>
				</li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Mechanical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="dep.php?department_id=430">Power</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=431">Mechatronics</a></li>
	                  <li class="divider"></li>
	                  <li><a href="dep.php?department_id=432">Production</a></li>
                	</ul>
				</li>
			</ul>
		</div>
		</div>

	</div>
	<div id = "right">
		<div id="ann" style="height:auto;">
			<div>
			<ul class="list-inline">
				<li><a href="#" style="margin-left: -230px;">
			          <img alt="Brand" src="../images/logo1.png" width="30" height="30" id="logo" style="margin-top: -10px;">
			        </a>
		      	</li>
		        <li style="text-align: left;margin-left: -230px;"><h4>Drive</h4></li>
		        <li style="margin-left: 135px;font-size: 18px;">ANNOUNCEMENTS</li>
        	</ul>
			</div>
		</div>
		<div id="rightbar">
			<div id="rightcontent">
				<table id="annTable">
				  <tr id="firstROW" style="border-bottom: 1px solid #bdbdbd;">
				    <td style="width:100%;padding-bottom: 10px; padding-left: 10px; font-size: 15px; height:60px;">Description</td>
				    <td style="padding-right: 50px; font-size: 15px; padding-left: 10px;">Course</td>		
				    <td style="padding-right: 120px; font-size: 15px; padding-left: 10px;">Date</td>
				  </tr>
				  <?php 
                  $id = $_SESSION['user'];
				  viewAnnouncement($id)?>		
				</table>
			</div>
		</div>
	</div>
</div>