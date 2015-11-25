<?
include "header.php";
if($lang=='eng'){
$content="CONTACT US";
$name="Name";
$first_name="Last name";
$email="Email";
$phone="Phone";
$message="Message";
}else{$content="Հետադարձ կապ";
$v="*-ով նշված տողերը պարտադիր են";
$name="Անուն";
$first_name="Ազգանուն";
$email="Էլ-փոստ";
$phone="Հեռախոս";
$message="Նամակ";
}
?>
<meta charset="utf8" />
<style>
#name,#last_name,#email,#phone,#message{
width:300px;
outline:none;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
-ie-border-radius:5px;
-o-border-radius:5px;
}
textarea#message{
height:100px;
resize: none;
border-style:inline;
}
#name,#last_name,#email,#phone,#message{background:#F2F2F2;}
</style>
<div id="content" style="width:1000px;height:100%;text-align:center; margin:auto">
<br>
<div id="mess_send" style="position:absolute;"></div>

<table>
<tr><td></td></td><td></td><td rowspan="3" width="650" align="right">

<iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?ie=UTF8&amp;hl=ru&amp;oe=UTF8&amp;msa=0&amp;msid=212940897875802397026.0004d52155f9e6adbde06&amp;t=m&amp;ll=40.191524,44.511178&amp;spn=0,0&amp;output=embed"></iframe><br />

</td></tr>
<tr>
<td valign="top" style="height:200px;padding:20px;">


</td>
<td>
<form method="post" action="process.php">
<table style="text-align:right;">
<tr>
<td>*</td>
<td><input placeholder="<? echo $name; ?>" type="text" id="name" /></td>
</tr>
<tr>
<td>*</td>
<td><input placeholder="<? echo $first_name ?>" type="text" id="last_name" /></td>
</tr>
<tr>
<td>*</td>
<td><input placeholder="<? echo $email ?>" type="text" id="email" /></td>
</tr>
<tr>
<td></td>
<td><input placeholder="<? echo $phone ?>" type="text" id="phone" /></td>
</tr>
<tr>
<td valign="top">*</td>
<td><textarea placeholder="<? echo $message ?>" id="message"></textarea></td>
</tr>
<tr>

<td colspan="2"><h6 style="color:red;float:left"><?php echo $v; ?></h6><input type="button" value="Delete" onclick = "changeValue()" /><input type="button" value="Send" id="send" /></td>
</tr>
</table>
</form>
</td>
<td></td>
</tr>
</table>

<script type = "text/Javascript" >
function changeValue() {
var name = document.getElementById('name');
var first_name = document.getElementById('last_name');
var email = document.getElementById('email');
var phone = document.getElementById('phone');
var message = document.getElementById('message');
	
name.value = "";
last_name.value = "";
email.value = "";
phone.value = "";
message.value = "";
}
</script>

<script>
$(document).ready(function(){
$("#send").click(function(){
var name=$("#name").val();
var last_name=$("#last_name").val();
var email=$("#email").val();
var phone=$("#phone").val();
var message=$("#message").val();

$.ajax({
type:"POST",
url:'process.php',
data: {name:name,last_name:last_name,email:email,phone:phone,message:message},
success:function(html)
{
$("#mess_send").html(html);
}
});
var mail = document.getElementById('email');
mail.value = "";
});
});

$("#send").click(function(){

});
</script>
<script>
$("input").focusin(function() {
  $(this).css("background","rgb(255,255,255)");
});
$("input").focusout(function() {
  $(this).css("background","#F2F2F2");
});
$("textarea").focusin(function() {
  $(this).css("background","rgb(255,255,255)");
});
$("textarea").focusout(function() {
  $(this).css("background","#F2F2F2");
});
</script>
</div>
<?
include_once "footer.php";
?>