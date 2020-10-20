<?php

include('DBconnection.php');
if(isset($_POST['email'])){
  $email = mysqli_real_escape_string($connection,$_POST['email']);
}
if(isset($_POST['password'])){
  $password = mysqli_real_escape_string($connection,$_POST['password']);
}

if($_SERVER['REQUEST_METHOD']){
    if(empty($email)&&empty($password)){
        $error = "Please fill all the fields";
    }else{
        $query = 'SELECT * FROM `user details` WHERE ` email` = "'.$email.'"';
        if(mysqli_query($connection, $query)){
          echo "Succes";
        }else{
          echo "fail";
        }
    }
  }


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    z
    <script
      src="https://kit.fontawesome.com/0000f17b81.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    
    <div class="login-form-container animate" id="modal">
      
      <div class="form-heading">
        <span>Login </span>
      </div>
      <form class="login-form" method= "POST">
        <div class="input-field">
          <p><i class="fa fa-envelope"></i> <label for="email">Email</label></p>
          <input
            type="email"
            id="email"
            name = email
            onkeydown=" emailValidation(document.querySelector('.login-form') , document.querySelector('#email-err'), document.querySelector('#email').value)"
            autocomplete="off"
          />
          <span class="error" id="email-err"></span>
        </div>

        <div class="input-field">
          <p>
            <i class="fa fa-envelope"></i>
            <label for="password">Password</label>
          </p>
          <input
            type="password"
            id="password"
            name = "password"
            onkeydown="passValidation(document.querySelector('.login-form') , document.querySelector('#pass-err'), document.querySelector('#password').value)"
          />
          <span class="error" id="pass-err"></span>
        </div>

        <button onclick="validate()">Login</button>
      </form>
      <span class="error" style="color:red;margin-top:20px;"><?php echo $error; ?></span>
    </div>

    <script src="../javascript/index.js"></script>
  </body>
</html>
