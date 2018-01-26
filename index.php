<?php
date_default_timezone_set('Europe/Amsterdam');
$time = date("H:i");
$morning = "6:00";
$afternoon = "12:00";
$evening = "18:00";
$night = "00:00";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <?php
            if($time > $morning && $time < $afternoon){
                echo "<body style= background-image:url('backgrounds/morning.png')>";
                echo "<p>Goede morgen!</p>";
                echo "<p>Het is nu: $time</p>";
            } else if ($time > $afternoon && $time < $evening){
                echo '<body style= background-image:url("backgrounds/afternoon.png")>';
                echo "<p>Goede middag!</p>";
                echo "<p>het is nu: $time";
            } else if ($time > $evening && $time < $night){
                echo '<body style= background-image:url("backgrounds/evening.png")>';
                echo "<p>Goede avond!</p>";
                echo "<p>het is nu: $time";
            } else if ($time > $night && $time < $morning){
                echo '<body style= background-image:url("backgrounds/night.png")>';
                echo "<p>Goede nacht!</p>";
                echo "<p>het is nu: $time";
            }

        ?>
</body>
</html>