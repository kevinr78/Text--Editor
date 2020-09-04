<?php
    
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
      <div id="RegisterForm">
        <div id="login_content">
          <h2 style="text-align: center">Welcome Back!</h2>
          <h3 style="text-align: center">Let's get coding!!</h3>
          <h3 style="text-align: center">Click below to login</h3>
          <button id="LoginBtn" onclick="toggle()">Login</button>
        </div>
        <div id="SignIn_content" class="display">
          <h2 style="text-align: center">First time here?</h2>
          <h3 style="text-align: center">Let's sign up</h3>
          <button id="signin_btn" onclick="toggle()">Sign Up</button>
        </div>
      </div>
      <div id="SignIn_form">
        <h1>Create Account</h1>
        <form class="form">
          <div class="input-field">
            <input type="text" id="name" required autocomplete="off" />
            <label for="name" class="label-name">
              <i class="fas fa-pencil-alt fa-md"></i>
              <span class="content-name">Enter name</span>
            </label>
          </div>
          <div class="input-field">
            <input type="email" id="email" required autocomplete="off" />
            <label for="email" class="label-name">
              <i class="fas fa-at fa-md"></i>
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
          <div class="input-field">
            <input type="password" id="pass" required />
            <label for="pass" class="label-name">
              <i class="fas fa-key fa-md"></i>
              <span class="content-name">Confirm Password</span>
            </label>
          </div>
          <button id="signin_btn" class="fourth">Sign up</button>
        </form>
      </div>
      <div id="Loginform" class="display">
        <form class="form">
          <h1>Login</h1>
          <div class="input-field">
            <i class="fas fa-user fa-md"></i>
            <input type="email" id="email" required autocomplete="off" />
            <label for="email" class="label-name">
              <span class="content-name">Enter E-mail</span>
            </label>
          </div>
          <div class="input-field">
            <i class="fas fa-key fa-md"></i>
            <input type="password" id="pass" required />
            <label for="pass" class="label-name">
              <span class="content-name">Enter Password</span>
            </label>
          </div>
          <div class="login_checkbox">
            <input type="checkbox" id="checkbox" />
            <label for="checkbox">Stay Logged In!!</label>
          </div>
          <button id="login_btn" class="fourth">Login</button>
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