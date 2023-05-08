<?php 
require ('inc/head.php');
include ('inc/header.php');

?>

<section class="login-page" id="login-page">
<div class="form-container">
      <!-- Login Form -->
      <form id="login-form" action="login.php" method="POST" autocomplete="">
        <h2 style="text-align: center; font-size: 25px;">Login Now!</h2>
        
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" id="email" name="email" required autofocus>
        <label for="password"><b>Password</b></label>
        <div class="password-container">
          <input type="password" placeholder="Enter Password" id="password" name="password" required>
          <i class="fa fa-eye-slash" id="toggle-password"></i> </input>
      </div>
      <?php
        if(count($errors) > 0){
            ?>
            <div class="validate">
                <?php
                foreach($errors as $showerror){
                    echo $showerror;
                }
                ?>
            </div>
            <?php
        }
        ?>
        <div class="remember-password" style="display: flex; justify-content: space-between;">
          <div class="form-check" style="font-size: 15px;">
            <label for="remember">
              <input style="font-size: 15px;" type="checkbox" id="remember_me" name="remember_me" value="remember">   Remember Me </input>
            </label>
          </div>
          <a href="forgot-password.php" style="font-size: 15px; text-decoration: underline;">Forgot password?</a>
        </div>
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
          <input class="btn" type="submit" name="login" value="Login">
        </div>
        <div class="create-account">
          <p style="font-size: 15px; margin-top: 8px;">Create A New Account? <a  href="signup.php" style="color: blue; text-decoration: underline;"type="submit" name="signup" id="signup-button">Register</a></p>
        </div>
      </form>
</div>
      </section>




  <script>

  const passwordInput = document.getElementById("password");
  const togglePasswordButton = document.getElementById("toggle-password");

  togglePasswordButton.addEventListener("click", function() {
  const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
  passwordInput.setAttribute("type", type);
  togglePasswordButton.classList.toggle("fa-eye-slash");
  togglePasswordButton.classList.toggle("fa-eye");
});



  </script>

<?php
include ('inc/footer.php');
require ('inc/script.php');
?>
