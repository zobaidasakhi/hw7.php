<?php
session_start();
?>
<!Doctype html>
<html long="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">POST SYSTEM </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All Post</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="containter">
     <div class="col-6 mx-auto mt-7">
        <div class="card">
            <div class="card-header"><strong>Sign In</strong></div>
        <div class="card-body">
<form action="./controller/post.php" method="POST">
<div class="mb-3"> 
     
     <label for="exampleInputEmail1" class="form-label">First Name</label>
     <input type="text" name="first" class="form-control" id="exampleInputEmail1"velue="<?= isset($_SESSION['old_data']['first'])?$_SESSION['old_data']['first']:''?>" aria-describedby="emailHelp">
    
    
      <?php
   if(isset($_SESSION['errors']['first']));{
    ?><span class="text-danger">
      <?php
    echo $_SESSION['errors']['first']
         ?>
    </span>
    <?php
   }
    ?>
   
    </div>
     <div class="mb-3"> 
     
     <label for="exampleInputEmail1" class="form-label">Last name</label>
     <input type="text"name="last" class="form-control" id="last Name" aria-describedby="emailHelp"velue="<?= isset($_SESSION['old_data']['last'])?$_SESSION['old_data']['last']:''?>" aria-describedby="emailHelp">
     
     <?php
   if(isset($_SESSION['errors']['last']));{
    ?><span class="text-danger">
      <?php
    echo $_SESSION['errors']['last']
         ?>
    </span>
    <?php
   }
    ?>
</div>
<div class="mb-3"> 
     
     <label for="Password" class="form-label">Password</label>
     <input type="text" name= "password" class="form-control" id="password"velue="<?= isset($_SESSION['old_data']['password'])?$_SESSION['old_data']['password']:''?>" aria-describedby="emailHelp">
     
     <?php
   if(isset($_SESSION['errors']['password']));{
    ?><span class="text-danger">
      <?php
    echo $_SESSION['errors']['password']
         ?>
    </span>
    <?php
   }
    ?>
</div>


<button type="Submit"name="submit" value="submited" class="btn btn-primary  w-100">Submit</button>


</from>
</div>
</div>
















<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>


</html>