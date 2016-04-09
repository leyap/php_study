<?php
echo "class<br/>";
class myClass {
	public$name = 'lisper';
	public$age = 10;

	function myClass($n,$a) {
		$this->name = $n;
		$this->age = $a;
	}
	function sayHello() {
		echo "hello ".$this->name."<br/>";
	}
	function setName($n) {
		$this->name = $n;
	}
}

$obj1 = new myClass("jack", 20);
echo "age:".$obj1->age."<br/>name:$obj1->name<br/>";
if (is_object($obj1)) {
	echo "obj1 is a class<br/>";
}
$obj1->setName("Tom");
$obj1->sayHello();



class childClass extends myClass {
	public$childName = "child";
}
$obj2 = new childClass("jack", 20);
echo "childName: $obj2->childName<br/>";
$obj2->sayHello();
?>
