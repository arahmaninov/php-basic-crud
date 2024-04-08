<?php

$connect = mysqli_connect('localhost', 'root', '', 'CRUD');

if (!$connect) {
	die('Error connection to a database');
}

