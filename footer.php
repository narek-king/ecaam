<?
if($lang=="eng"){
$pray="Prayer Request";
$contact="Contact";
$addres="Address: C. Yerevan, 18 Baghramyan, <br /> &nbsp; &nbsp;  &nbsp;  &nbsp;  0019 Armenia";
$tel="Tel:";
$fax="Fax:";
$email="Email:";
}else{
$pray="Աղոթքի Խնդրանք";
$contact="Հետադարձ կապ";
$addres="Հասցե: Ք. Երևան, Բաղրամյան 18, <br /> &nbsp;  &nbsp;  &nbsp;  0019 Հայաստան";
$tel="Հեռ:";
$fax="Ֆաքս:";
$email="Էլ. փոստ:";
}
?>
<div id="footer" style="clear: both;overflow:hidden;width:100%;height:160px;background:#292219;margin:auto; bottom:0;">
<table width="1000px" align="center">
<tr><td width="350" style="border-right:1px solid silver">


<p style="padding:0 0 0 30px; color:silver"><b><font color="white"><? echo $contact;?></font></b><br><? echo $addres;?><br><? echo $tel;?> &nbsp; &nbsp; (+374-10) 54-35-76<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (+374-10) 54-35-78<br> <? echo $fax;?> (+374-10) 54-75-69 <br><font color="#FF9900"><? echo $email;?> eca@eca.am</font></p>

</td>
<td width="350" align="center" style="border-right:1px solid silver">
<div style="width:240px;color:silver;text-align:center">#</div>
<span style="cursor: pointer;color:#E6B800;" onclick="window.open('pray.php','','Toolbar=1,Location=0,Directories=0,Status=0,Menubar=0,Scrollbars=0,Resizable=0,Width=700,Height=600');"><img src="img/pray_icon.png" /><? echo $pray;?></span>
</td>
<td>
<div style="width:200px;height:60px;overflow:hidden;margin:auto"> 
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="200" height="80" id="NardiDemo" align="middle">
				<param name="movie" value="Webex Lil.swf">
				<param name="quality" value="high">
				<param name="bgcolor" value="#edb27b">
				<param name="play" value="true">
				<param name="loop" value="true">
				<param name="wmode" value="transparent">
				<param name="scale" value="showall">
				<param name="menu" value="true">
				<param name="devicefont" value="false">
				<param name="salign" value="">
				<param name="allowScriptAccess" value="sameDomain">
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="Webex Lil.swf" width="200" height="80">
					<param name="movie" value="Webex Lil.swf">
					<param name="quality" value="high">
					<param name="bgcolor" value="#edb27b">
					<param name="play" value="true">
					<param name="loop" value="true">
					<param name="wmode" value="transparent">
					<param name="scale" value="showall">
					<param name="menu" value="true">
					<param name="devicefont" value="false">
					<param name="salign" value="">
					<param name="allowScriptAccess" value="sameDomain">
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player">
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>


</div>
</td>
</tr>
</table>
</div>

</body>
</html>