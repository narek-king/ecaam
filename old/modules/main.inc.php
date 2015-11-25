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
define ('TITLE', "title-".$lang);
?>
			<div id="site-content-left">
			<h1><?echo $langu['MAIN_NEW_BUILDING'];?></h1>
			<div id="site-content-dproc">
			<div id="slider">
				<div class="slide-img"><img src="images/school/arm/slide-1.jpg" /></div>
				<div class="slide-text">
				<?echo $langu['TEXT_HOME'];?>
                </div>
				<div class="clear"></div>
				<div class="slide-read-more">
					<a href="index.php?p=dprocashinutyun"><? echo $langu['MORE'];?></a>
				</div>
			</div>
			</div>
			</div>
			<div id="site-content-right">
           <div class="fb-page" data-href="https://www.facebook.com/AvedisianSchool" data-width="280"
            data-height="500" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
			<div id="embeddedExample" style="display: none;">
            
          <div id="embeddedCalendar" style="margin-left: auto; margin-right: auto">
          </div>
        </div>
			<div id="site-content-ushadrutyun" style="display: none;">
            <?php
            $text='text-'.$lang;
            $query_main_ushadrutyun_arm = mysql_query("SELECT * FROM `ushadrutyun` WHERE 1");
            while($result_ushadrutyun_main_arm = mysql_fetch_array($query_main_ushadrutyun_arm)){
                print $result_ushadrutyun_main_arm[$text];
            }
            ?>
			</div>
			</div>
			
			<div id="site-content-news">
            <span class="text-ushadrutyun">
			<h1><?echo $langu['MAIN_NEWS'];?></h1>
                </span>
			<div id="site-content-grey-news">
			<?php
            $title='title-'.$lang;
            $text='text-'.$lang;
            $query_main_news_arm = mysql_query("SELECT * FROM  `content` WHERE category='news' order by `data` desc limit 4");
                while($result_news_main = mysql_fetch_array($query_main_news_arm)){
                    print "<div class='site-news-grey'><div class='news'><div class='news-img'><img src='images/content/".
                    $result_news_main['image']."'/></div><div class='news-text'>".$result_news_main[$text].
                    "</div></div><div class='news-read-more'><a href='index.php?p=".$result_news_main['category'].
                    "&id=".$result_news_main['id']."'>".$langu['MORE']."</a></div></div>
					
					";
                }
            ?>
			<div class="clear"></div>
			</div>
			<div id="facebook-like">
			<div class="fb-like" data-href="https://www.facebook.com/AvedisianSchool" data-send="false" data-layout="box_count" data-width="100" data-show-faces="true" data-font="lucida grande"></div>
			</div>
			<div class="clear"></div>
			</div>
			<div id="site-content-social" style="display: none;">
			<a id="social-twitter" href="#"></a>
			<a id="social-youtube" href="#"></a>
			<a id="social-facebook" href="#"></a>
			<a id="social-google" href="#"></a>
			<a id="social-dasaran" href="#"></a>
			</div>
			<div class="clear"></div>