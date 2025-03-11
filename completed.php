<?php
include("connection.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    
    $sql = "SELECT * FROM todolist_table WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    $alldata = $result->fetch_assoc();
    
    $task = $alldata['task'];

    $sqll = "INSERT INTO `completed_table` (`id`, `completed_task`) VALUES (NULL, '$task');";
    $resultl = mysqli_query($conn, $sqll);

    $sqld = "DELETE FROM todolist_table WHERE id = $id";
    $result = mysqli_query($conn, $sqld);
    if($sqld){
        echo "Successfully done";
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
    <title>Completed page | Go Back</title>
</head>
<body>
   <div>
       <a href = "index.php">go back</a>
   </div>
</body>
</html>

