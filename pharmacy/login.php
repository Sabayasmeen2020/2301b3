<?php 
  include("header.php");
  include("config.php");
  session_start();
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * from users where user_email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
      $_SESSION['id'] = $data['id'];
      $_SESSION['name'] = $data['user_name'];
      echo "<script>location.href = 'index.php';</script>";
    }
    else{
      echo "<script>alert('Username or password is incorrect')</script>";
    }
  }
  if(!isset($_SESSION['id'])){
?>
     <!-- ======= Contact Section ======= -->
     <section id="contact">
      <div class="container-fluid" data-aos="fade-up">
        <br>
        <br>
        <br>
        <br>
        <div class="section-header mt-5">
          <h3>Login</h3>
        </div>
    
        <div class="row ">
            <div class="form w-50 mx-auto">
              <form method="post" role="form" class="php-email-form1">
                <div class="row">
                  
                  <div class="form-group col-lg-12 mt-3 mt-lg-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group col-lg-12">
                    <input type="password" name="password" class="form-control mt-2" id="name" placeholder="Your Password" required>
                    </div>
                </div>
                <div class="text-center"><button type="submit" name="submit" title="Send Message" class="mt-3">Login</button></div>
                <p class="mt-3 text-center">Don't have an account?<a href="signup.php"> Signup</a></p>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
<?php  include("footer.php");

}
else{
  echo "<script>location.href = 'index.php';</script>";
}
 ?>
