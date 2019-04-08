<?php
$names = array("Patrick", "John", "Marie", "Claire", "Paul");
foreach ($names as $name) {
	if (strlen($name)>=2 && $name[0]=='P' && $name[1]=='a')
	{
		print "$name, ";
	}
}
?>

<?php
function sum($x, $y) {
	return $x + $y;
}
print(sum(5, 7));
print("\n");
function substract($a, $b) {
	return $a - $b;
}
print(substract(5, 7));
print("\n");
function multiply($c, $d) {
	return $c * $d;
}
print(multiply(10, 2));
print("\n");
function divide($e, $f) {
	return $e / $f;
}
print(divide(10, 2));
print("\n");
?>

<?php
class Calculator {
	public function sum($x, $y) {return $x + $y;}
	public function subtract($a, $b) {return $a - $b;}
	public function multiply($c, $d) {return $c * $d;}
	public function divide($e, $f) {return $e / $f;}
}


$calculator = new Calculator();
echo $calculator->sum(5, 7);
print("\n");
echo $calculator->subtract(8, 2);
print("\n");
echo $calculator->multiply(2, 5);
print("\n");
echo $calculator->divide(20, 4);
print("\n");
?>

