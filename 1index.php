<?
$popox="";
include "header.php";
if($lang=='eng'){
$church="Churches of Armenia";
}else{$church="Հայաստանի Եկեղեցիներ";}
?>


<div id="bg2" style="background-image:url(img/bg2.png); width:970px; margin-top:-16px;margin-left:auto;margin-right:auto;margin-bottom: 25px;">
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
$title=mb_substr($title, 0,100, 'utf8')."...";
}
$short=$fetch['short_text_'.$lang];
$symbol2=strlen($short);
if($symbol2>40){
$short=mb_substr($short, 0,40, 'utf8')."...";
}
mb_substr($popox, 0,50, 'utf8');
if($i<7){
                	echo'<div id="blue">
					<img src="'.$img.'" width="170" height="150" />
					<h5 style="margin-top: -20px"><a href="more.php?id='.$id.'&abc=newscontent">'.$title.'</a></h5>
					
			</div>';
}
}
?>
		</div>
	</div>
<!--END SMALL SLIDER-->


	

	</div>
	
	
	<!--	<div style="width:260px;height:200px;position:absolute;margin-left:740px;z-index:6">
		<?
		$query= mysql_query("SELECT * FROM homecontent WHERE id=14");
		$res = mysql_fetch_array($query);
	//	echo '<iframe   width="260" height="200" src="http://www.youtube.com/embed/'.$res['videourl'].'?rel=0" frameborder="0" allowfullscreen></iframe>';
		
		echo '<object width="260" height="200">
		<param name="movie" value="http://www.youtube.com/v/'.$res['videourl'].'?hl=ru_RU&amp;version=3"></param>
		<param name="allowFullScreen" value="true"></param>
		<param name="allowscriptaccess" value="always"></param>
		<param name="wmode" value="opaque"/>
		<embed wmode="opaque" src="http://www.youtube.com/v/'.$res['videourl'].'?hl=ru_RU&amp;version=3" type="application/x-shockwave-flash" width="260" height="200" allowscriptaccess="always" allowfullscreen="true"></embed>
		</object>';
		
		
		
		?>
		</div>-->


<div style="width:1000px;height:100%;text-align:center; margin:auto">

<!--<table class="index_tab" cellspacing="0" width="762px" style="display: inline-block">
<tr>
<td  class="shadow">
<div class="chmap"><? echo $church;?></div>
<a href="map.php" title="MAP"><img width="250" src="images/map.png" /></a>
</td>
<td  class="shadow">
<div class="chmap"><? echo $church;?></div>
<a href="map.php" title="MAP"><img width="250" src="images/map.png" /></a>
</td>
<td  class="shadow">
<div class="chmap"><? echo $church;?></div>
<a href="map.php" title="MAP"><img width="250" src="images/map.png" /></a>
</td>
</tr>
</table>-->

<div style="display:inline-block;width: 745px">

<?php
$query_block= mysql_query("SELECT * FROM `block` ORDER BY `id` ASC");
while($res_block = mysql_fetch_array($query_block)){
	echo('<div class="block">
			<div class="block_title">'.$res_block['title_'.$lang].'</div>
			<div class="block_content">'.$res_block['content_'.$lang].'</div>
			<div class="block_more"><a href="'.$res_block['url'].'">more>></a></div>
		</div>');
}
?>

</div>

 <div style="width: 234px;display: inline-block;vertical-align: top;background: #fff;padding: 8px;">
 <div style="width: 234px; margin-left: -6px;">
 <script>
  (function() {
    var cx = '007029770160842019606:jt5etua45sq';
    var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//webex.am/eca.am/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>	
 </div>
 <div style="width:234px;height:200px;position: relative;z-index:6">
		<?
		$query= mysql_query("SELECT * FROM homecontent WHERE id=14");
		$res = mysql_fetch_array($query);
	//	echo '<iframe   width="260" height="200" src="http://www.youtube.com/embed/'.$res['videourl'].'?rel=0" frameborder="0" allowfullscreen></iframe>';
		
		echo '<object width="234" height="180">
		<param name="movie" value="http://www.youtube.com/v/'.$res['videourl'].'?hl=ru_RU&amp;version=3"></param>
		<param name="allowFullScreen" value="true"></param>
		<param name="allowscriptaccess" value="always"></param>
		<param name="wmode" value="opaque"/>
		<embed wmode="opaque" src="http://www.youtube.com/v/'.$res['videourl'].'?hl=ru_RU&amp;version=3" type="application/x-shockwave-flash" width="234" height="180" allowscriptaccess="always" allowfullscreen="true"></embed>
		</object>';
		
		
		
		?>
		</div>
<!-- <div id="fb-root"></div> -->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_EN/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="fb-like-box" style="margin-top:-2px;" data-href="https://www.facebook.com/ecarmenia" data-width="234" data-height="307" data-show-faces="true" data-stream="false" data-header="true"></div>

</div>

</div>
<?
include_once "footer.php";
?>