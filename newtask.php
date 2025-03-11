<?php
  

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'connection.php';
     
      if(empty($_POST['task'])){
        echo "Task is required";
      }elseif(empty($_POST['date'])){
        echo "Date is required";
      }else{
      $task = $_POST['task'];
      $date = $_POST['date']; 
      
      $sql = "INSERT INTO `todolist_table` (`task`, `date`) VALUES ('$task', '$date')";
      $result = mysqli_query($conn, $sql);
      if($result){
        echo "haysdehvdety";
      }else{
        echo "Error";
      }
    }
}
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylee.css">
    <style>
    .ur{
      height: 10vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: rgb(231, 190, 139);
    }

    </style>
</head>
<body>

  <div class = "first-div-top">
       <div id = "imgcntnr">
        <img id = "OIP" src = "OIPpp.png">
</div>
       <div ID = "td">
      <h1>TO DO LIST</h1>
</div>
</div>


<div id = "secdiv">
   <div id = "r1" class="indiv2" ><a href = "index.php" class = "au">Task</a></div>
   <div id = "r2" class="indiv2" >Add new task</div>
   <div id = "r3" class="indiv2" ><a href = "complertedtask.php" class = "au">Completed Task</a></div>
</div>
  
    <div id = "third-div">
        <div id = "inside-the-thirddiv">
            <div id = "text-inside-the-thirddiv">
            <h1>Add a new Task</h1>
         </div>
         
         <div id = "text2-inside-the-thirddiv">
            <h6>What is your task?</h6> 
         </div>
         <div>
            <form method="post">
              <div class = "ur">
                <div id = "form-task">
                    <label>
                        Task
                    </label>
                    <input type="text" name = "task" >
                </div>
 </div>
               <div class = "ur">
                <div>
                    <label>
                        Target Date:
                    </label>
                    <input type="date" name = "date">
                </div>
</div>
            <div>
                <div class = "ur">
                   <input type = "submit" name = "submit">
                </div>
</div>
            </form>
         </div>
        </div>    
        
        
    </div>

  </body>
</html>

