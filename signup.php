<?php 
require ('inc/head.php');
include ('inc/header.php');
?>


<section class="register" id="register">
<div class="form-container">
<!-- Sign Up Form -->
<form id="signup-form" method="POST" name="signup" autocomplete="">
      <h2 style="text-align: center; font-size: 25px; margin-bottom: 15px;">Create an Account</h2>
      
    <div style="display: flex; margin-top: 25px;">
    <div style="margin-right: 10px; flex-grow: 1;">
    <label for="firstName"><b>Firstname</b><span class="required">*</span></label>
    <input type="text" id="firstName" name="firstName" placeholder="Firstname" autofocus
    pattern="^[a-zA-Z ]+$" required oninvalid="this.setCustomValidity(this.validity.valueMissing ? 'Please fill out this field' : 'Please enter a valid name')" oninput="this.setCustomValidity('')">
    </div>
    <div style="margin-right: 10px; flex-grow: 1;">
    <label for="middleName"><b>Middlename</b><span class="required"> </span></label>
    <input type="text" id="middleName" name="middleName" placeholder="Optional"
    pattern="^[a-zA-Z ]+$" oninvalid="this.setCustomValidity(this.validity.valueMissing ? 'Please fill out this field' : 'Please enter a valid name')" oninput="this.setCustomValidity('')">
    </div>
    <div style="flex-grow: 1;">
    <label for="lastName"><b>Lastname</b><span class="required">*</span></label>
    <input type="text" id="lastName" name="lastName" placeholder="Lastname"
    pattern="^[a-zA-Z ]+$" required oninvalid="this.setCustomValidity(this.validity.valueMissing ? 'Please fill out this field' : 'Please enter a valid name')" oninput="this.setCustomValidity('')">
    </div>
    </div>
    <div style="display: flex;">
    <div style="margin-right: 10px;">
  <label for="gender"><b>Gender</b><span class="required">*</span></label>
    <select id="gender" name="gender" 
    required oninvalid="this.setCustomValidity('Please select your gender')" oninput="this.setCustomValidity('')">
        <option value="">Select Here</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
  </div>
      <div style="flex-grow: 1;">
    <label for="address"><b>Address</b><span class="required">*</span></label>
    <input type="text" id="address" name="address" required placeholder="Address"></input>
    </div>
    </div>
    
    <div style="display: flex;">
    <div style="margin-right: 10px; flex-grow: 1;" > 
    <label for="email"><b>Email</b><span class="required">*</span></label>
    <input type="email" id="email" name="email" placeholder="Email"
    pattern="[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com|hotmail\.com)$" required
    oninvalid="this.setCustomValidity(this.validity.valueMissing ? 'Please fill out this field' : 'Please enter a valid email address')" oninput="this.setCustomValidity('')">
    </div> 
    <div style="flex-grow: 1;"> 
    <label for="contactNo"><b>Contact No.</b><span class="required">*</span></label>
    <input type="text" id="contactNo" name="contactNo" placeholder="Phone Number"
    pattern="^09\d{9}$" required oninvalid="this.setCustomValidity(this.validity.valueMissing ? 'Please fill out this field' : 'Please enter a valid contact number')" oninput="this.setCustomValidity('')">
</div> 
</div>
<?php
      if(count($errors) == 1){
            ?>
            <div class="validate">
                <?php
                foreach($errors as $showerror){
                    echo $showerror;
                }
                ?>
            </div>
            <?php
        }elseif(count($errors) > 1){
            ?>
            <div class="dualval">
                <?php
                foreach($errors as $showerror){
                    ?>
                    <li><?php echo $showerror; ?></li>
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    <div class="password" style="display: flex;">
    <div style="margin-right: 10px; flex-grow: 1;">
    <label for="password"><b>Password</b><span class="required">*</span></label>
    <div class="password-container1">
    <input type="password" id="password" name="password" placeholder="Password" onkeyup="checkPasswordMatch()"
    required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must contain at least 8 characters, including at least one uppercase letter, one lowercase letter, and one number">
    <i class="fa fa-eye-slash" id="toggle-password1"></i> </input>
  </div>
  </div>
    <div style="flex-grow: 1;">
    <label for="confirmPassword"><b>Confirm Password</b><span class="required">*</span></label>
    <div class="password-container2"> 
    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password"
    required onkeyup="checkPasswordMatch()">
    <i class="fa fa-eye-slash" id="toggle-password2"></i> </input>
  </div>
  </div>
  </div>
  <!-- <div id="passwordMatchMessage"></div> -->
  <div class="create-account" style="font-size: 15px;">
    <label for="remember">
      <input style="font-size: 20px;" type="checkbox" required> I agree to the <a id="opentermModal" style="color: green; text-decoration: underline;">Terms and Conditions</a> of the Royal Travels.</input>
    </label>
  </div>
  <div style="display: flex; justify-content: center; align-items: center; ">
    <button type="submit" name="signup" id="signup">Sign Up</button>
</div>
    <div class="create-account">
        <p style="font-size: 15px; margin-top: 15px;">Already Have An Account? <a style="color: blue; text-decoration: underline;" href="login.php" type="submit" name="login" id="login-button1">Login</a></p>
      </div>
      </form>
    </div>







<!-- Terms and Condition Modal -->
<div id="termsModal">
  <div id="termsContent">
      <div>
    <span  id="closeModal">&times;</span>
    </div>
    <h2 style="text-align: center;margin-bottom: 5px;">Terms and Conditions</h2>
    <p><b>Introduction: </b>These Terms and Conditions shall govern your use of the Royal Travels and the services provided therein. By creating an account and using the Portal, you agree to these Terms and Conditions in full. If you disagree with these Terms and Conditions, you must not use the Portal.</p>
    <p><b>Account Creation: </b>You must be 18 years or older to create an account and use the Portal. You must provide accurate and complete information during the account creation process, including your full name, gender, address, email address, and phone number. You are solely responsible for maintaining the confidentiality and security of your account and password. You agree to notify us immediately of any unauthorized use of your account.</p>
    <p><b>Service Availability: </b>The Royal Travels provides an online platform for users to search, compare, and book lodge accommodations. However, we do not guarantee the availability of any particular lodge accommodation listed on the Portal. The availability of the accommodations is subject to change without notice.</p>
    <p><b>Lodge Accommodation Reservations: </b>By making a reservation through the Portal, you agree to comply with the terms and conditions of the respective lodge accommodation provider. You understand and acknowledge that the Royal Travels is not responsible for the actual provision of the lodge accommodations. Any issues or complaints regarding the lodge accommodations should be addressed to the respective provider.</p>
    <p><b>Pricing and Payment: </b>The prices listed on the Portal are provided by the respective lodge accommodation providers and are subject to change without notice. We do not guarantee that the prices are accurate or up-to-date. The actual price of the lodge accommodation may differ from the price listed on the Portal. All payments made through the Portal are subject to the respective lodge accommodation provider's terms and conditions.</p>
    <p><b>User Conduct: </b>You agree not to use the Royal Travels for any unlawful purpose or in any way that may cause harm to the Portal, its users, or the respective lodge accommodation providers. You agree not to use any automated means, including robots, spiders, or scrapers, to access the Portal or its content. You also agree not to engage in any activity that interferes with or disrupts the Portal or its services.</p>
    <p><b>Intellectual Property: </b>The Royal Travels and its content, including but not limited to text, graphics, logos, images, and software, are the property of the respective owners and are protected by copyright and other intellectual property laws. You may not copy, reproduce, distribute, or create derivative works of any content on the Portal without the express written permission of the respective owners.</p>
    <p><b>Limitation of Liability: </b>The Royal Travels and its owners, employees, agents, and affiliates shall not be liable for any damages, including but not limited to direct, indirect, incidental, punitive, or consequential damages, arising from the use or inability to use the Portal or its services. We shall not be liable for any damages resulting from the actions or omissions of the respective lodge accommodation providers.</p>
    <p><b>Modification and Termination: </b>We reserve the right to modify or terminate these Terms and Conditions or the Portal at any time without notice. Any modifications to these Terms and Conditions shall be effective immediately upon posting. If you do not agree with the modified Terms and Conditions, you must stop using the Portal.</p>
    <p><b>Governing Law: </b>These Terms and Conditions shall be governed by and construed in accordance with the laws of [Insert governing law and jurisdiction]. Any disputes arising from the use of the Portal shall be subject to the exclusive jurisdiction of the courts of [Insert governing law and jurisdiction].</p></p>
  </div>
</div>

</section>


<script>
  const openModalBtn = document.getElementById('opentermModal');
  const closeModalBtn = document.getElementById('closeModal');
  const modalterm = document.getElementById('termsModal');

  openModalBtn.addEventListener('click', () => {
    modalterm.style.display = 'block';
  });

  closeModalBtn.addEventListener('click', () => {
    modalterm.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === modalterm) {
      modalterm.style.display = 'none';
    }
});


// toggle password
  const passwordInput1 = document.getElementById("password");
  const togglePasswordButton1 = document.getElementById("toggle-password1");

  togglePasswordButton1.addEventListener("click", function() {
  const type = passwordInput1.getAttribute("type") === "password" ? "text" : "password";
  passwordInput1.setAttribute("type", type);
  togglePasswordButton1.classList.toggle("fa-eye-slash");
  togglePasswordButton1.classList.toggle("fa-eye");
});


// toggle confirm password
  const passwordInput2 = document.getElementById("confirmPassword");
  const togglePasswordButton2 = document.getElementById("toggle-password2");

  togglePasswordButton2.addEventListener("click", function() {
  const type = passwordInput2.getAttribute("type") === "password" ? "text" : "password";
  passwordInput2.setAttribute("type", type);
  togglePasswordButton2.classList.toggle("fa-eye-slash");
  togglePasswordButton2.classList.toggle("fa-eye");
});


// password validation
function checkPasswordMatch() {
  var password = document.getElementById("password");
  var confirmPassword = document.getElementById("confirmPassword");
  if (password.value != confirmPassword.value) {
    confirmPassword.setCustomValidity("Passwords do not match");
  } else {
    confirmPassword.setCustomValidity("");
  }
}







</script>






<?php
include ('inc/footer.php');
require ('inc/script.php');
?>