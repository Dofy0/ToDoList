<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed Task</title>
    <link rel="stylesheet" href="stylee.css">
    <style>
      #container-below-the-navbar{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2vh;
        background-color: rgb(233, 213, 188);
        
      }
      #container-inside-cbtn{
        background-color: rgb(238,183,116);
        border: 1px solid black ;
      }
      body{
        background-color: rgb(233, 213, 188);
      }
      #text-task-div{
        width: 100%;
        height: 10vh;
        display: flex;
        justify-content: center;
        align-items: center;
        border: 1px solid black ;
        background-color: #21ae21;
      }
      #completed-task-container{
        height: 8vh;
        width:100%;
        margin-top: 1vh;
        display: flex;
   
        align-items: center;
        border-bottom: 1px solid black ;
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
   <div class="indiv2" ><a  href="index.php" class = "au" >Task</a></div>
   <div class="indiv2" ><a href="newtask.php" class = "au">Add a new Task</a></div>
   <div class="indiv2" >Completed Task</div>
</div>

<div id = "container-below-the-navbar">
     <div id = "container-inside-cbtn">
       <div id = "text-task-div">
        <h1 id = "texttask" >Completed Task</h1>

       </div>
       <?php
    include "connection.php";
    $sql = "SELECT * FROM completed_table";
    $result = $conn->query($sql);

    ?>
<?php
  $numbering = 1;
?>
<?php foreach ($result as $ide) { ?>
         <div id = "completed-task-container">
         <?php
         echo "$numbering.       ";
         $numbering++;
         ?>
         
         <h2><?= $ide['completed_task'] ?></h2>
   </div>
    
    <?php } ?>
     
     </div>
</div>
 

  </body>
</html>