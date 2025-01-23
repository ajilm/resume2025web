<?php /* Template Name: Youtube extract Template */
get_header();
?>


    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
       <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Ajil" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <h2><?php echo get_the_title();?></h2>
      <?php echo get_the_content();?>      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section"> <!-- Section Title -->
    <div class="row p-3">
        <h2>Youtube data extractor</h2>
        <p>YouTube Data Extractor is a powerful tool designed to effortlessly gather and analyze data from YouTube. It allows users to extract video details, such as titles, descriptions, views, likes, comments, and more, enabling content creators, marketers, and researchers to gain valuable insights. Whether you're tracking trends, optimizing your content strategy, or conducting competitive analysis, this tool simplifies data collection and visualization, saving time and effort.</p>

        <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
        <textarea id="youtube-urls" rows="10" cols="50" placeholder="Enter YouTube URLs here, one per line"></textarea>
        <button id="generate-data" class="btn btn-primary">Generate Data</button>
        </div>
        <div class="col-lg-8 content">
        <div id="output" class="ps-5"></div>
        </div>
        </div>





    </div>
    <script>
          (function ($) {
        $(document).ready(function () {
            $('#generate-data').click(function () {
                const urls = $('#youtube-urls').val().split('\n');
                $('#output').empty();

                urls.forEach(function (url) {
                    if (url.trim() !== "") {
                        const videoId = url.split('v=')[1]?.split('&')[0];
                        if (videoId) {
                            const apiUrl = `https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=${videoId}&format=json`;

                            $.getJSON(apiUrl, function (data) {
                                const title = data.title;
                                const description = data.author_name; // YouTube oEmbed doesn't provide description

                                // Attempt to load the highest quality image, with fallbacks
                                const maxResUrl = `https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
                                const highResUrl = `https://img.youtube.com/vi/${videoId}/hqdefault.jpg`;
                                const sdResUrl = `https://img.youtube.com/vi/${videoId}/sddefault.jpg`;

                                // Create an image element to check if maxResUrl exists
                                const img = new Image();
                                img.src = maxResUrl;

                                img.onload = function() {
                                    const thumbnailUrl = maxResUrl;
                                    appendOutput(title, description, thumbnailUrl);
                                };

                                img.onerror = function() {
                                    // If maxresdefault.jpg doesn't exist, try hqdefault.jpg
                                    const fallbackImg = new Image();
                                    fallbackImg.src = highResUrl;

                                    fallbackImg.onload = function() {
                                        appendOutput(title, description, highResUrl);
                                    };

                                    fallbackImg.onerror = function() {
                                        // If hqdefault.jpg also fails, fallback to sddefault.jpg
                                        appendOutput(title, description, sdResUrl);
                                    };
                                };
                            });
                        }
                    }
                });
            });

            function appendOutput(title, description, thumbnailUrl) {
                const outputHtml = `
                    <div>
                        <h3><strong>Video Title:</strong>${title}</h3>
                        <p><strong>Video Description:</strong> ${description}</p>
                        <p><strong>Video Thumbnail URL:</strong> <a href="${thumbnailUrl}" target="_blank">${thumbnailUrl}</a></p>
                        <img src="${thumbnailUrl}" alt="${title}" class="img-fluid" />
                        <hr>
                    </div>
                `;
                $('#output').append(outputHtml);
            }
        });

      })(jQuery);
    </script>
    </section>


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>

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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

          <?php
$args = array(
  'post_type'      => 'testimonials',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'orderby'        => 'title',
  'order'          => 'ASC',
);
$custom_query = new WP_Query($args);
if ($custom_query->have_posts()) {

  while ($custom_query->have_posts()) {
      $custom_query->the_post();
      echo '
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
 <i class="bi bi-quote quote-icon-left"></i> <span>'.get_field('testimonial_description',get_the_ID()).'</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="'.get_the_post_thumbnail_url().'" class="testimonial-img img-fluid" alt="">
                <h3>'.get_the_title().'</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>';

  }

}?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </section><!-- /Testimonials Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Let’s Connect</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="fa-solid fa-location-crosshairs"></i>
                <div>
                  <h3>Address</h3>
                  <p><?php echo $address_call_email[0];?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="fa-solid fa-phone"></i>
                <div>
                  <h3>Call Us</h3>
                  <p><?php echo $address_call_email[1];?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="fa-regular fa-envelope"></i>
                <div>
                  <h3>Email Us</h3>
                  <p><?php echo $address_call_email[2];?></p>
                </div>
              </div><!-- End Info Item -->
              <?php echo $map_embedd;?>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            </div>
          </div>

          <div class="col-lg-7">
            <?php echo do_shortcode('[contact-form-7 id="bcbb90b" title="Contact form 1"]');?>
          </div><!-- End Contact Form -->
        </div>
      </div>
    </section><!-- /Contact Section -->
    <?php
 get_footer();?>