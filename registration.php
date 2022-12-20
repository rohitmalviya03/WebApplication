<?php include 'header.php';?><!-- End Header -->

  <main id="main">
<section id="contact" class="contact">
	<br><br><br>
      <div data-aos="fade-up">
      <marquee><h5 style="margin: 30px; color: darkred;">1.5 लाख  से भी ज्यादा स्टूडेंटन्स सिख चुके है , 18+ सालो से निरंतर आपकी सेवा में  |
      </h5></marquee></div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Indore</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>globaleducation@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91..</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="insertData.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="contact" id="subject" placeholder="Contact No" required>
              </div>
              <div class="form-group mt-3">
               <input type="text" class="form-control" name="courses" rows="5" placeholder="Which Course" required>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Registration successfull Thank you!</div>
              </div>
              <div class="text-center">
                <button type="submit" style="background:darkred;">Register</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  	 </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php include 'footer.php';?>