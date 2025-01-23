<?php /* Template Name: Stock Profit Calc Template */
get_header();
?>
<style>
        /* body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        } */

        .calculator-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
    </style>
     <script>
        function calculateProfit() {
            // Get values from the input fields
            const purchasePrice = parseFloat(document.getElementById("purchasePrice").value);
            const sellingPrice = parseFloat(document.getElementById("sellingPrice").value);
            const quantity = parseInt(document.getElementById("quantity").value);
            const currency = document.getElementById("currency").value;

            // Calculate profit
            const profit = (sellingPrice - purchasePrice) * quantity;

            // Display the result with the selected currency
            document.getElementById("result").innerText = `Profit: ${profit.toFixed(2)} ${currency}`;
        }
    </script>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
       <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Ajil" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
      <h2><?php echo get_the_title();?></h2>
      <?php echo get_the_content();?>
          </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section"> <!-- Section Title -->
    <!-- <div class="container calculator-container"> -->
      <div class="row p-3">
        <h1>Stock Profit Calculator</h1>
        <p>Quickly estimate your profit margins with this easy-to-use tool. Enter costs, revenues, and additional variables to analyze profitability and make smarter business decisions.</p>
        <div class="col-6">
        <div class="mb-3 mt-3">
        <label for="purchasePrice">Purchase Price per Share:</label>
        <input type="text"  class="form-control" id="purchasePrice" placeholder="Enter purchase price" required>
        </div>

        <div class="mb-3 mt-3">
        <label for="sellingPrice">Selling Price per Share:</label>
        <input type="text" class="form-control" id="sellingPrice" placeholder="Enter selling price" required>
        </div>
        </div>
        <div class="col-6">

        <div class="mb-3 mt-3">
        <label for="quantity">Number of Shares:</label>
        <input type="text" class="form-control"  id="quantity" placeholder="Enter quantity of shares" required>
        </div>

        <div class="mb-3 mt-3">
        <label for="currency">Choose Currency:</label>
        <select id="currency">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="GBP">GBP</option>
            <option value="INR">INR</option>
            <option value="JPY">JPY</option>
        </select>
        </div>
        </div>

        <div class="mb-3 mt-3">
        <button class="btn btn-primary" onclick="calculateProfit()">Calculate Profit</button>
        <h2 id="result">Profit:</h2>
        </div>
    </div>
    <!-- </div> -->


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
    <script>
         (function ($) {
    $(document).ready(function () {
        // Apply mask to the input field
           $('#purchasePrice').mask('0000000000000');
           $('#quantity').mask('0000000000000');
           $('#sellingPrice').mask('0000000000000');
    });
  });
</script>
    <?php
 get_footer();?>