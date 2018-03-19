<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<!--Teksto pakeitimas-->
<?php

include('./funkcijos/tekstoPakeitimai.php');
include ('./funkcijos/palendromas.php');

echo reverse("labas"). "<br>";
echo didziosios("labas"). "<br>";
echo mazosios("LABAS"). "<br>";

echo is_palendromas("aha"). "<br>". "<br>";

?>


</body>
</html>