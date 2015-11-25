<?
@session_start();
include ('datebase/sqlconfig.php');
if(isset($_SESSION['lang'])){$lang = $_SESSION['lang'];}
else {$lang = "arm";}
$sql=mysql_query("SELECT * FROM ul_hover_$lang");
if(isset($_POST['id'])){$id=$_POST['id'];}
if($id==1){
    echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['news'])){
        echo "<li>".$fetch['news']."</li>";
    }
    }
    echo "</ul>";
}
if($id==2){
    echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['about'])){
        echo "<li>".$fetch['about']."</li>";
    }
    }
    echo "</ul>";
}
if($id==4){
    echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['programs'])){
        echo "<li>".$fetch['programs']."</li>";
    }
    }
    echo "</ul>";
}
if($id==5){
    echo "<ul class='sub'>";
    while($fetch=mysql_fetch_array($sql)){
        if(!empty($fetch['materials'])){
        echo "<li>".$fetch['materials']."</li>";
    }
    }
    echo "</ul>";
}

?>