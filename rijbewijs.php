<?php
$a = 16.5;

echo "Hoe oud ben je?";
echo "\n";

$line = readline();

if ($line < $a) {
echo "Helaas, je mag nog niet beginnen met rijlessen";
} else if ($line >= $a){
echo "Je mag beginnen met rijlessen!";
}
?>