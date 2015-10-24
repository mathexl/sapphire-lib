<?php
/*
 * Sapphire PHP Library v1.0.1
 * http://sapphire-lib.com/
 * Created by Mathew Pregasen
 * Peacock Logo created by Mathew Pregasen, free use under Creative Commons with Attribution
 * Sapphire is free and cannot be resold and is released under the MIT license
 * License similar to Creative Commons with Attribution.
 * Full text of license here: http://opensource.org/licenses/MIT
 * Date: 2014
*/



function sap_fib($numberofterms, $groups,$inputarray)
{

$output = array();
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 0;
	while($primer + 1  <= $numberin)
	{
	$output[] = $inputarray[$primer];
	$firstnew = $inputarray[$primer] + $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	$output[] = $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{

	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 0;
	$nextterm = 0;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] + $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
	return $output;
}
function sap_pfib($numberofterms,$groups,$inputarray)
{
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 0;
	while($primer + 1  <= $numberin)
	{
	print $inputarray[$primer] . ", ";
	$firstnew = $inputarray[$primer] + $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	print $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{
	print ", ";
	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 0;
	$nextterm = 0;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] + $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
}
function sap_pnocommafib($numberofterms,$groups,$inputarray)
{
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 0;
	while($primer + 1  <= $numberin)
	{
	print $inputarray[$primer] . " ";
	$firstnew = $inputarray[$primer] + $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	print $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{
	print " ";
	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 0;
	$nextterm = 0;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] + $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
}



//END Basic Finonacci.
/*
Multiply Fibonacci
*/
function sap_mulfib($numberofterms, $groups,$inputarray)
{

$output = array();
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 1;
	while($primer + 1  <= $numberin)
	{
	$output[] = $inputarray[$primer];
	$firstnew = $inputarray[$primer] * $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	$output[] = $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{

	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 1;
	$nextterm = 1;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] * $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
	return $output;
}
function sap_pmulfib($numberofterms,$groups,$inputarray)
{
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 1;
	while($primer + 1  <= $numberin)
	{
	print $inputarray[$primer] . ", ";
	$firstnew = $inputarray[$primer] * $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	print $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{
	print ", ";
	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 1;
	$nextterm = 1;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] * $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
}
function sap_pnocommamulfib($numberofterms,$groups,$inputarray)
{
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 1;
	while($primer + 1  <= $numberin)
	{
	print $inputarray[$primer] . " ";
	$firstnew = $inputarray[$primer] * $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	print $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{
	print " ";
	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 1;
	$nextterm = 1;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] * $nextterm;
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}
	}
	}
}

// End of Multiply Fibonacci Sequence.
// Beginning of Lucas Sequence

function sap_lucas($numberofterms)
{
$groups = 2;
$inputarray = array(2,1);
$output = array();
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 0;
	while($primer + 1  <= $numberin)
	{
	$output[] = $inputarray[$primer];
	$firstnew = $inputarray[$primer] + $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	$output[] = $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{

	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 0;
	$nextterm = 0;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] + $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
	return $output;
}
function sap_plucas($numberofterms)
{
$groups = 2;
$inputarray = array(2,1);
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 0;
	while($primer + 1  <= $numberin)
	{
	print $inputarray[$primer] . ", ";
	$firstnew = $inputarray[$primer] + $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	print $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{
	print ", ";
	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 0;
	$nextterm = 0;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] + $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
}
function sap_pnocommalucas($numberofterms)
{
$groups = 2;
$inputarray = array(2,1);
$offset = $offset + 1;
$numberofterms = $numberofterms - 1;
$endstring = "";
$count = count($inputarray);
if ($count != $groups and $groups != "" and $inputarray != "")
{
print "Error: Group size must equal the number of entities in the array.";
}
else
	{

	if($inputarray == "")
	{

	$inputarray = array(0,1);
	$groups = 2;
	}
	$numberin = count($inputarray);
	if($numberin == 1)
	{
	print "Error: Cannot create a complex Fibonacci sequence with only 1 input value.";
	}
	elseif($numberin > $numberofterms + 1)
	{
	print "Error: Cannot create sequence if number of terms wanted is less than the number of input values.";
	}

	else
	{
	$numberin = count($inputarray);
	$primer = 0;
	$firstnew = 0;
	while($primer + 1  <= $numberin)
	{
	print $inputarray[$primer] . " ";
	$firstnew = $inputarray[$primer] + $firstnew;
    $primer = $primer + 1;
	}
	$inputarray[] = $firstnew;
	while($primer + 1 <= $numberofterms + $offset)
	{
	$firstnew = 0;
	if($primer >= $offset)
	{
	print $inputarray[$primer];
	}
	if($primer + 1 != $numberofterms +  $offset){
	if($primer >= $offset)
	{
	print " ";
	}
	}

	$newprimer = $primer - $numberin;
	$newcount = 0;
	$nextterm = 0;
	while($newcount <= $numberin)
	{
	$nextterm = $inputarray[$newprimer+1] + $nextterm;//Newprimer + 1 vs Newprimer
    $newprimer = $newprimer + 1;
	$newcount = $newcount + 1;
	}

	$inputarray[] = $nextterm;
	$primer = $primer + 1;
	}

	}
	}
}



// End of Lucas Sequence
// Start of L-System

function sap_plsystem($iterations,$string,$array)
{
$counter = 1;

while($counter < $iterations)
{
 $megaarray = str_split($string);
 $megaarraycount = count($megaarray);
 $macounter = 0;
 while($macounter <= $megaarraycount)
 {
 while ($endvalue = current($array) and $break == false) {
    $startvalue = key($array);

	if($megaarray[$macounter] == $startvalue)
	{

	$megaarray[$macounter] = $endvalue;
	$break == true;

	}
	else
{
next($array);
}
	}
	reset($array);
	$break = false;


 $macounter = $macounter + 1;
 }
 $string = implode($megaarray);

 $counter = $counter + 1;

}
print $string;
}

function sap_lsystem($iterations,$string,$array)
{
$counter = 1;
while($counter < $iterations)
{
 $megaarray = str_split($string);
 $megaarraycount = count($megaarray);
 $macounter = 0;
 while($macounter <= $megaarraycount)
 {
 while ($endvalue = current($array) and $break == false) {
    $startvalue = key($array);

	if($megaarray[$macounter] == $startvalue)
	{

	$megaarray[$macounter] = $endvalue;
	$break == true;

	}
	else
{
next($array);
}
	}
	reset($array);
	$break = false;


 $macounter = $macounter + 1;
 }
 $string = implode($megaarray);

 $counter = $counter + 1;

}
return $string;
}
//Evaluate the bottom.
/*
function sap_lookandsay($integer)
{
$integer = $integer . " ";
$newstring = "";
$digitrunner = 0;
$howlong = strlen($integer);
while($digitrunner <= $howlong)
{
$forerunner = substr($integer,$digitrunner,1);
$parser = 0;
while ($forerunner == substr($integer,$digitrunner,1) )
{
$parser = $parser + 1;
$digitrunner = $digitrunner + 1;
}

$newstring = $newstring . $parser . $forerunner;
$digitrunner = $digitrunner + 1;

}
print $newstring;
}*/

function sap_sapphire()
{
print "Sapphire functions displayed below.<br>
	sap_fib(\$numberofterms, \$groups,\$inputarray):returns sequence as an array.  Groups is defined as number of values added per iteration.
<br> 	sap_pfib(\$numberofterms, \$groups,\$inputarray):Prints sequence in a string seperated by commas.  Groups is defined as number of values added per iteration.
<br> 	sap_pfib(\$numberofterms, \$groups,\$inputarray):Prints sequence in a string seperated by commas.  Groups is defined as number of values added per iteration.
<br>    sap_pnocommafib(\$numberofterms, \$groups,\$inputarray):Prints sequence in a simple string.  Groups is defined as number of values added per iteration.
<br>	sap_fib(\$numberofterms, \$groups,\$inputarray):returns multiplicative sequence as an array.  Groups is defined as number of values added per iteration.
<br> 	sap_pfib(\$numberofterms, \$groups,\$inputarray):Prints sequence in a string seperated by commas.  Groups is defined as number of values added per iteration.
<br> 	sap_pfib(\$numberofterms, \$groups,\$inputarray):Prints sequence in a string seperated by commas.  Groups is defined as number of values added per iteration.
<br>    sap_pnocommafib(\$numberofterms, \$groups,\$inputarray):Prints sequence in a simple string.  Groups is defined as number of values added per iteration.
	";
}

?>
