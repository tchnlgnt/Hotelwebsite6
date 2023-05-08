<?php 
require_once "controller-data.php"; 
require ('inc/head.php');
include ('inc/header.php');
?>

<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login.php');
}
?>

<section class="otp-form" id="otp-form">
<div class="form-container">
    <form action="otp.php" method="POST" autocomplete="off">
        <h2 style="text-align: center; font-size: 25px; margin-button: 20px;">Code Verification</h2>
        <div class="form-group" style="margin-top: 60px;">
        <p class="text-center"><b>Enter the verification code</b></p>
        <input class="form-control" type="text"  id="otpcode" name="otp" placeholder="Enter verification code" required>
        </div>
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
        <div class="form-group" style="display: flex; justify-content: center; align-items: center; margin-bottom: 15px;">
            <input class="btn" type="submit" name="check" value="Submit">
        </div>

            
        </div>
        
    </form>
</div>
</section>



<script>
const focusing = document.getElementById("otp")
    
    setTimeout(() => {
        focusing.focus();
    }, setTimeout);


const codeInput = document.getElementById("otpcode");

codeInput.addEventListener("input", function() {
  const codeValue = codeInput.value;
  if (!/^\d+$/.test(codeValue)) {
    codeInput.setCustomValidity("Please enter only numbers.");
  } else {
    codeInput.setCustomValidity("");
  }
});





</script>




<?php
include ('inc/footer.php');
require ('inc/script.php');
?>