<?php 
require_once "controller-data.php";
require ('inc/head.php');
include ('inc/header.php');


$email = $_SESSION['email'];
if($email == false){
  header('Location: index.php');
}
?>


<section class="new-password" id="new-password">
<div class="form-container">
      <!-- Login Form -->
      <form action="new-password.php" method="POST" autocomplete="off">
      <h2 style="text-align: center; font-size: 25px; margin-bottom:60px;">Create New Password</h2>
        <?php 
        if(isset($_SESSION['info'])){
            ?>
            <div class="validate">
                <?php echo $_SESSION['info']; ?>
            </div>
            <?php
        }
        ?>
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

    <div class="form-group">
    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
    <p class="text-center"><b>Enter new password</b></p>
        <input class="form-control" type="password" id="password" name="password" placeholder="Enter New Password"
        required minlength="6" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Your password must be at least 6 characters as well as contain at least one uppercase, one lowercase, and one number.">
    <label></label>
    </div>

    <div class="form-group">
    <span class="icon"><i class='bx bxs-lock-alt' ></i></span>
    <p class="text-center"><b>Confirm new password</b></p>
        <input class="form-control" type="password" id="cpassword" name="cpassword" placeholder="Confirm New Password"
        required minlength="6" maxlength="16" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Your password must be at least 6 characters as well as contain at least one uppercase, one lowercase, and one number.">
    </div>

    <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
        <input class="btn" type="submit" name="change-password" value="Change" require>
    </div>
</form>
</div>
</section>




<script>
    const password = document.getElementById("password");
    // Set Focus
    setTimeout(() =>{
        password.focus();
    }, setTimeout);
</script>




<?php
include ('inc/footer.php');
require ('inc/script.php');
?>







