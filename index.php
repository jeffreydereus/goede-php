<?php
date_default_timezone_set('America/Los_Angeles');
$time = date("H:i");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/global.css" rel="stylesheet" type="text/css">
    <title>Goede php</title>
</head>

        <?php
            if($time > "06:00" && $time < "12:00"){
                echo "<body style= background-image:url('backgrounds/morning.png') class='BG'>";
                echo "<p class='text1'>Goede morgen!</p>";
                echo "<p class='text2'>Het is nu: $time</p>";
                echo "<small id='small'>&#169 Jeffrey de Reus</small>";
            } else if ($time > "12:00" && $time < "18:00"){
                echo '<body style= background-image:url("backgrounds/afternoon.png") class="BG">';
                echo "<p class='text1'>Goede middag!</p>";
                echo "<p class='text2'>het is nu: $time";
                echo "<small id='small'>&#169 Jeffrey de Reus</small>";
            } else if ($time > "18:00" && $time < "23:59"){
                echo '<body style= background-image:url("backgrounds/evening.png") class="BG">';
                echo "<p class='text1'>Goede avond!</p>";
                echo "<p class='text2'>het is nu: $time";
                echo "<small id='small'>&#169 Jeffrey de Reus</small>";
            } else {
                echo '<body style= background-image:url("backgrounds/night.png") class="BG">';
                echo "<p class='text1'>Goede nacht!</p>";
                echo "<p class='text2'>het is nu: $time";
                echo "<small id='small'>&#169 Jeffrey de Reus</small>";
            }
        ?>
</html>
