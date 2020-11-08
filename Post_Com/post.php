<?php
include "config.php";

// Insert record
if(isset($_POST['long_desc'])){

		$title = "kl";
		$short_desc = $_POST['short_desc'];
		$long_desc = $_POST['long_desc'];
		echo $short_desc."string";
    echo $long_desc;
		echo $title;
		if($title != ''){

			mysqli_query($con, "INSERT INTO contents(title,short_desc,long_desc) VALUES('".$title."','".$short_desc."','".$long_desc."') ");
			//header('location: index.php');
		}
    echo mysqli_error($con);
	} else {
		echo "Not Set";
	}

?>
