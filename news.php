<?
include "header.php";

?>

<div id="content" style="width:1000px;height:100%; margin:auto">
<?
include ('datebase/sqlconfig.php');

//pagination



	$tableName='newscontent';		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 2;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT('*') as num FROM $tableName";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "news.php"; 	//your file name  (the name of this file)
	$limit = 6; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM   $tableName ORDER BY id DESC LIMIT $start, $limit ";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\" class='next'>$prevp</a>";
		else
			$pagination.= "<span class=\"disabled\">$prevp</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\" class='page'>$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\" style='color:black;'>$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\" style='color:silver'>$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\" style='color:silver'>1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\" style='color:silver'>2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\" style='color:black;'>$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\" style='color:silver'>$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\" style='color:black;'>$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\" style='color:silver'>$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\" class='next'>$nextp</a>";
		else
			$pagination.= "<span class=\"disabled\">$nextp</span>";
		$pagination.= "</div>\n";		
	}


	while($row=mysql_fetch_array($result)){
$image="images/news/img/".$row['image'];
$title=$row['title_'.$lang];
$short=$row['short_text_'.$lang];
$id=$row['id'];
echo "
<table width='100%' border='0'>
<tr>
<td style='width:130px;height:130px;padding:4px;'><img width='150' height='135' src='$image' /></td>
<td style='width:600px;height:130px;padding:4px;'>
<div style='width:100%;padding:4px;'><h2><a href='more.php?id=$id&abc=newscontent'>$title</a></h2></div>
<div style='width:100%;padding:4px;'>$short</div>
</td>
</tr>
<tr>
<td  style='height:30px;padding:4px;'>
<a href='more.php?id=$id&abc=newscontent' class='more' style='color:white' >$more</a>
</td>
<td></td>
</tr>
</table>
<hr>
<br />
";
}
	//pagination
	?>


<?echo $pagination;?>







</div>
<?
include_once "footer.php";
?>