<?php
/*
$logo = file_get_contents('logo.txt');
echo $logo;

$save = 'save.txt';
$search = readline('Search Key : ');

$html = file_get_contents('https://en.wikipedia.org/wiki/'.$search);
$removehtmltags = strip_tags($html);

file_put_contents($save, $removehtmltags);
*/
// new code



$save = 'save.txt';
$search = readline('Search Key Wikipedia : ');

$html = file_get_contents('https://en.wikipedia.org/w/index.php?title=Special:Search&limit=700&offset=20&profile=default&search='.$search.'&ns0=1');
$removehtmltags = strip_tags($html);

file_put_contents($save, $removehtmltags);

sleep(1);

echo '';
$filename = readline('File location New Line : '); 

$open = $filename;

$text = file_get_contents($open);
$text = str_replace(" ","\n",$text);

file_put_contents($open,$text);




?>
