<?php /* Template Name: Personal Loan Calc Template */
get_header();
?>
<style>


        #result {
            margin-top: 20px;
        }

        #monthly-payment {
            font-size: 24px;
            color: green;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    <div class="p-3">
        <h2>Personal Loan Calculator</h2>
        <p>**Personal Loan Calculator** is an intuitive tool designed to help users estimate monthly payments, total interest, and overall costs of personal loans. By entering key details such as loan amount, interest rate, and repayment term, users can quickly evaluate different scenarios and make informed financial decisions. Whether planning a major purchase or consolidating debt, this calculator provides a clear picture of loan affordability and repayment planning.</p>
        <form id="loan-form">
        <div class="row p-3">
        <div class="col-6">
            <div class="mb-3 mt-3 form-group">
                <label for="amount">Loan Amount:</label>
                <input type="text" class="form-control"  id="amount" placeholder="Enter loan amount" required>
            </div>
            <div class="mb-3 mt-3 form-group">
                <label for="interest">Annual Interest Rate (%):</label>
                <input type="text" class="form-control"  id="interest" step="0.01" placeholder="Enter interest rate" required>
            </div>
            </div>
      <div class="col-6">

            <div class="mb-3 mt-3 form-group">
                <label for="years">Loan Term (Years):</label>
                <input type="text" class="form-control"  id="years" placeholder="Enter number of years" required>
            </div>
            <div class=" mb-3 mt-3 form-group">
                <label for="currency">Select Currency:</label>
                <select id="currency" class="form-control" >
                    <option value="$">USD ($)</option>
                    <option value="€">EUR (€)</option>
                    <option value="£">GBP (£)</option>
                    <option value="₹">INR (₹)</option>
                    <option value="¥">JPY (¥)</option>
                </select>
            </div>
        </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
       </div>
        </form>

        <div id="result">
            <h2>Monthly Payment: <span id="monthly-payment">$0</span></h2>
        </div>

        <canvas id="balanceChart"></canvas>
    </div>

    <script>
        document.getElementById('loan-form').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get input values
            const amount = parseFloat(document.getElementById('amount').value);
            const interest = parseFloat(document.getElementById('interest').value) / 100 / 12;
            const years = parseInt(document.getElementById('years').value);
            const payments = years * 12;
            const currencySymbol = document.getElementById('currency').value;

            // Calculate monthly payment
            const x = Math.pow(1 + interest, payments);
            const monthly = (amount * x * interest) / (x - 1);

            // Display monthly payment with selected currency symbol
            document.getElementById('monthly-payment').innerHTML = `${currencySymbol}${monthly.toFixed(2)}`;

            // Calculate balance over time
            let balance = amount;
            const balances = [];
            for (let i = 0; i <= payments; i++) {
                balances.push(balance);
                balance -= (monthly - balance * interest);
            }

            // Generate chart
            generateChart(balances, currencySymbol);
        });

        function generateChart(balances, currencySymbol) {
            const ctx = document.getElementById('balanceChart').getContext('2d');
            const labels = balances.map((_, index) => `Month ${index}`);

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: `Remaining Loan Balance (${currencySymbol})`,
                        data: balances,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderWidth: 1,
                        fill: true
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: false
                        }
                    }
                }
            });
        }
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

    <script>
       (function ($) {
    $(document).ready(function () {
        // Apply mask to the input field
       // $('#masked-input').mask('000-000-0000'); // Example: Phone number format
          $('#amount').mask('0000000000000');
    });
  });
</script>
    <?php
 get_footer();?>