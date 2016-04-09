<?php 
echo "<h1>hello world</h1>";
$test = 1.2;
echo $test;
echo "<br/>";
settype($test, "integer");
echo $test;
echo "<br/>";
$str = "12.34";
settype($str, 'float');
echo $str;
echo "<br/>";
settype($str, 'int');
echo $str;
echo "<br/>";
echo "1pm"+"20pm";
echo "<br/>";
$array1 = ['age'=>18, 'color'=>'blue'];
$array1['name'] = "lisper"; 
echo "myname: ".$array1["name"]."<br/>".$array1['color']."<br/>".$array1['age'];
//////////////////////////////////////
$array2 = [['name'=>"lisper",'age'=>19],['name'=>'tom','age'=>17],['name'=>'jack','age'=>18]];
echo "<br/>";
echo $array2[2]['name'];
//////////////////////////////////////
echo "<hr/>";
foreach ($array2 as $a) {
	while (list($k, $v) = each($a)) {
		echo "$k => $v<br/>";
	}
	echo "<hr/>";
}
?>
