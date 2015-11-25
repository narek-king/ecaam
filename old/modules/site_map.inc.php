<?php # Script 2.5 - main.inc.php

/* 
 *  This is the main content module.
 *  This page is included by index.php.
 */

// Redirect if this page was accessed directly:
if (!defined('BASE_URL')) {

    // Need the BASE_URL, defined in the config file:
    require('../includes/config.inc.php');
    
    // Redirect to the index page:
    $url = BASE_URL . 'index.php';
    header ("Location: $url");
    exit;
    
} // End of defined() IF.

?>
<div class="pages-content-top"></div>
<div class="pages-content-center">
    <?if ($p=='site_map' && !isset($_GET['contact'])){?>
        <div class="sitemap-left">
				<ul class="page-name">
					<li><h1><?echo $langu['MENUE_HOME'];?></h1>
					<ul class="pages">
					<li><?echo $langu['MENUE_HOME'];?></li>
					</ul>
					</li>
				</ul>
                <ul class="page-name">
					<li><h1><?echo $langu['MENUE_ABOUT'];?></h1>
					<ul class="pages">
     							<li><a href="index.php?p=history"><? echo $langu['MENUE_ABOUT_HISTORY'];?></a></li>
								<li><a href="index.php?p=vision"><? echo $langu['MENUE_ABOUT_VISION'];?></a></li>
								<li><a href="index.php?p=value"><? echo $langu['MENUE_ABOUT_VALUE'];?></a></li>
								<li><a href="index.php?p=our-mission"><? echo $langu['MENUE_ABOUT_MISSION'];?></a></li>
								<li><a href="index.php?p=foundation"><? echo $langu['MENUE_ABOUT_FOUNDATION'];?></a></li>
								<li><a href="index.php?p=our-achievements"><? echo $langu['MENUE_ABOUT_ACHIEVMENTS'];?></a></li>
								<li><a href="index.php?p=our-team"><? echo $langu['MENUE_ABOUT_TEAM'];?></a></li>
								<li><a href="index.php?p=our-recommendations"><? echo $langu['MENUE_ABOUT_RECOMENDATIONS'];?></a></li>
								<li><a href="index.php?p=licensing"><? echo $langu['MENUE_ABOUT_LICENSING'];?></a></li>
								<li><a href="index.php?p=financials"><? echo $langu['MENUE_ABOUT_FINANCIALS'];?></a></li>
								<li><a href="index.php?p=cooperation"><? echo $langu['MENUE_ABOUT_COOPERATION'];?></a></li>
							</ul>
					</li>
				</ul>
				<ul class="page-name">
					<li><h1><? echo $langu['MENUE_teachers'];?></h1>
					<ul class="pages">
								<li><a href="index.php?p=teacher-schedule"><? echo $langu['MENUE_Teacher_schedule'];?></a></li>
								<li><a href="index.php?p=homeroom-teachers"><? echo $langu['MENUE_Homeroom_teachers'];?></a></li>
								<li><a href="index.php?p=exemplary-lessons"><? echo $langu['MENUE_Exemplary_lessons'];?></a></li>
								<li><a href="index.php?p=teacher-training"><? echo $langu['MENUE_Teacher_training'];?></a></li>
							</ul>
					</li>
				</ul>
				<ul class="page-name">
					<li><h1><? echo $langu['MENUE_Pupils'];?></h1>
					<ul class="pages">
								<li><a href="index.php?p=pupils-schedule"><? echo $langu['MENUE_Pupils_schedule'];?></a></li>
								<li><a href="index.php?p=books"><? echo $langu['MENUE_Pupils_textbook'];?></a></li>
								<li><a href="index.php?p=groups"><? echo $langu['MENUE_Pupils_Groups'];?></a></li>
								<li><a href="index.php?p=clubs"><? echo $langu['MENUE_Pupils_Clubs'];?></a></li>
								<li><a href="index.php?p=extracurricular-activities"><? echo $langu['MENUE_Pupils_activities'];?></a></li>
								<li><a href="index.php?p=fakulty-lessons"><? echo $langu['MENUE_Pupils_Fakulty'];?></a></li>
								<li><a href="index.php?p=longday-groups"><? echo $langu['MENUE_Pupils_Longday_groups'];?></a></li>
								<li><a href="index.php?p=wall-paper"><? echo $langu['MENUE_Pupils_Wallpaper'];?></a></li>
								<li><a href="index.php?p=pupil-works"><? echo $langu['MENUE_Pupils_works'];?></a></li>
								<li><a href="index.php?p=literature"><? echo $langu['MENUE_Pupils_Literature'];?></a></li>
				</ul>
					</li>
				</ul>
			</div>
			<div class="sitemap-right">
				<ul class="page-name">
					<li><h1><? echo $langu['MENUE_Graduates'];?></h1>
					<ul class="pages">
								<li><a href="index.php?p=about-graduates"><? echo $langu['MENUE_Graduates_About graduates'];?></a></li>
								<li><a href="index.php?p=reviews"><? echo $langu['MENUE_Graduates_Reviews'];?></a></li>
								</ul>
					</li>
				</ul>
				<ul class="page-name">
					<li><h1><? echo $langu['MENUE_News'];?></h1>
					<ul class="pages">
								<li><a href="index.php?p=news"><? echo $langu['MENUE_News_News'];?></a></li>
								<li><a href="index.php?p=in-school"><? echo $langu['MENUE_News_school'];?></a></li>
								<li><a href="index.php?p=extracurricular"><? echo $langu['MENUE_News_Extracurricular'];?></a></li>
								<li><a href="index.php?p=goverment"><? echo $langu['MENUE_News_Goverment'];?></a></li>
								<li><a href="index.php?p=community"><? echo $langu['MENUE_News_Community'];?></a></li>
								<li><a href="index.php?p=exterritorial"><? echo $langu['MENUE_News_Exterritorial'];?></a></li>
								<li><a href="index.php?p=visitors"><? echo $langu['MENUE_News_Visitors'];?></a></li>
								<li><a href="index.php?p=video"><? echo $langu['MENUE_News_Videos'];?></a></li>
								</ul>
					</li>
				</ul>
				<ul class="page-name">
					<li><h1><? echo $langu['MENUE_Kindergarten'];?></h1>
					<ul class="pages">
								<li><a href="index.php?p=tutors"><? echo $langu['MENUE_Kindergarten_Tutors'];?></a></li>
								<li><a href="index.php?p=kinder-groups"><? echo $langu['MENUE_Kindergarten_groups'];?></a></li>
								<li><a href="index.php?p=programms"><? echo $langu['MENUE_Kindergarten_Programms'];?></a></li>
			</ul>
					</li>
				</ul>
				<ul class="page-name">
					<li><h1><?echo $langu['MENUE_materials'];?></h1>
					<ul class="pages">
					<li><a href="index.php?p=materials"><?echo $langu['MENUE_materials'];?></li>
							
			</ul>

			

    </div>
			<div class="clear"></div>
<?} elseif ($_GET['contact']=='contact'){?>
    <form action="" method="post">
			<div id="form-notification"></div>
			<label id="label-name" for="name"><?echo $langu['contacts_name'];?></label>
			<input type="text" name="name" id="name" />
			<label id="label-email" for="name"><?echo $langu['contacts_mail'];?></label>
			<input type="text" name="email" id="email" />
			<label id="label-text" for="name"><?echo $langu['contacts_text'];?></label>
			<textarea name="text" id="text" ></textarea>
			<button id="form-submit"><?echo $langu['contacts_send'];?></button>
			</form><Br>
<?}?>
		</div>
		<div class="pages-content-fot"></div>
