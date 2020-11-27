<?php
if(!empty($_POST["id"])) {
	require_once("config.php");
		$query = "SELECT SUM(vote) as vote_rank FROM comments  WHERE comment_id = '" . $_POST["id"] . "'";
		//$row = runQuery($query,$con);

		switch($_POST["vote_rank"]) {
			case "1":
				$update_query ="UPDATE comments SET vote = vote+1 WHERE comment_id='" . $_POST["id"] . "'";
			break;
			case "-1":
				$update_query ="UPDATE comments SET vote = vote-1 WHERE comment_id='" . $_POST["id"] . "'";
			break;
		}

		$result = updateQuery($update_query,$con);
		foreach ( runQuery($query,$con) as $row) {
			print $row["vote_rank"];
		}

	}
?>
