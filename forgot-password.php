<?php 
require ('inc/head.php');
include ('inc/header.php');

?>


<section class="forgot-password" id="forgot-password">
<div class="form-container">
<a href="login.php" style="font-size: 15px; text-decoration: underline;" class="back-btn"><i class='bx bx-arrow-back'></i>Back</a>
      <form action="forgot-password.php" method="POST" autocomplete="">
        <h2 style="text-align: center; font-size: 25px; margin-bottom:60px;">Forgot Password!</h2>
        
    <p class="text-center"><b>Enter your email address</b></p>
    <label class="forgot">
    <div class="form-group">    
        <span class="icon"><i class='bx bxs-envelope'></i></span>
        <input class="form-control" type="email" name="email" placeholder="Email" id="forgotpass" required value="<?php echo $email ?>">
        </div>
    </label>
    <?php
        if(count($errors) > 0){
            ?>
            <div class="validate">
                <?php 
                    foreach($errors as $error){
                        echo $error;
                    }
                ?>
            </div>
            <?php
        }
    ?>
    <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
        <input class="btn" type="submit" name="check-email" value="Continue">
    </div>
      </form>
</div>
</section>




<script>
//Set Focus
const forgotpass = document.getElementById("forgotpass");

setTimeout(() => {
forgotpass.focus();
}, setTimeout);
</script>




<?php
include ('inc/footer.php');
require ('inc/script.php');
?>
