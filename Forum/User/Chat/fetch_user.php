<?php

//fetch_user.php

include('database_connection.php');

session_start();

if(isset($_POST['action'])&&$_POST['action']== 'user'){

	$query = "
	SELECT * FROM users
	WHERE user_id != '".$_SESSION['user_id']." order by first_name ASC'
	";

	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '

	';

	foreach($result as $row)
	{
		$status = '';
		$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
		$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);

		$output .= '
		<div id="cont_'.$row['user_id'].'" class="topic">
			<p  class="top" id="top_'.$row['user_id'].'">'.get_user_name($row['user_id'],$connect).' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['user_id'], $connect).'</p>

			</div>
			<script>
			document.getElementById("cont_'.$row['user_id'].'").onclick = function() {
			//document.getElementById("top_'.$row['user_id'].'").style.color = "brown";
			var el = document.getElementById("ifplayer2");
			el.src = "index.php?touserid='.$row['user_id'].'&tousername='.get_user_name($row['user_id'],$connect).'";

			}
			</script>
		';
	}

	$output .= '';

	echo $output;


} else if(isset($_POST['action'])&&$_POST['action']== 'message'){
	$query = "
	select DISTINCT to_user_id from chat_message where from_user_id='".$_SESSION['user_id']."' or to_user_id='".$_SESSION['user_id']."' order by timestamp DESC
	";
	$statement = $connect->prepare($query);

	$statement->execute();

	$result = $statement->fetchAll();

	$output = '

	';
	$result1=$mysqli->query($query);
	while ($r = mysqli_fetch_assoc($result1)){
  foreach($r as $row) {
		$status = 'offline';
		$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
		$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
		if($row!=$_SESSION['user_id']){
			$output .= '
			<div id="'.$row.'" class="topic">
				<p  class="top" id="top_'.$row.'">'.get_user_name($row,$connect).' '.count_unseen_message($row, $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row, $connect).'</p>

				</div>
				<script>
				document.getElementById("'.$row.'").onclick = function() {
				//document.getElementById("top_'.$row.'").style.color = "brown";
				var el = document.getElementById("ifplayer2");
				el.src = "index.php?touserid='.$row.'&tousername='.get_user_name($row,$connect).'";

				}
				</script>
			';
  }
}
}


		$output .='';

		echo $output;

		}





?>
