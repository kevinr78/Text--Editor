<?php
$error = "";

if(isset($_POST['form_SignInBtn'])){
   if(isset($_POST['name'])){
       $error .="<p>Please enter a name</p>";
   }

   if(isset($_POST["email"])){
       $error .="<p>PLease enter a email</p>";
   }

   if(isset($_POST['pass'])){
       $error .="<p>PLease enter a password</p>";
   }
  if($error ==""){
       echo "Succesful";
      /*  header("Location:index.php"); */
   }
   else{
    $error = "<p>There were some error(s)</p>" .$error;
   }
   }


?>


<html>
  <head>
    <title>Welcome!!!</title>
  </head>
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <script
    src="https://kit.fontawesome.com/0000f17b81.js"
    crossorigin="anonymous"
  ></script>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="HPstyles.css" />

  <body>
    <div id="mainContainer">
      <div id="Content_Panel">
        <div id="login_content">
          <h2 style="text-align: center">Welcome Back!</h2>
          <h3 style="text-align: center">Let's get coding!!</h3>
          <h3 style="text-align: center">Click below to login</h3>
          <button id="Panel_LoginBtn" onclick="toggle()">Login</button>
        </div>
        <div id="SignIn_content" class="display">
          <h2 style="text-align: center">First time here?</h2>
          <h3 style="text-align: center">Let's sign up</h3>
          <button id="Panel_SignInBtn" onclick="toggle()">Sign Up</button>
        </div>
      </div>
      <div id="SignIn_form">
        <h1>Create Account</h1>
        <form class="form" method="POST">
          <div class="input-field">
            <input type="text" id="name" name="name" autocomplete="off" />
            <label for="name" class="label-name">
              <i class="fas fa-pencil-alt fa-md"></i>
              <span class="content-name">Enter name</span>
            </label>
          </div>
          <div class="input-field">
            <input type="email" id="email" name="email" autocomplete="off" />
            <label for="email" class="label-name">
              <i class="fas fa-at fa-md"></i>
              <span class="content-name">Enter E-mail</span>
            </label>
          </div>
          <div class="input-field">
            <input type="password" id="pass" name="pass" />
            <label for="pass" class="label-name">
              <i class="fas fa-key fa-md"></i>
              <span class="content-name">Enter Password</span>
            </label>
          </div>
          <div class="input-field">
            <input type="password" id="pass" name="confirm_Pass" />
            <label for="pass" class="label-name">
              <i class="fas fa-key fa-md"></i>
              <span class="content-name">Confirm Password</span>
            </label>
          </div>
          <button id="form_SignInBtn" name="form_SignInBtn">Sign up</button>
        </form>
        <div class="err"> <?php echo $error; ?></div>
      </div>
      <div id="Loginform" class="display">
        <form class="form">
          <h1>Login</h1>
          <div class="input-field">
            <input type="email" id="email" required autocomplete="off" />
            <label for="email" class="label-name">
              <i class="fas fa-user fa-md"></i>
              <span class="content-name">Enter E-mail</span>
            </label>
          </div>
          <div class="input-field">
            <input type="password" id="pass" required />
            <label for="pass" class="label-name">
              <i class="fas fa-key fa-md"></i>
              <span class="content-name">Enter Password</span>
            </label>
          </div>
          <div class="login_checkbox">
            <input type="checkbox" id="checkbox" />
            <label for="checkbox">Stay Logged In!!</label>
          </div>
          <button id="form_LoginBtn">Login</button>
        </form>
      </div>
    </div>

    <script type="text/javascript">
      var login_btn = document.getElementById("LoginBtn");
      var signin_btn = document.getElementById("signin_btn");
      var login_form = document.getElementById("Loginform");
      var SignIn_form = document.getElementById("SignIn_form");

      function toggle() {
        login_form.classList.toggle("display");
        SignIn_form.classList.toggle("display");
        document.getElementById("SignIn_content").classList.toggle("display");
        document.getElementById("login_content").classList.toggle("display");
      }
    </script>
  </body>
</html>
