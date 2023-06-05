<?php
try {
	$database_username = 'root';
	$database_password = '';
	$pdo_conn = new PDO('mysql:host=localhost;dbname=blog_samples', $database_username, $database_password);
	$pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}
