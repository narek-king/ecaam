<div style="width:1000px; height:100%;margin:auto">
<ul id="menu" style="overflow:hidden;margin-top:0px">
<a href="admin.php"><li style="min-width:40px"><img src="img/homeicon.png" height="27px"></li></a>
	<?php

	include ('sqlconfig.php');
	$query= mysql_query("SELECT * FROM info");
	$i=1;
	for($i; $row=mysql_fetch_array($query);$i++){
	if($i!=6 && $i!=7){
	echo '<a href=# id='.$i.' onclick="return false"><li>'.$row['arm'].'</li></a>';
	}
	else{
	
	if($row['arm']!="Հետադարձ կապ"){
	echo '<a href="'.$row['adminlink'].'"><li>'.$row['arm'].'</li></a>';}

	}
	
	}

	?>
<li id="config" style="min-width:40px;"><img src="img/images.png" /></li>
	</ul>
 <!--   <div id="update_password" style="width: 180px;height: 185px;padding:20px;float:right;background:url(img/forgot.png) no-repeat;position: absolute;z-index:100;margin-left:800px;display:none;">
    <form action="upd.php" method="post">
    <table>
    <tr><td><input type="text" name="oldpassword" /></td></tr>
    <tr><td><input type="text" name="newpassword" /></td></tr>
    <tr><td><input type="text" name="re_newpassword" /></td></tr>
    <tr><td><input type="submit" name="submit" /></td></tr>
    </table>
    </div>  -->
<div id="mydiv" class="mydiv1" style="position:absolute; z-index:5">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=1");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['arm'])){
        echo "<a href='".$fetch['adminlink']."'><li>".$fetch['arm']."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
	<div id="mydiv" class="mydiv2" style="position:absolute; z-index:5">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=2");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['arm'])){
        echo "<a href='".$fetch['adminlink']."'><li>".$fetch['arm']."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
	
	
	   <div id="mydiv" class="mydiv3" style="position:absolute; z-index:5">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=3");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['arm'])){
        echo "<a href='".$fetch['adminlink']."'><li>".$fetch['arm']."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
	
	
    <div id="mydiv" class="mydiv4" style="position:absolute; z-index:5">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=4");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['arm'])){
        echo "<a href='".$fetch['adminlink']."'><li>".$fetch['arm']."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
    <div id="mydiv" class="mydiv5" style="position:absolute; z-index:5">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=5");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['arm'])){
        echo "<a href='".$fetch['adminlink']."'><li>".$fetch['arm']."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
	</div>

<script>

$("#config").click(function(){
     $("#update_password").toggle();  
});
$("#update_password").click(function(){
     $("#update_password").show();  
});
$('body').mouseup(function(){
   $("#update_password").hide();  
});
</script>