Old High School project I made during a debate tournament integrating some abstract math matters with PHP.

Add the following line of code to your PHP files to integrate sapphire.  

```
include "sapphire.php"
```
Specify root if necessary.  Upload "sapphire.php" to your server.


Functions in the most recent copy include:

fib($numberofterms,$groups,$inputarray) : Returns a Fibonacci sequence with a specified number of terms.  $groups indicates the amount of past terms aggregated to create the next term.  For instance if $groups was equivalent to 3:

1,3,4 … => 8 => 15 etc.

The $inputarray must be an array where the number of terms in it is equivalent to the value of $groups.  For instance, if $group was 3, $inputarray must have 3 terms in it.  The $inputarray indicates the first terms a sequence is created with.

If $groups and $inputarray are left blank, fib() will return the number of terms of the original Fibonacci sequence.

pfib($numberofterms,$groups,$inputarray) : Prints the Fibonacci sequence as specified before while separated with commas.

pnocommafib($numberofterms,$groups,$inputarray) : Prints the Fibonacci sequence as specified without commas.

mulfib($numberofterms,$groups,$inputarray) : Returns an array with the similar rule as the Fibonacci sequence, except using multiplication as the factor of change opposed to addition.  For instance mulfib(5,2,array(1,2)) will return an array with the values 1,2,2,4,8

pmulfib($numberofterms,$groups,$inputarray) : Same as mulfib() except it prints the sequence with commas.

pnocommamulfib($numberofterms,$groups,$inputarray) : Same as pmulfib but without commas.

lucas($numberofterms) : Returns an array of a specified number of terms from the Lucas sequence.

plucas($numberofterms) : Prints a specified number of terms from the Lucas sequence separated by commas.

pnocommalucas($numberofterms) : Prints a specified number of terms from the Lucas sequence without commas.

lsystem($iterations,$string,$array) :  Returns a Lindenmayer System based on the iteration given.  $string is the original start of the function and $array must model the start and end of different sets.  For instance, if A => AB and B => A, then there must be an array that states: array (A => AB, B => A)

plsystem($iterations,$string,$array) :  Prints a Lindenmayer System based on the iteration given and same parameters as before.
