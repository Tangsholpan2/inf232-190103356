<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<style>
body{
	background:black;
	color:white;
	font-size:30px;
}
div{
	background:red;
}
</style>

<?php

function isPalindrome($n) {
	$rev = strrev($n);
	return $rev==$n;
}

$sum = 0;
$arr = array(3,4,5);

for($i = 0; $i<count($arr); $i++){
	$sum = $sum + pow($arr[$i],3);
}
echo $sum . "</br>";




$inches = 324;
function inches_to_feet($inches){
	if($inches<12){
		return 0;
	}
	else{
		return $inches/12;
	}
}
echo inches_to_feet($inches);


echo "Hello world" . "</br>";

$x = 7;
if($x%2==0){
	echo 'Not odd number';
}
else{
	echo 'Odd number' . "</br>";
}

$y = 5;
$y ='Tangsholpan' . "</br>";

echo $y;

$z = 0;

function test(){
static $z;
$z++;
echo $z . "</br>";
}

test();
test();
test();
test();
test();
test();

function plus($num1,$num2){
	echo 'The sum of two number ';
	echo $num1 + $num2 . "</br>";
}

function minus($num1,$num2){
	echo 'The subtraction of two number ';
	echo $num1 - $num2 . "</br>";
}

function multiply($num1,$num2){
	echo 'The multiply of two number ';
	echo $num1 * $num2 . "</br>";
}


$number1 = 5;
$number2 = 10;
plus($number1,$number2);
minus($number1,$number2);
multiply($number1,$number2);

for($i = 0; $i<10;$i++){
	echo $i . "</br>";
	echo 'Tangsholpan' . "</br>";
}

$num = 0;

function inc(){
	static $num;
	$num++;
	echo $num . "</br>";
}

inc();
inc();
inc();
echo $num;



?>


</div>
</body>
</html>