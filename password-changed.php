<?php 
require_once "controller-data.php";
require ('inc/head.php');
include ('inc/header.php');


if($_SESSION['info'] == false){
    header('Location: index.php');  
}
?>



<section class="password-changed" id="password-changed">
<div class="form-container">

        <h2 style="text-align: center; font-size: 25px;">Code Verification</h2>
        <div class="validate">
            <?php 
            if(isset($_SESSION['info'])){
                ?>
                <div class="validate">
                <?php echo $_SESSION['info']; ?>
                </div>
                <?php
            }
            ?>
        <form action="login.php" method="POST">
        <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
                        <input class="btn" type="submit" name="login-now" value="Login Now">
                    </div>
                </form>
</div>
</section>




<?php
include ('inc/footer.php');
require ('inc/script.php');
?>
