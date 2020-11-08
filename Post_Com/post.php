<?php
include "config.php";

// Insert record
if(isset($_POST['action'])&&$_POST['action']!= ''){
	 if ($_POST['action']=="comment") {
		$comment_message=$_POST['long_desc'];
 		$comment_topic=$_POST['comment_topic'];
 		$comment_by=$_POST['comment_by'];
 		echo "Message: ".$comment_message;
     echo "<br>Topic: ".$comment_topic;
 		echo "By: ".$comment_by;
 		if($comment_message != ''){
 			mysqli_query($con, "INSERT INTO comments(comment_message,comment_topic,comment_by) VALUES('".$comment_message."','".$comment_topic."','".$comment_by."') ");
 			//header('location: index.php');
		}
		} else if ($_POST['action']=="reply") {
		$reply_content=$_POST['texta'];
		$reply_to=$_POST['reply_to'];
		$reply_by=$_POST['reply_by'];
		echo "Reply: ".$reply_content;
		echo "<br>to: ".$reply_to;
		echo "By: ".$reply_by;
		if($reply_content != ''){
			mysqli_query($con, "INSERT INTO replies(reply_content,reply_to,reply_by) VALUES('".$reply_content."','".$reply_to."','".$reply_by."') ");
			//header('location: index.php');
	}

		} else {
			echo "Message Blank";
		}
    echo mysqli_error($con);
	} else {
		echo "Not Set";
	}

?>
