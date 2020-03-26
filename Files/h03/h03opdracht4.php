<!DOCTYPE html>
<head>
    <title>h03 Opdracht 2</title>
</head>
<body>


<?php
$bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");

foreach ($bomen as $boom) {
    echo "<img src='../Plaatjes/Bomen/".$boom."'>";
}
?>
</body>
</html>


