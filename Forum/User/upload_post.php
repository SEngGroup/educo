<?php
include_once 'conect.php';
//include_once 'operations.php';
if(!isset($_SESSION)) {session_start();}
$con = new DBConnector();
$pdo = $con->connectToDB();
echo "string";
   if (isset($_POST['post'])) {
     $topic_subject=$_POST['topic_subject'];
     $topic_category=$_POST['topic_category'];
     $topic_description=$_POST['topic_description'];

echo "string";
   try
   {
       $stmt=$pdo->prepare("insert into topics (topic_subject,topic_category,topic_by,topic_description) values(?,?,?,?)");
       $stmt1=$pdo->prepare("SELECT * FROM categories WHERE category_name = ?");
       $stmt2=$pdo->prepare("SELECT * FROM categories ORDER BY category_id DESC LIMIT 1");
       $stmt1->execute([$topic_category]);
       $row = $stmt1->fetch();

       if($row == null){
         $stmt2=$pdo->prepare("insert into categories (category_name,category_description) values(?,?)");
         $stmt2->execute([$topic_category,""]);
         $stmt2->execute();
         $row2 = $stmt2->fetch();
         $cat_id=1;
         $stmt->execute([$topic_subject,$cat_id,7,$topic_description]);
       } else{
         $stmt2->execute();
         $row2 = $stmt2->fetch();
         $cat_id=1;
         $stmt->execute([$topic_subject,$cat_id,7,$topic_description]);
       }
   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   }
    }




 ?>
