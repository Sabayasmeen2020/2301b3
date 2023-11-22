<?php  include("header.php") ?>
     <!-- ======= Contact Section ======= -->
     <section id="contact">
      <div class="container-fluid" data-aos="fade-up">
        <br>
        <br>
        <br>
        <br>
        <div class="section-header mt-5">
          <h3>Signup</h3>
        </div>
    
        <div class="row ">
            <div class="form w-50 mx-auto">
              <form action="addUser.php" method="post" role="form" class="php-email-form1">
                <div class="row">
                    <div class="form-group col-lg-12 mt-3 mt-lg-0">
                    <input type="text" class="form-control" name="user_name" id="email" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-lg-12 mt-3 mt-lg-0">
                    <input type="email" class="form-control mt-2" name="user_email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group col-lg-12">
                    <input type="password" name="user_password" class="form-control mt-2" id="name" placeholder="Your Password" required>
                    </div>
                    <div class="form-group col-lg-12">
                    <input type="password" name="user_phone" class="form-control mt-2" id="name" placeholder="Your Phone" required>
                    </div><div class="form-group col-lg-12">
                    <input type="password" name="address" class="form-control mt-2" id="name" placeholder="Address" required>
                    </div><div class="form-group col-lg-12">
                    <input type="password" name="city" class="form-control mt-2" id="name" placeholder="Your City" required>
                    </div>
                    <div class="form-group col-lg-12">
                    <input type="password" name="country" class="form-control mt-2" id="name" placeholder="Your Country" required>
                    </div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message" class="mt-3">Submit</button></div>
                <p class="mt-3 text-center">Already have an account?<a href="signup.php"> Login</a></p>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
<?php  include("footer.php") ?>
