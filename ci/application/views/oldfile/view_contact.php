
<!-- Contact Form Section Starts Here -->
<section class="get-touch">
   <div class="container">

   <div class="touch-head wow fadeInUp">
   <h5><?php echo $page_contact['contact_heading']; ?></h5>
   <p>Contact us For Support </p>
   </div>

   <div class="contact-form">
   <?php
    if($this->session->flashdata('error')) {
        echo '<div class="error-class">'.$this->session->flashdata('error').'</div>';
    }
    if($this->session->flashdata('success')) {
        echo '<div class="success-class">'.$this->session->flashdata('success').'</div>';
    }
    ?>
    <?php echo form_open(base_url().'contact/send_email',array('class' => '')); ?>
      <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <div class="form-field2 wow fadeInUp">
      <sup>*</sup>
      <input type="text" placeholder="First Name " name="firstname" required>
      </div>

      <div class="form-field2 wow fadeInUp">
      <sup>*</sup>
      <input type="text" placeholder="Last Name " name="lastname" required>
      </div>

      <div class="form-field2 wow fadeInUp">
      <sup>*</sup>
      <input type="email" placeholder="Email Address" name="email" required>
      </div>

      <div class="form-field2 wow fadeInUp">
      <sup>*</sup>
      <input type="text" placeholder="Subject" name="subject" required>
      </div>

      </div>

      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <div class="form-field2 wow fadeInUp">
      <textarea placeholder="Message" name="message"></textarea>
      </div>

      </div>

      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
      <div class="form-field2 wow fadeInUp">
      <input type="submit" value="Send Message!" name="">
      </div>
      </div>

      </div>


  <?php echo form_close(); ?>
   </div>

   </div>
</section>
<!-- Contact Form Section Ends Here -->

<!--Map Start-->

    <?php echo $page_contact['contact_map']; ?>

<!--Map End-->