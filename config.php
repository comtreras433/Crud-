<?php

try{
	$base = new PDO("mysql:host=localhost;dbname=cursophp", "root","root");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e) {
	echo $e->getMessage();
}