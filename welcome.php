<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" style="background">
    <link rel="stylesheet" href="page.css" type="text/css" media="screen" charset="utf-8">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>

    <div class="container">
     
    <p>
      <label for="new-task" class="middle " style="text-aligin:center;" >Add Task</label>
    <input id="new-task" type="text" ><button>Add Task</button>
    </p>
 
 
    <h3 class="middle">Todo</h3>
    <ul id="incomplete-tasks">
    </ul>
 
    <h3 class="middle">Completed Tasks</h3>
    <ul id="completed-tasks">
    </ul>
  </div>
 
  <script type="text/javascript" src="list.js"></script>
 





</body>
</html>


 

  

 

