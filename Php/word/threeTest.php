<?php
// error_reporting(E_ALL);
// ini_set('display_errors', true);

define('t1', 'asd');
$id = isset($_GET['id']) ? $_GET['id'] : '';
var_dump($_SERVER);
echo "sadasdas\n1231231";
echo "another string";
echo <<<HTML
"fdasfadfsad<br />dadadsa"
HTML;
$colors = array('red', 'blue', 'green', 'yellow');

foreach ($colors as $color) {
	echo "Do you like $color?\/\n";
}
