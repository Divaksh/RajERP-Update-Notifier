<?php 

function foolproofTime($datetime) {

//remove unwanted charaters from starting
$n=mb_substr($datetime, 0, 1);
$on=mb_substr($datetime, 0, 2);
$ons=mb_substr($datetime, 0, 3);

if($ons==" on")
{
	$datetime = mb_substr($datetime, 3);
}

else if($on=="on")
{
	$datetime = mb_substr($datetime, 2);
}

else if($n=="n")
{
	$datetime = mb_substr($datetime, 1);
}

//remove unwanted charaters from end
$s=mb_substr($datetime, -1);
$sa=mb_substr($datetime, -2);
$san=mb_substr($datetime, -3);
if($san==" an")
{
	$datetime = mb_substr($datetime, 0, -3);
}
else if($sa==" a")
{
	$datetime = mb_substr($datetime, 0, -2);
}
else if($s==" ")
{
	$datetime = mb_substr($datetime, 0, -1);
}	


	return $datetime;
	
}

?>