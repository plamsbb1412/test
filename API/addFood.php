<?php
header("content-type:text/javascript;charset=utf-8");
error_reporting(0);
error_reporting(E_ERROR | E_PARSE);
$link = mysqli_connect('localhost', 'root', '', "project");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    
    exit;
}

if (!$link->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $link->error);
    exit();
	}

if (isset($_GET)) {
	if ($_GET['isAdd'] == 'true') {
				
		$id_store = $_GET['id_store'];
		$name_manu = $_GET['name_manu'];
		$quantity = $_GET['quantity'];
		$price = $_GET['price'];
		$images = $_GET['images'];
		
							
		$sql = "INSERT INTO `manu`(`id`, `id_store`, `name_manu`, `quantity`, `price`, `images`)  VALUES (Null,  '$id_store','$name_manu','$quantity','$price','$images')";

		$result = mysqli_query($link, $sql);

		if ($result) {
			echo "true";
		} else {
			echo "false";
		}

	} else echo "Welcome Master PlamSBB";
   
}
	mysqli_close($link);
?>