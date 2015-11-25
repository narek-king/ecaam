<?
include "header.php";
?>


<div id="bg2" style="background-image:url(img/bg2.png); width:1000px; height:200px; margin-top:-16px;margin-left:auto;margin-right:auto">
<!--START SMALL SLIDER-->  

	<div id="wrapper">
		<div id="carousel">
<?
$sql=mysql_query("SELECT * FROM newscontent ORDER BY visited DESC");
$i=1;
while($fetch=mysql_fetch_array($sql)){
$i++;
$img="images/news/img/".$fetch['image'];
$title=$fetch['title_'.$lang];
$symbol1=strlen($title);
$id=$fetch['id'];
if($symbol1>25){
$title=mb_substr($title, 0,25, 'utf8')."...";
}
$short=$fetch['short_text_'.$lang];
$symbol2=strlen($short);
if($symbol2>40){
$short=mb_substr($short, 0,40, 'utf8')."...";
}
mb_substr($popox, 0,50, 'utf8');
if($i<7){
                	echo'<div id="blue">
					<img src="'.$img.'" alt="blue_muffin" width="110" height="100" />
					<h4><a href="more.php?id='.$id.'&abc=newscontent">'.$title.'</a></h4>
					<p>'.$short.'</p>
			</div>';
}
}
?>
		</div>
	</div>
<!--END SMALL SLIDER-->
<!--

		<div style="width:300px;height:200px;position:absolute;margin-left:700px;">
		<?
		$query= mysql_query("SELECT * FROM homecontent WHERE id=14");
		$res = mysql_fetch_array($query);
		echo '<iframe width="300" height="200" src="http://www.youtube.com/embed/'.$res['videourl'].'?rel=0" frameborder="0" allowfullscreen></iframe>';
		?>
		</div>	
-->
	</div>



<div id="content" style="width:1000px;height:100%;text-align:center; margin:auto">

<table border="1" cellspacing="0" style="text-align:center;margin-top:20px">
<tr><td>Title 1</td><td>Title 2</td><td>Title 3</td></tr>
<tr height="300"><td>
<a href="map.php"><img width="250" src="images/map.png" /></a>
	</td>
<td width="305">
	<iframe style="position:absolute;margin-top:-100px" width="300" height="160" src="http://www.youtube.com/embed/8tHOVVgGkpk" frameborder="0" allowfullscreen></iframe>

</td>
<td>Աղոթքի Խնդրանք</td>
</tr>

</table>


</div>
<?
include_once "footer.php";
?>