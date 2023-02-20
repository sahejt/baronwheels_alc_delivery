<?php 
include("header.php");
 ?>
        

<div class="banner-help" align="center" >
  <h1> Help Centre </h1>
  <h3> Welcome to BarOnWheels Help center, you can get technical support here and request refunds. </h3><br>
  <a href="bot.php"><img src="banners/alcapone.png"></a>

</div>
<br><br><br>
<div class="faq">

<section>
  <h1 class="faq-title">Commonly Asked Questions</h1>

  <div class="questions-container">
      <div class="question">
          <button>
              <span>How to Sign up for this website?</span>
              <i class="fas fa-chevron-down d-arrow"></i>
          </button>
          <p>You may click the person icon on the top right and visit the login page and then click on Register Now and proceed to sign up.</p>
</div>
      <div class="question">
          <button>
              <span>What is BarOnwheels Diamond?</span>
              <i class="fas fa-chevron-down d-arrow"></i>
          </button>
          <p>BarOnWheels Diamond is our premium membership where you may find products with additional discounts with free shipping.</p>
      </div>

      <div class="question">
          <button>
              <span>What type of products do we sell?</span>
              <i class="fas fa-chevron-down d-arrow"></i>
          </button>
          <p> We sell the best quality Beer & Spirits with the best price in all over America. </p>
      </div>

      <div class="question">
          <button>
              <span>How much does the Delivery cost?</span>
              <i class="fas fa-chevron-down d-arrow"></i>
          </button>
          <p>The delivery varies on the distance but it is usually between $4 to $10. The delivery is free if you subscribe to Diamond membership.</p>
      </div>

      <div class="question">
        <button>
            <span>Are there any discounts on products?</span>
            <i class="fas fa-chevron-down d-arrow"></i>
        </button>
        <p>There is a 15% discount on your first item along with discounts displayed on certain items. Subscribe to our Newsletter to get informed about the discounts.</p>
    </div>

    <div class="question">
      <button>
          <span>How to purchase an item?</span>
          <i class="fas fa-chevron-down d-arrow"></i>
      </button>
      <p>
        You may click checkout under the item you would like to purchase and it will take you to the checkout page and you may pay.
      </p>  </div>

  <div class="question">
    <button>
        <span> How do we prevent underage people to purchase Alcohol?</span>
        <i class="fas fa-chevron-down d-arrow"></i>
    </button>
    <p>We have strict norms against the purchase of Alcohol. You must be over 21 years old and be able to prove it by showing your ID on the time of delivery to receive your order.</p>
</div>

<div class="question">
  <button>
      <span>What is the Refund Policy?</span>
      <i class="fas fa-chevron-down d-arrow"></i>
  </button>
  <p>Refund is 100% (excluding shipping charges) for non-opened products and we don't take back any opened item.</p>
</div>

<div class="question">
  <button>
      <span>Does BarOnWheels sell Non-alcoholic products?</span>
      <i class="fas fa-chevron-down d-arrow"></i>
  </button>
  <p>No, We don't sell any Non-Alcoholic products.</p>
</div>

<div class="question">
  <button>
      <span>How to contact us?</span>
      <i class="fas fa-chevron-down d-arrow"></i>
  </button>
  <p>If you need any assistance, you may call us at <sp>+1 (415)-233-532</sp> or E-mail us at <sp>contact@baronwheels.sfsu.edu</sp>.</p>
</div>

  </div>
</section>

</div>
</div><br><br><br>

<!-- CONTACT FORM -->
<section class="contact-form-index">
<div class="contact-heading">
<h1> Get in Touch</h1>
<p> Use the contact form below to get in touch! We usually reply within 24 hours.</p>

<form action="userinformation.php" method="post">
    <input type="text" required name="user" placeholder="Your Full Name"/ >
    <input type="email" required name="email" placeholder="Your E-Mail Address"/>
    <textarea name="message" required placeholder="Type your message here....."></textarea>
    <button class="contact-form-btn" type="submit">Send Message</button>

</div>
</section>

<!-- CONTACT FORM ENDS -->



  <!--- FOOTER --> 
  <?php include("footer.php"); ?>


<!-- SCRIPTS -->


<!-- SCRIPT FOR FAQ -->

<script>
  const buttons = document.querySelectorAll('button');

buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const faq = button.nextElementSibling;
        const icon = button.children[1];

        faq.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )
</script>

<!-- SCRIPT FOR IONICONS, ICON PACK -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>