<?php /* Template Name: Tools Template */
get_header();
echo get_field('tools_links');
$tools_links = explode('|',get_field('tools_links'));
?>
<style>
    .services .service-item {
    background-color: var(--surface-color);
    text-align: center;
    border: 1px solid
color-mix(in srgb, var(--default-color), transparent 85%);
    padding: 80px 20px;
    transition: all ease-in-out 0.3s;
    height: 100%;
}
    .services .service-item:hover {
    background: var(--accent-color);
    border-color: var(--accent-color);
}
.services .service-item .icon {
    margin: 0 auto;
    width: 64px;
    height: 64px;
    background: var(--accent-color);
    border-radius: 4px;
    display: flex
;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: 0.3s;
    transform-style: preserve-3d;
}
</style>
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
       <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Ajil" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2><?php echo get_the_title();?></h2>
        <?php echo get_the_content();?>
       </div>

    </section><!-- /Hero Section -->

    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title aos-init aos-animate" data-aos="fade-up">
        <h2>Tools</h2>
        <p>Here, you'll find a selection of versatile and user-friendly tools tailored to meet various personal and professional needs. Click on any tool to learn more and start using it today!</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <!-- <i class="fas fa-heartbeat"></i> -->
                <i class="fa-brands fa-youtube"></i>
              </div>
              <a href="<?php echo home_url().'/'.$tools_links[0];?>" class="stretched-link">
                <h3>YouTube Data Extractor</h3>
              </a>
              <p>Unlock insights from YouTube with this powerful data extraction tool. Extract video titles, descriptions, views, likes, and more to optimize your content or analyze trends.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- <i class="fas fa-pills"></i> -->
                <i class="fa-solid fa-landmark"></i>
              </div>
              <a href="<?php echo home_url().'/'.$tools_links[1];?>" class="stretched-link">
                <h3>Personal Loan Calculator</h3>
              </a>
              <p>Easily calculate your monthly loan payments, total interest, and repayment plans. Perfect for making informed financial decisions and understanding loan affordability.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <!-- <i class="fas fa-hospital-user"></i> -->
                <i class="fa-solid fa-money-bill"></i>
              </div>
              <a href="<?php echo home_url().'/'.$tools_links[2];?>" class="stretched-link">
                <h3>Profit Calculator</h3>
              </a>
              <p>Quickly estimate your profit margins with this easy-to-use tool. Enter costs, revenues, and additional variables to analyze profitability and make smarter business decisions.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

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