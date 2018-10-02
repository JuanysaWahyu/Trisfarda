<?php
$operand1=$_POST['operandkiri'];
$operand2=$_POST['operandkanan'];
$Operator1=$_POST['Operator'];
if ($Operator1 == "+"){
	$hasil = $operand1+$operand2;
}
if ($Operator1 == "-"){
	$hasil = $operand1-$operand2;
}
if ($Operator1 == "/"){
	$hasil = $operand1/$operand2;
}
if ($Operator1 == "*"){
	$hasil = $operand1*$operand2;
}
if ($Operator1 == "%"){
	$hasil = $operand1%$operand2;
}
echo "Hasil = $hasil";
?>
