<?php
include_once 'conect.php';
//include_once 'operations.php';
if(!isset($_SESSION)) {session_start();}
$con = new DBConnector();
$pdo = $con->connectToDB();

echo login($pdo);

function login($pdo)
{
    try
    {
        $stmt=$pdo->prepare("SELECT * FROM users WHERE user_email = ?");
        $stmt->execute(["reesalumasa@gmail.com"]);
        $row = $stmt->fetch();
        if($row == null){
          return "Account does not exist";
        }
        return "Your username or password is not correct";
    }
    catch(PDOException $e)
    {
        return $e->getMessage();
    }
}



 ?>
