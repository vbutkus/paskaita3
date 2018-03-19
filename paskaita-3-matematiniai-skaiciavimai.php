<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<!--Matematiniai veiksmai-->
<?php

include('./funkcijos/matematiniaiOperatoriai.php');

echo '10+2='. suma(10,2). '<br>';
echo '10-2='. atimtis(10,2). "<br>";
echo '10*2='. daugyba(10,2). "<br>";
echo '10/2='. dalyba(10,2). "<br>";
echo '10%3='. liekana(10,3). "<br>";
echo '10^2='. kelimas_laipsniu(10,2). '<br>'. '<br>';

?>


<!--Ar pilnametis-->
<?php
$amzius=15;

if ($amzius>=21) {
    echo $amzius;
}

else {
    echo "nepilnametis". "<br>". "<br>";
}

?>


<!--Apvalinimas iki simtmecio-->
<?php

include ('./funkcijos/apvalinimas_iki_simtmecio.php');

echo suapvalint_iki_sitmecio(1949). '<br>';

echo suapvalint_iki_simtmecio2(1949). "<br>". "<br>";

?>

</body>
</html>