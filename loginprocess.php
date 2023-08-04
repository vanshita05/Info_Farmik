<?php
  session_start();
  require "dbconnect.php";
  var_dump($_POST);
  $email = $_POST['txt_email'];
  $pass = $_POST['txt_pass'];
  
    $select= "SELECT * from user_tbl WHERE mobileno='".$email."' OR email='".$email."' AND password='".$pass."'";
    echo $select;
    $qry = mysqli_query($con,$select);
    if(mysqli_num_rows($qry)>0)
    {
      $row=mysqli_fetch_assoc($qry);
      
        $id = $row['id'];
        $_SESSION['id']= $id;
        echo "success";
        header("location:index1.php");
      exit();
      
    }
   
    $select1= "SELECT * from expert_tbl WHERE email='".$email."' AND password = '".$pass."' AND usertype=2" ;
    
    $qry1 = mysqli_query($con,$select1);
    if(mysqli_num_rows($qry1)>0)
    {
      $row1=mysqli_fetch_assoc($qry1);
        $id = $row1['eid'];
        $_SESSION['eid']= $id;
        echo "success";
       header("location:index2.php");
        exit();
    }
    else{
      echo "Error";
    }
   
    
?>  