<?php
require_once(dirname(__FILE__) . "/constants.php");
$conn = mysqli_connect($config["db"]["hostname"], $config["db"]["username"], $config["db"]["password"], $config["db"]["database"]);
