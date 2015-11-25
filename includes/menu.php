<div id="menucont" style="width:1000px;height:100%; margin:auto">
    <ul id="menu" style="overflow:hidden;margin:0px;margin-bottom: 5px;">

        <?php


        $query = mysql_query("SELECT * FROM info");
        $i = 1;
        for ($i; $row = mysql_fetch_array($query); $i++) {
            if ($i != 6 && $i != 7) {
                echo '<a href=# id=' . $i . ' onclick="return false"><li>' . $row[$lang] . '</li></a>';
            } else {
                if ($row['arm'] != "Սլայդ" && $row['arm'] != "Slide") {
                    echo '<a href="' . $row['link'] . '"><li class="link">' . $row[$lang] . '</li></a>';
                }
            }
        }

        ?>
    </ul>

    <div id="mydiv" class="mydiv1" style="position:absolute">
        <?php
        $sql = mysql_query("SELECT * FROM submenu WHERE menuid=1");
        echo "<ul class='sub'>";
        while ($fetch = mysql_fetch_array($sql)) {
            if (!empty($fetch[$lang])) {
                echo "<a href='" . $fetch['link'] . "'><li>" . $fetch[$lang] . "</li></a>";
            }
        }
        echo "</ul>";
        ?>
    </div>
    <div id="mydiv" class="mydiv2" style="position:absolute; margin-left:160px">
        <?php
        $sql = mysql_query("SELECT * FROM submenu WHERE menuid=2 ORDER BY `id`");
        echo "<ul class='sub'>";
        while ($fetch = mysql_fetch_array($sql)) {
            if (!empty($fetch[$lang])) {
                echo "<a href='" . $fetch['link'] . "'><li>" . $fetch[$lang] . "</li></a>";
            }
        }
        echo "</ul>";
        ?>
    </div>


    <!-- churches -->

    <div id="mydiv" class="mydiv3" style="position:absolute;margin-left:320px">
        <?php
        $sql = mysql_query("SELECT * FROM submenu WHERE menuid=3");
        echo "<ul class='sub'>";
        while ($fetch = mysql_fetch_array($sql)) {
            if (!empty($fetch[$lang])) {
                echo "<a href='" . $fetch['link'] . "'><li>" . $fetch[$lang] . "</li></a>";
            }
        }
        echo "</ul>";
        ?>
    </div>
    <!-- churches -->


    <div id="mydiv" class="mydiv4" style="width:222px;position:absolute;margin-left:450px">
        <?php
        $sql = mysql_query("SELECT * FROM submenu WHERE menuid=4");
        echo "<ul class='sub'>";
        while ($fetch = mysql_fetch_array($sql)) {
            if (!empty($fetch[$lang])) {
                echo "<a href='" . $fetch['link'] . "'><li>" . $fetch[$lang] . "</li></a>";
            }
        }
        echo "</ul>";
        ?>
    </div>


    <div id="mydiv" class="mydiv5" style="position:absolute;margin-left:634px">
        <?php
        $sql = mysql_query("SELECT * FROM submenu WHERE menuid=5");
        echo "<ul class='sub'>";
        while ($fetch = mysql_fetch_array($sql)) {
            if (!empty($fetch[$lang])) {
                echo "<a href='" . $fetch['link'] . "'><li>" . $fetch[$lang] . "</li></a>";
            }
        }
        echo "</ul>";


        if ($lang == "eng") {
            $more = "More";
            $nextp = "Next";
            $prevp = "Previous";
        } else {
            $more = "Ավելին";
            $nextp = "Հաջորդ";
            $prevp = "Նախորդ";
        }


        ?>


    </div>
    <div
        style="width: 60px;float: right;margin-right: 10px;color: #51321c;background: #fff;position: absolute;margin-left: 922px;margin-top: 9px;padding: 1px 1px 4px 5px;">
        <a href="arm.php"><?php if ($lang == "arm") {
                echo('<span style="color:#51321c">arm</span>');
            } else {
                echo('<span style="color:#c5a370">arm</span>');
            } ?></a> |
        <a href="eng.php"><?php if ($lang == "eng") {
                echo('<span style="color:#51321c">eng</span>');
            } else {
                echo('<span style="color:#c5a370">eng</span>');
            } ?></a>
    </div>
    <?php
    if ($lang == "eng") {
        $img = "header_eng";
    } else {
        $img = "header_arm";
    }
    ?>
    <a href="index.php">
        <div id="header" style="width:100%;height:265px; background:url(img/<?= $img ?>.png) no-repeat;overflow:hidden">

            <!--		<a href="index.php"><div style="margin-top:70px;width:350px;height:190px;overflow:hidden;float:left"></div></a>	-->
            <!--		<a href="index.php"><img style="float:left;margin-top:210px; margin-left:60px" src="img/text<? echo $lang; ?>.png" /></a>-->

            <div id="bigslide" style="max-width:698px; height:280px; float:right;margin-top:-20px;">


            </div>
        </div>
    </a>


</div>