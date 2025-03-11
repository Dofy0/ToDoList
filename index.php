<!-- Dito naman sir ang main page ko where i display the task -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page | Tasks</title>
    <link rel="stylesheet" href="stylee.css">
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
   <div id = "r1" class="indiv2" >Task</div>
   <div id = "r2" class="indiv2" ><a href = "newtask.php" class = "au">Add a new Task</a></div>
   <div id = "r3" class="indiv2" ><a href = "complertedtask.php" class = "au">Copleted Task</a></div>
</div>

<div id = "re">
   <div id = "tasktext"><h1>Task</h1></div>
   <div id = "fe">
    <table class = "tableee">
  <tr>
    <th>Task</th>
    <th>Deadline</th>
  </tr>
 <?php
    include "connection.php";
    $sql = "SELECT * FROM todolist_table";
    $result = $conn->query($sql);

    ?>
    
    <?php
    foreach ($result as $ide) {
    ?>
        <tr class = "table__row">
            
            <td class = "task-td"><?= $ide['task'] ?></td>
            <td class = "task-td"><?= $ide['date'] ?></td>
            <td id = "td-delete" ><button  href = "youtube.com" class="td-buttons" id="delete-button"><a class = "class-deco" href="delete.php?id=<?= $ide['id']?>">DELETE</a></button></td>
            <td><button class="td-buttons" id="edit-button"><a  class = "class-deco" href = "edit.php?id=<?= $ide['id']?>">Edit</a></button> </td>
            <td><button class="td-buttons" id="completed-button"><a class = "class-deco"href = "completed.php?id=<?= $ide['id']?>">Completed</a></button></td>          
        </tr>
    <?php } ?>
 </table></div>
</div>
 
  </body>
</html>