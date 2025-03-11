<?php
  

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connection.php';
      $id = $_GET['id'];
      $task = $_POST['task'];
      $date = $_POST['date']; 
      
      $sql = "UPDATE `todolist_table` SET `task` = '$task', `date` = '$date' WHERE `todolist_table`.`id` = '$id'; ";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo "haysdehvdety";
      }else{
        echo "Error";
      }
      
       
   } 

   
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
                <div>
                    <label>
                        Task
                    </label>
                    <input type="text" name = "task" >
                </div>
                <div>
                    <label>
                        Target Date:
                    </label>
                    <input type="date" name = "date"  >
                </div>
                <div>
                    <input type = "submit" name = "submit";>
                </div>

            </form>


            <a href = "index.php"> Go back</a>
</body>
</html>