<?php

function testfunktion()
{
 echo "das ist das innere";
}

function testaddieren($i1, $i2)
{
 $ergebnis = $i1 + $i2;
 return $ergebnis;
}

echo "Funktionstest";
echo testfunktion();
echo "Ergebnis:";
echo testaddieren(4,4);
?>