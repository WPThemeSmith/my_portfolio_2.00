 <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <?php
            // Testimonials data
            $testimonials = [
              [
                "name" => "Saul Goodman",
                "role" => "Ceo & Founder",
                "image" => "assets/img/testimonials/testimonials-1.jpg",
                "content" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
                "stars" => 5
              ],
              [
                "name" => "Sara Wilsson",
                "role" => "Designer",
                "image" => "assets/img/testimonials/testimonials-2.jpg",
                "content" => "Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.",
                "stars" => 5
              ],
              [
                "name" => "Jena Karlis",
                "role" => "Store Owner",
                "image" => "assets/img/testimonials/testimonials-3.jpg",
                "content" => "Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.",
                "stars" => 5
              ],
              [
                "name" => "John Larson",
                "role" => "Entrepreneur",
                "image" => "assets/img/testimonials/testimonials-4.jpg",
                "content" => "Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.",
                "stars" => 5
              
              ]
            ]
          ?>
          <div class="swiper-wrapper">

            <!-- Testimonial Item -->
            <?php foreach ($testimonials as $testimonial): ?>
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <div class="row gy-4 justify-content-center">
                    <div class="col-lg-6">
                      <div class="testimonial-content">
                        <p>
                          <i class="bi bi-quote quote-icon-left"></i>
                          <span><?php echo ($testimonial['content']); ?></span>
                          <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <h3><?php echo ($testimonial['name']); ?></h3>
                        <h4><?php echo ($testimonial['role']); ?></h4>
                        <div class="stars">
                          <?php for ($i = 0; $i < $testimonial['stars']; $i++): ?>
                            <i class="bi bi-star-fill"></i>
                          <?php endfor; ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2 text-center">
                      <img src="<?php echo ($testimonial['image']); ?>" class="testimonial-img" alt="">
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

            

            <!-- End Testimonial Item -->

          </div>
          <!-- End Swiper Wrapper -->

          <div class="swiper-pagination"></div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->
