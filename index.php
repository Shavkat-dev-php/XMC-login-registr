<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

include 'register.php';
include 'login.php';
include 'facebook.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XMC Sign in & Login</title>
  <link rel="stylesheet" href="./main.css">
</head>
<body>
  <div class="container">
    <div class="wrapper">
      <div class="wrapper_btn_box">
        <a href="./index.html" class="sign_up_btn">Sign Up</a>
        <a href="./index.html" class="log_in_btn">Log in</a>
      </div>
      <br>
      <div class="sign_up_box">
        <h1 class="text_center">Ro'yhatdan o'tish</h1>

        <div  class="text_center">
          <span>Already have an acoount?</span>  <a href="#" class="box_log_in_btn">Log in</a>
        </div>

        <div class="sign_up_box_flex">
          <div class="sign_up_box_left">

          <div class="sign_up_box_right">
            <form action="register.php" class="sign_up_box_form" method="POST">
              <input type="text" name="name" placeholder="name" required>
              <input type="email" name="email" placeholder="email" required>
              <input type="password" name="password" placeholder="password" required>
              <button class="sign_up_box_form_btn" type="submit">Kirish</button>
            </form>
          </div>

            <div class="sign_up_with_facebook">
              <a href="<?php echo $loginUrl; ?>">
                <img src="./images/facebook_pic.svg" alt="Facebook">
                <span>Sign up with Facebook</span>
              </a>
            </div>
        </div>
      </div>

      <div class="log_in_box">
        <h1 class="text_center">Log in</h1>

        <div  class="text_center">
          <span>Do'nt have an acoount?</span>  <a href="#" class="box_sign_up_btn">Sign Up</a>
      </div>

      <form action="login.php" class="log_in_box_form" method="POST">
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="password" required>

        <button class="log_in_box_form_btn" type="submit">Log in</button>
      </form>
    </div>
  </div>

  <script src="./script.js"></script>
</body>
</html>