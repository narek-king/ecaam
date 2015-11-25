<?
@session_start();
 $_SESSION['url'] = "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];

 if(isset($_SESSION['lang'])){$lang = $_SESSION['lang'];}
else {$lang = "arm";}

?>
<!doctype html>
<html>
<head>

<META http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="js/js.js"></script>
<LINK rel="stylesheet" href="css/menu.css" TYPE="text/css" />
<title>ECA.am</title>



	<link rel="stylesheet" href="css/css/global.css" />
	

	<script src="js/js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: false,
				preloadImage: 'img/img/loading.gif',
				play: 5000,
				pause: 1000,
				hoverPause: true,
				generatePagination: false,
			});
			
			$('#slides').hover(function() {
		$('.slide_text').slideDown(60);
	}, function() {
		$('.slide_text').slideUp(60);
	});
			
		});
	</script>



		<script src="js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
                <link rel="stylesheet" href="css/news_slide.css" />

<style>
.slide_text{padding:10px;width:560px; height:40px;background:rgba(0, 0, 0, 0.48); position:absolute; z-index:999990;color:white;bottom:0px; overflow:hidden; display:none;}

</style>
<!-- big_slide header end -->

<!--[if IE]>
<style type="text/css">
img{border:0px;}
.fb-like-box{
	margin-left: 0px;
	
}
</style>
<![endif]-->


		<script type="text/javascript">
			$(function() {
				$('#carousel').carouFredSel({
					items: 5,
					scroll: {
						duration: 2500,
						timeoutDuration: 4500,
						easing: 'elastic'
					}
				});
			});
		</script> 

</head>
<body style="margin:0; background: url(img/bg.png) repeat-x bottom">


<script>
$(document).ready(function(){

$('.mydiv1').hover(function() {
		$('.mydiv1').slideDown(100);
	}, function() {
		$('.mydiv1').slideUp(100);
	});

$("#1").hover(function(){
$('.mydiv1').slideDown(100);
$(".mydiv2").slideUp(70);
$(".mydiv3").slideUp(70);
$(".mydiv4").slideUp(70);
$(".mydiv5").slideUp(70);
});

$('.mydiv2').hover(function() {
		$('.mydiv2').slideDown(100);
	}, function() {
		$('.mydiv2').slideUp(100);
	});

$("#2").hover(function(){
$(".mydiv2").slideDown(100);
$(".mydiv1").slideUp(70);
$(".mydiv3").slideUp(70);
$(".mydiv4").slideUp(70);
$(".mydiv5").slideUp(70);
});


$('.mydiv3').hover(function() {
		$('.mydiv3').slideDown(100);
	}, function() {
		$('.mydiv3').slideUp(100);
	});

$("#3").hover(function(){
$(".mydiv3").slideDown(100);
$(".mydiv1").slideUp(70);
$(".mydiv2").slideUp(70);
$(".mydiv4").slideUp(70);
$(".mydiv5").slideUp(70);
});


$('.mydiv4').hover(function() {
		$('.mydiv4').slideDown(100);
	}, function() {
		$('.mydiv4').slideUp(100);
	});


$("#4").hover(function(){
$(".mydiv4").slideDown(100);
$(".mydiv2").slideUp(70);
$(".mydiv3").slideUp(70);
$(".mydiv1").slideUp(70);
$(".mydiv5").slideUp(70);
});

$('.mydiv5').hover(function() {
		$('.mydiv5').slideDown(100);
	}, function() {
		$('.mydiv5').slideUp(100);
	});

$("#5").mousemove(function(){
$(".mydiv5").slideDown(100);
$(".mydiv2").slideUp(70);
$(".mydiv3").slideUp(70);
$(".mydiv4").slideUp(70);
$(".mydiv1").slideUp(70);
});
$(".link").mousemove(function(){
$(".mydiv5").slideUp(70);
$(".mydiv2").slideUp(70);
$(".mydiv3").slideUp(70);
$(".mydiv4").slideUp(70);
$(".mydiv1").slideUp(70);
});
/*
$('*').mouseup(function(){
$(".mydiv5").css("display","none");
$(".mydiv2").css("display","none");
$(".mydiv4").css("display","none");
$(".mydiv1").css("display","none");
});*/
});
</script>
<? include ('datebase/sqlconfig.php'); ?>
<div style="width: 100%; background: url(img/top.png); height: 47px; margin-top: -7px" ></div>
<div id="menucont" style="width:1000px;height:100%; margin:auto">
<ul id="menu" style="overflow:hidden;margin-top:0px">

	<?php

	
	$query= mysql_query("SELECT * FROM info");
	$i=1;
	for($i; $row=mysql_fetch_array($query);$i++){
	if($i!=6 && $i!=7){
	echo '<a href=# id='.$i.' onclick="return false"><li>'.$row[$lang].'</li></a>';
	}
	else{
	  if($row['arm']!="Սլայդ" && $row['arm']!="Slide"){
	echo '<a href="'.$row['link'].'"><li class="link">'.$row[$lang].'</li></a>';
	  }
	}
	}

	?>
	</ul>
	
		<div id="mydiv" class="mydiv1" style="position:absolute">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=1");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch[$lang])){
        echo "<a href='".$fetch['link']."'><li>".$fetch[$lang]."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
    <div id="mydiv" class="mydiv2" style="position:absolute; margin-left:160px">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=2");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch[$lang])){
        echo "<a href='".$fetch['link']."'><li>".$fetch[$lang]."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
	
	
		<!-- churches -->
	
	    <div id="mydiv" class="mydiv3" style="position:absolute;margin-left:320px">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=3");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch[$lang])){
        echo "<a href='".$fetch['link']."'><li>".$fetch[$lang]."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
	<!-- churches -->
	
	
    <div id="mydiv" class="mydiv4" style="width:222px;position:absolute;margin-left:450px">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=4");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch[$lang])){
        echo "<a href='".$fetch['link']."'><li>".$fetch[$lang]."</li></a>";
    }
    }
    echo "</ul>";
    ?>
    </div>
	
	

	
	
    <div id="mydiv" class="mydiv5" style="position:absolute;margin-left:634px">
    <?
    $sql=mysql_query("SELECT * FROM submenu WHERE menuid=5");
        echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch[$lang])){
        echo "<a href='".$fetch['link']."'><li>".$fetch[$lang]."</li></a>";
    }
    }
    echo "</ul>";
	
	
	
	
	if($lang=="eng"){
$more="More";
$nextp="Next";
$prevp="Previous";
}else{
$more="Ավելին";
$nextp="Հաջորդ";
$prevp="Նախորդ";
}
	
	
	
    ?>



    </div>
	<div style="width: 60px;height: 35px;float: right;margin-right: 10px;color: #51321c">
			<a href="arm.php"><? if($lang=="arm"){ echo('<span style="color:#51321c">arm</span>'); }else{ echo('<span style="color:#c5a370">arm</span>');} ?></a> | 
			<a href="eng.php" ><? if($lang=="eng"){ echo('<span style="color:#51321c">eng</span>'); }else{ echo('<span style="color:#c5a370">eng</span>');} ?></a>
			</div>
		<a href="index.php"><div id="header" style="width:100%;height:350px; background:url(img/header.png) no-repeat;overflow:hidden">

	<!--		<a href="index.php"><div style="margin-top:70px;width:350px;height:190px;overflow:hidden;float:left"></div></a>	-->
	<!--		<a href="index.php"><img style="float:left;margin-top:210px; margin-left:60px" src="img/text<? echo $lang;?>.png" /></a>-->
			
<div id="bigslide" style="max-width:698px; height:280px; float:right;margin-top:-20px;">
  
   <!-- BEGIN -->
    
<!--	<div id="container">
		<div id="example">
			<div id="slides">
				<div class="slides_container">
				<?
				
$query4= mysql_query("SELECT * FROM slide");
 while($pic= mysql_fetch_array($query4)){
 echo '<a href="'.$pic['link'].'" target="_blank"><div class="slide_text">'.mb_substr($pic['text'],0,135,"utf8").'</div><img src="images/slide/'.$pic['image'].'" width="570" height="270" alt="slide"></a>';
 }
 ?>				

				</div>
			</div>
		</div>
	</div>-->

    <!-- END -->

  
</div>
			</div></a>
		
	
			





</div>