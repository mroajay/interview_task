<?php
  include _once('db.php');

  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $signUp = $_POST['signUp'];
  $pwd = $_POST['pwd'];

  if(mysql_query("INSERT INTO task_table VALUES('name', 'email', 'gender', 'signUp', 'pwd')"))
    echo "sucessfully inserted";
  else
    echo "insertion failed";
?>