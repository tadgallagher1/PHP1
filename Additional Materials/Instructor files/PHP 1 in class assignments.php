1. Write a PHP script that prints out every integer between 5 and 23, as well as the sum of all those integers.

<?php

	$sum = 0;
	for ( $i = 5; $i <= 23; $i++ ) {
		echo "We are up to $i<br />";
		$sum = $sum + $i;
		// Or: $sum += $i;
	}

	echo "The sum is $sum";

?>

2. Create an array with numeric keys. Loop through that array and print out all the keys and values. Do it three ways:
a. foreach()
b. for()
c. while()

<?php

	$a = array( 'John', 'Joe', 'Bill' );

	// a. foreach() loop:
	foreach ( $a as $key => $value ) {
		echo "Key $key = $value<br />";
	}

	// b. for() loop:
	for ( $i = 0; $i < sizeof( $a ); $i++ ) {
		echo "Key $i = " . $a[ $i ] . "<br />";
	}

	// c. while() loop:
	$i = 0;
	while ( $i < sizeof( $a ) ) {
		echo "Key $i = " . $a[ $i ] . "<br />";
		$i++;
	}

?>

Write a PHP page that contains a feedback form which asks for:
1. First name
2. Last name
3. Email address
4. Favorite color (drop-down)
The top of the form will display the information posted, as follows:

<p>Your name is: [display first and last name here, e.g. John Doe]</p>
<p>Your email address is: [display email address here, e.g. me@email.com]</p>
<p>Your favorite color is: [display color name here, e.g. Red]</p>

You will have to change the parts [in brackets] to actual PHP code.
Hint: the posted variables are in the superglobal array named $_REQUEST

-------------------------

<form>
	First name: <input type="text" name="fname" />
	Last name: <input type="text" name="lname" />
	Email: <input type="text" name="email" />
	Favorite color: <select name="color">
		<option value="red">Red</option>
		<option value="green">Green</option>
		<option value="blue">Blue</option>
	</select>
</form>

<p>Your name is: <?= $_REQUEST[ 'fname' ] ?> <?= $_REQUEST[ 'lname' ] ?></p>
<p>Your email address is: <?= $_REQUEST[ 'email' ] ?></p>
<p>Your favorite color is: <?= $_REQUEST[ 'color' ] ?></p>
