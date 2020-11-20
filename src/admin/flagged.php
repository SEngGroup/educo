<html>
    <link rel="stylesheet" href="style.css">
</html>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/Forum/User/Post_Com/config.php');


    // check db con
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    // actions [delete, ok]
    if (isset($_GET['delete_id'])) {
        $delete_id  = (int) $_GET['delete_id'];

        // Soft Delete topic with id
        $query_del  = "UPDATE flags SET status = 'deleted' WHERE topic_id = '$delete_id'";
        $stm_del    = $connect->prepare($query_del);

        // success
        if($stm_del->execute()){
            echo "Deleted Successfully";
            echo "<br><br>";
        } else {
            echo "Error deleting this Topic!";
            echo "<br><br>";
        }
    }
    if (isset($_GET['ignore_id'])) {
        $ignore_id  = (int) $_GET['ignore_id'];

        // Remove Flag topic with id
        $query_ignore  = "UPDATE flags SET status = 'ok' WHERE topic_id = '$ignore_id'";
        $stm_ignore    = $connect->prepare($query_ignore);

        // success
        if($stm_ignore->execute()){
            echo "Flag Removed Successfully";
            echo "<br><br>";
        } else {
            echo "Error Removing Flag!";
            echo "<br><br>";
        }
    }


    // print out topic, complaints and actions
    echo "<table id='topic'>";
        echo "<th>Flagged Topics</th>";
        echo "<tr>";
            echo "<td>Topic Title </td>";
            echo "<td>Flag reason(s)</td>";
            echo "<td>Actions</td>";
        echo "</tr>";
        
        // get unique ids of flagged topics
        $query_flagged  = "SELECT topic_id FROM flags WHERE status = 'flagged' GROUP BY topic_id";
        $stm_flagged    = $connect->prepare($query_flagged);

        if($stm_flagged->execute()){
            $topic_ids  = $stm_flagged->fetchAll();
            
            // loop through flagged topics
            foreach($topic_ids as $topic_id){
                // get topic title
                $query_topic        = "SELECT topic_subject FROM topics WHERE topic_id = '$topic_id'";
                $stm_topic          = $connect->prepare($query_topic);
                
                // get complaints 
                $query_complaints   = "SELECT description FROM flags WHERE topic_id = '$topic_id'";
                $stm_complaints     = $connect->prepare($query_complaints);


                // here we are printing the table rows                
                if($stm_topic->execute()){
                    $topic_title    = $stm_topic->execute();
                    echo "<tr>";
                    // topic title
                    echo "<td>".$topic_title."</td>";

                    // flag complain
                    echo "<td>";
                        if($stm_complaints->execute()){
                            $complaints = $stm_complaints->fetchAll();
                            if($complaints){
                                foreach($complaints as $complaint){
                                    printf($complaint);
                                }
                            }else{
                                printf("No Reasons!");
                            }
                        }
                    echo "</td>";

                    // actions
                    echo "<td bgcolor=\"red\">";
                        echo "<a href=\"?delete_id={$topic_id}\">Delete Topic</a>";
                        echo "<br>";
                        echo "<a href=\"?ignore_id={$topic_id}\">Remove Flag</a>";
                    echo "</td>";
                    echo "</tr>";                
                }                
            }
        }
    echo "</table>"; 
?>