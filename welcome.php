<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$f=$a+$b;
$g=$b+$c;
$h=$a+$c;
if ($f>$c)
{
if ($g>$a)
{
if ($h>$b)
{
$d=0.5*$a+0.5*$b+0.5*$c;
$e=sqrt($d*($d-$a)*($d-$b)*($d-$c));
echo "the result is"." ".$e;
}
else
{
echo "no result";
}
}
else
{
echo "no result";
}
}
else
{
echo "no result";
}
?> 
