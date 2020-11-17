<?php
    include($_SERVER['DOCUMENT_ROOT'].'/Forum/User/Post_Com/config.php');

    // check db con
    // if (mysqli_connect_errno()) {
    //     printf("Connect failed: %s\n", mysqli_connect_error());
    //     exit();
    // }

    $query        = "SELECT * FROM topics WHERE topic_status == 'flagged'";
    $stm          = $connect->prepare($query);


    if($stm->execute()){
        $flagged = $stm->fetchAll();

        foreach($flagged as $flagged_topic){

            echo '<p id='.$flagged_topic['topic_id'].'>';
            echo html_entity_decode($flagged_topic["topic_subject"]).'</p>';
                
            echo "
            <script>
                document.getElementById('".$flagged_topic['topic_id']."').onclick = function() {
                    var el = document.getElementById('ifplayer2');
                    el.src = 'Post_Com/index.php?id=".$flagged_topic['topic_id']."';
                }
            </script>";
        }
    }else {
        echo 'No Flagged Topics';
    }

?>