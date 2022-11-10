<?php
  
session_start();


if(isset($_POST['submit'])){
    $error =[];
    
    $request = $_POST;
  $first = $request['first'];
  $last = $request['last'];
  $password = $request ['password'] ;

  if(empty($first)){
    $msg ="first dewa hoyeche?";
    $error['first'] = $msg;
}
if(empty($last)){
  $msg ="last dewa hoyeche?";
  $error['last'] = $msg;
}
if(empty($password)){
    $msg ="first dewa hoyeche?";
    $error['password'] = $msg;
  }
if (count($error)>0){
  $_SESSION['errors'] = $error;
  $_SESSION['old_data'] =$request;
  header("Location: ../index.php");

} else{
  echo "wellcome your account";
}

} else {
    echo"submit korun";
}

?>
  