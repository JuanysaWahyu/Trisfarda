<?php
$nim="0411500400";
$nama= 'Chotimatul Musyarofah';
$umur = 23;
$nilai = 82.25;
$status = TRUE;
echo "NIM :" . $nim . "<br>";
echo "NAMA :$nama<br>";
print "Umur :" . $umur;print "<br>";
printf("Nilai : %.3f<br>",$nilai);
if($status)
echo "Status : Aktif";
else
echo "Status : Tidak Aktif";
?>

<p>
	<?php
$a=10;
$b=5;
$c=6;
$d=11;
$e=13;
$f=4;
echo "10 ~ 5 ~", $a + $b /2, "<br>";
echo "10 ~ 6 ~", ($a + $c - 9) /2, "<br>";
echo "10 ~ 6 ~", ($a + $c - 9) /2, "~", ($c -($a + $c - 9) /2 ) *2 *$a, "<br>";
echo "11 ~ 6 ~", ($d + $c) / -2 +2, "~", (($d + $c) /-2 +2) * -2 -7 +100, "<br>";
echo "11 ~ 5 ~", ($b + $c)*-2+1+10.5, "<br>";
echo "13 ~ 4 ~", ($e + $f) / -2 +2, "<br>";
echo "13 ~ 4 ~", ($a + $c) / -2 +2.44, "<br>";
echo "12 ~ 3 ~", ($a + $c) / -2 +2.44, "<br>";
echo "11 ~ 4 ~", ($d + $c) / -2 +3, "~", ($a+$f)/2-1, "<br>";
	?>