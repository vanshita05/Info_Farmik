<?php
  session_start();
  require "dbconnect.php";
  var_dump($_POST);
  $email = $_POST['txt_fn'];
  $pass = $_POST['txt_pass'];

    $select= "SELECT * from expert_tbl WHERE email='".$email."' OR mobileno='".$email."' AND password = '".$pass."'";
    echo $select;
    $qry = mysqli_query($con,$select);
    if(mysqli_num_rows($qry)>0)
    {
      while($row=mysqli_fetch_assoc($qry))
      {
        $id = $row['id'];
        $_SESSION['id']= $id;
        header("location:index1.php");
        exit();
      }
    }
    header("location:login.php");
    exit();
?>  