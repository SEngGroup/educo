<?php
    include('../../Forum/User/Post_Com/config.php');

    // check db con
    // if (mysqli_connect_errno()) {
    //     printf("Connect failed: %s\n", mysqli_connect_error());
    //     exit();
    // }



    // Handle delete
    if (isset($_GET['delete_id'])) {
        $delete_id  = (int) $_GET['delete_id'];

        // Delete topic with id
        $sql        = "DELETE FROM topics WHERE topic_id='$delete_id'";
        $stm        = $connect->prepare($sql);

        // success
        if($stm->execute()){
            echo "Deleted Successfully";
            echo "<br><br>";
        } else {
            echo "Error deleting this Topic!";
            echo "<br><br>";
        }
    }

    // handle flagged topics list view
    $query1        = "SELECT * FROM flags where topic_id";
    $stm1          = $connect->prepare($query1);

    if($stm1->execute()){
        $flagged1 = $stm1->fetchAll();

        foreach($flagged1 as $flagged_topic1){
    $query        = "SELECT * FROM topics where topic_id=".$flagged_topic1["topic_id"]."";
    $stm          = $connect->prepare($query);

    if($stm->execute()){
        $flagged = $stm->fetchAll();

        foreach($flagged as $flagged_topic){
            echo "<tr>";
            echo "<td>".$flagged_topic["topic_id"]."</td>";
            echo "<td>".$flagged_topic["topic_subject"]."</td>";
            echo "<td>".$flagged_topic["topic_description"]."</td>";
            echo "<td bgcolor=\"red\"><a href=\"?delete_id={$flagged_topic['topic_id']}\">Delete Topic</a></td>";
            echo "</tr>";
        }
    }else {
        echo 'No Flagged Topics';
    }
  }
}

?>
