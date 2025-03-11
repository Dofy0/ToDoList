<?php
include("connection.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
   
    $sql = "DELETE FROM todolist_table WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "deleted succesfully";
    }else{
        echo "something went wrong";
    }
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
</head>
<body>
   <div>
       <a href = "index.php">go back</a>
   </div>
</body>
</html>

