<?php
include("sessions.php");
include_once("geo_plugin.php");
if(!isset($_SESSION["login_sess"])) 
{
 $id= $ip;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require('includes/config.php'); 
require('config.php');


$stmt = $db->prepare('SELECT * FROM hand WHERE id = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();
$pid =$row['id']
;//if post does not exists redirect user.
echo $pid;

?>
<?php
if(!$username){
    header("Location: Authuser/authlogin.php");

}else{
    mysqli_query($dbc, "INSERT INTO bookmark(bid, postid) VALUES ('$id', '$pid')");
    header("Location: {$_SERVER['HTTP_REFERER']}");
}
?>
</body>
</html>