<?php include 'main.php';?>
<style>
	#body {
		margin-top:-20px;
		background-color: rbga(0,0,0,0);
		height: 625px;
	}
	#left {
		width: 250px;
		height: 547px;
		background-color: #ededed;
		float: left;
		padding-top: -10px;
		box-shadow: 0.5px 0px 1px #888888;
		margin-top: 78px;
		
	}
	#left #categorize {
		margin-top: 100px;
	}
	#left .dropdown a{
		color:black;
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
	#left .dropdown a:hover {background-color: #bdbdbd; border-radius: 0px;}

	#right #rightbar{
		background-color:#f6f6f6; 
		padding:15px;
		box-shadow: 0px 0.5px 1px #888888;
		margin-bottom: 3px;
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
</style>

<div id="body">
	<div id ="left">
		<div id="categorize">
		<div class="dropdown" id = "E3dady">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				Preparatory</a>
		</div>
		<div class="dropdown" id = "ONE">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				First</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li><a href="#">Electrical</a></li>	
				<li class="divider"></li>	
				<li><a href="#">Civil</a></li>
				<li class="divider"></li>
				<li><a href="#">Architectural</a></li>
				<li class="divider"></li>		
				<li><a href="#">Mechanical</a></li>
			</ul>
		</div>
		<div class="dropdown" id = "TWO">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				Second</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li><a href="#">Electrical</a></li>
				<li class="divider"></li>		
				<li><a href="#">Civil</a></li>
				<li class="divider"></li>
				<li><a href="#">Architectural</a></li>
				<li class="divider"></li>		
				<li><a href="#">Mechanical</a></li>
			</ul>
		</div>
		<div class="dropdown" id = "THREE">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				Third</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Electrical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">CSE</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Communication</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Power</a></li>
                	</ul>
				</li>
				<li class="divider"></li>		
				<li><a href="#">Civil</a></li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Architectural</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">Design</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Urban</a></li>
                	</ul>
				</li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Mechanical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">Power</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Mechatronics</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Production</a></li>
                	</ul>
				</li>
			</ul>
		</div>
		<div class="dropdown" id = "FOUR">
			<a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
				Fourth</a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Electrical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">CSE</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Communication</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Power</a></li>
                	</ul>
				</li>
				<li class="divider"></li>		
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Civil</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">Structural</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Public Works</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Irrigation</a></li>
                	</ul>
				</li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Architectural</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">Architecture</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Urban</a></li>
                	</ul>
				</li>
				<li class="divider"></li>
				<li class="dropdown-submenu">
					<a tabindex="-1" href="#">Mechanical</a>
					<ul class="dropdown-menu">
	                  <li><a tabindex="-1" href="#">Power</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Mechatronics</a></li>
	                  <li class="divider"></li>
	                  <li><a href="#">Production</a></li>
                	</ul>
				</li>
			</ul>
		</div>
	<!--
		<div class="dropdown">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                Dropdown <span class="caret"></span>
            </a>
    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
              <li><a href="#">Some action</a></li>
              <li><a href="#">Some other action</a></li>
              <li class="divider"></li>
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Hover me for more options</a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="#">Second level</a></li>
                  <li class="dropdown-submenu">
                    <a href="#">Even More..</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">3rd level</a></li>
                    	<li><a href="#">3rd level</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Second level</a></li>
                  <li><a href="#">Second level</a></li>
                </ul>
              </li>
            </ul>
        </div>
	-->
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
		        <li style="margin-left: 230px;"><strong>ANNOUNCEMENTS</strong></li>
        	</ul>
			</div>
		</div>
		<div id="rightbar">
			<ul class="list-inline">
				<li>Name</li>
				<li style="margin-right: 100px; margin-left: 100px; float: right;">Last Modified</li>
				<li style="margin-right: 50px;float: right;">Owner</li>
			</ul>
		</div>
		<div id="rightcontent">
			<?php 
				viewAnnouncement();
			?>
		</div>
	</div>
</div>

<script>
prompt("HI");
	$('#left button').click(function() {
		$("#THREE").css("margin-top", 1000);
	}
</script>