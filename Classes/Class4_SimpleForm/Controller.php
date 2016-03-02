<?php

include "Math.php";

$math = new Math();
echo $math->calculateCircleArea($_POST["radius"]);
