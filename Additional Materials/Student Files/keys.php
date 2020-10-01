<?php

// File: keys.php
// Class: PHP 1
// Author: Kim Moser <kim@palmbeachcodeschool.com>
// Date: 12/4/2019

$hobbies = [ 'fishing', 'golf', 'tennis' ];
$states = [ 'NY' => 'New York', 'FL' => 'Florida', 'TX' => 'Texas' ];

echo "Hobbies:<br>";
foreach( $hobbies as $k => $v ) {
	echo "key=$k, value=$v<br>";
}

echo "States:<br>";
foreach( $states as $k => $v ) {
	echo "key=$k, value=$v<br>";
}

?>