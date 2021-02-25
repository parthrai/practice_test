<?php

    if(isset($_POST['test'])){
       
        $taskList = $_POST['test'];
       const SERVER_NAME = "localhost";
       const DB_USER = "root";
       const DB_PASS = "password";
       const DB_NAME = "practice_test";

       $connection = new mysqli(SERVER_NAME, DB_USER, DB_PASS, DB_NAME);

       if($connection->connect_error){

         die("Connection Not Successful. Please try again.");
       }

    $query = "INSERT INTO tasks (task) VALUES ('${taskList}')";

      if($connection->query($query) == false){

        die("Query not submitted." . $connection->error);
      }

      echo "Query was successfully executed";
        
    }

?>
<html>
<head>

<title></title>


</head>
<body>

  <div id="wrapper">
        <header><h1>TO DO LIST!</h1></header>

  <div id="sidebar">
  </div>

  <div id="content">

      <div id="main">
        <br>
        <br>
        <br>
      <center>Simply add your tast into the text box below!</center>
      <center>Click the trash can icon to remove a task!</center>
      <center>
        <input type="text" placeholder="Add New Task!" name="test">
        <ul>

        </ul>

        <input type="submit">
      </center>


      </div>
      <div id="footer">
        <i>Copyright &copy; 2020 Omar Amin</i>

    </div>

  </div>
  </div>









</body>
</html>
