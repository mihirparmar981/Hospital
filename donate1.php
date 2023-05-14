<!-- HEADER -->
<?php
include('include/header.php');
?>

<!-- DONATE1_WRAPPER -->
<div class="donate1_wrapper">
  <!-- CONTAINER -->
  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <!-- FORM -->
    <div class="form">
      <!-- CONTACT-INFO -->
      <div class="contact-info">
        <h3 class="title">Donate to our Hospital.</h3>
        <p class="text">
          Donating to our hospital will help provide medical care and support to those who cannot afford it.
          Your contribution, no matter how small, can make a difference in the lives of the less fortunate in our
          community. Join us in our mission to improve access to healthcare for all.
        </p>
        <!-- INFO -->
        <div class="info">
          <!-- INFORMATION -->
          <div class="information">
            <img src="img/location.png" class="icon" alt="" />
            <p>101, A-Wing, Near Jamtara Hotel</p>
          </div>
          <!-- INFORMATION -->
          <div class="information">
            <img src="img/email.png" class="icon" alt="" />
            <p>enquiry@youhealhospital.com</p>
          </div>
          <!-- INFORMATION -->
          <div class="information">
            <img src="img/phone.png" class="icon" alt="" />
            <p>969-969-9696</p>
          </div>
        </div>
        <!-- SOCIAL-MEDIA -->
        <div class="social-media">
          <p>Connect with us :</p>
          <!-- SOCIAL-ICONS -->
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- CONTACT-FORM -->
      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>
        <!-- FORM -->
        <form>
          <h3 class="title">Donate here</h3>
          <!-- INPUT-CONTAINER -->
          <div class="input-container">
            <input type="text" name="name" class="input" required />
            <label for="">Name</label>
            <span>Name</span>
          </div>
          <!-- INPUT-CONTAINER -->
          <div class="input-container">
            <input type="email" name="email" class="input" required />
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <!-- INPUT-CONTAINER -->
          <div class="input-container">
            <input type="tel" name="phone" class="input" required />
            <label for="">Phone</label>
            <span>Phone</span>
          </div>
          <!-- INPUT-CONTAINER -->
          <div class="input-container textarea">
            <textarea name="message" class="input"></textarea>
            <label for="">Amount</label>
            <span>Amount</span>
          </div>
          <!-- ICON -->
          <div class="icon1">
            <p><i class="fas fa-light fa-indian-rupee-sign" style="color: #fff;"></i></p>
          </div>
          <!-- BUTTON -->
          <button type="submit"  formaction="payment.php" class="btn">Payment</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- SCRIPT -->
<?php
include('include/script.php');
?>