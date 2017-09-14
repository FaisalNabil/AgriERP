<?php 
	if(!isset($isDispatchedByFrontController)){
		include_once("../view/error.php");
		die;
	}
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">AgriERP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/AgriERP/?farmer_show">SHOW ALL FARMERS</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">FERTILIZER <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?fertilizer_add">ADD FERTILIZER</a></li>
            <li><a href="/AgriERP/?fertilizer_show">SHOW ALL FERTILIZERS</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">INSECTICIDE <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?insecticide_add">ADD INSECTICIDE</a></li>
            <li><a href="/AgriERP/?insecticide_show">SHOW ALL INSECTICIDE</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">REGION <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?region_add">ADD REGION</a></li>
            <li><a href="/AgriERP/?region_show">SHOW ALL REGION</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">STATUS<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?status_add">ADD STATUS</a></li>
            <li><a href="/AgriERP/?status_show">SHOW ALL STATUS</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CROP<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/AgriERP/?cropregion_add">ADD CROP</a></li>
            <li><a href="/AgriERP/?cropregion_show">SHOW ALL CROP</a></li>
          </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="fa fa-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="fa fa-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<br /><h3>SHOW FARMER</h3><hr/><br />
<table>
	<tr>
		<td><b>NAME</b></td>
		<td><b>PHONE</b></td>
		<td><b>DISTRICT</b></td>
		<td colspan="2"></td>
	</tr>
	<?php
		foreach($farmerList as $farmer){
			if($farmer['Role']!='admin'){
				echo"<tr>
						<td>$farmer[Name]</td>
						<td>$farmer[Phone]</td>
						<td>$farmer[District]</td>
						<td><a href='/AgriERP/?farmer_edit&id=$farmer[FarmerId]'>EDIT</a></td>
						<td><a href='/AgriERP/?farmer_delete&id=$farmer[FarmerId]'>DELETE</a></td>
					</tr>";
				}
		}
	?>	
</table>

<br /><hr />
<a href="/AgriERP/?home_admin">BACK TO ADMIN PANEL</a>
<br />