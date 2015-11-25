<?php
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

<div style="width: 100%; background: url(img/top.png); height: 47px; margin-top: -7px" >
<h3 style="color:red; margin: 0 auto;padding: 10px; width: 700px;">Կայքը գտնվում է պատրաստման փուլում։ This website is under construction.</h3>
</div>
<?php include ('datebase/sqlconfig.php');
include_once "includes/menu.php";
?>
