<?php

//fetch_user.php

include('database_connection.php');

session_start();

$query = "
SELECT * FROM users
WHERE user_id != '".$_SESSION['user_id']."'
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
	<div id="'.$row['user_id'].'" class="topic">
		<p  class="top" id="top_'.$row['user_id'].'">'.get_user_name($row['user_id'],$connect).' '.count_unseen_message($row['user_id'], $_SESSION['user_id'], $connect).' '.fetch_is_type_status($row['user_id'], $connect).'</p>

		</div>
		<script>
		document.getElementById("'.$row['user_id'].'").onclick = function() {
		//document.getElementById("top_'.$row['user_id'].'").style.color = "brown";
		var el = document.getElementById("ifplayer2");
		el.src = "index.php?touserid='.$row['user_id'].'&tousername='.get_user_name($row['user_id'],$connect).'";

		}
		</script>
	';
}

$output .= '';

echo $output;

?>
