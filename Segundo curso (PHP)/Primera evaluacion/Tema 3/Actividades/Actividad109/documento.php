<?php

$fechahora=time();

echo date("D d,Y, g:i a",$fechahora)."<br>";
echo date("d.m.y",$fechahora)."<br>";
echo date("YdY",$fechahora)."<br>";
echo date("m-d-y, h-i-s",$fechahora)."<br>";
echo date("M-D-y, h:i:s",$fechahora)."<br>";
echo date("h:i:s",$fechahora)."<br>";

?>