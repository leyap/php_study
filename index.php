<?php 
echo "<h1>hello world</h1>";
$test;
echo "is NULL?".(is_null($test) ? "yes" : "no");
echo "<br/>";
$test = 1;
echo "is NULL?".(is_null($test) ? "yes" : "no");
echo "<br/>";
echo "is number?".(is_integer($test) ? "yes" : "no");
echo "<br/>";
echo "is string?".(is_string($test) ? "yes" : "no");
?>
