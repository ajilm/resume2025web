<?php /* Template Name: Homepage Template */
get_header();
$about = get_field('profile_about');
//$about = 'Detail-oriented Wordpress/PHP Developer with extensive experience with corePHP and WordPress(core development).Skilled in creating  responsive websites.';
$webdeveloper_title = get_field('webdeveloper_title');
$webdeveloper_title = 'Web Developer';
$webdeveloper_description = get_field('webdeveloper_description');
// $webdeveloper_description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolor';
$profile_a = explode('|',get_field('profile_left'));
$profile_b = explode('|',get_field('profile_right'));

$Birthday = $profile_a[0];
$Website = $profile_a[1];
$Phone = $profile_a[2];
$City = $profile_a[3];
$Age = $profile_b[0];
$Degree = $profile_b[1];
$Email = $profile_b[2];
$subprofiledescription = get_field('subprofiledescription');
// $subprofiledescription='  Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              // Cupiditate ut d';
$skillstring_a = explode('|',get_field('skillstring_left'));
$skillstring_b = explode('|',get_field('skillstring_right'));

$address_call_email = explode('|',get_field('address_call_email'));


$resume_content = get_field('resume_content');
$summary_content= get_field('summary_content');
$experience= get_field('experience');
$map_embedd= get_field('map_embedd');
?>
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
       <img src="<?php echo get_the_post_thumbnail_url();?>" alt="Ajil" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Ajil</h2>
        <p>I'm <span class="typed" data-typed-items="Developer,Designer ">Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section"> <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p><?php echo $about;?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?php echo get_field('profile_image');?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2><?php echo $webdeveloper_title;?></h2>
            <p class="fst-italic py-3"><?php echo $webdeveloper_description;?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo $Birthday;?> </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><?php echo $Website;?> </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $Phone;?> </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?php echo $City;?> </span></li>
                </ul>
              </div>
              <div class="col-lg-6">
             <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?php echo $Age;?> </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?php echo $Degree;?> </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $Email;?></span></li>
                 </ul>
              </div>
            </div>
            <p class="py-3"><?php echo $subprofiledescription;?>
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section d-none">
       <div class="container" data-aos="fade-up" data-aos-delay="100">
 <div class="row gy-4">
 <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
            </div>
          </div><!-- End Stats Item -->
 <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
            </div>
          </div><!-- End Stats Item --> </div>
 </div>
 </section>
 <!-- Skills Section -->
    <section id="skills" class="skills section light-background">
 <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Necessitati  velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
          <div class="col-lg-6">
          <?php
foreach($skillstring_a as $sd){
 $h = explode('+',$sd);
  echo ' <div class="progress">
              <span class="skill"><span>'.$h[0].'</span> <i class="val">'.$h[1].'%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="'.$h[1].'" aria-valuemin="0" aria-valuemax="'.$h[1].'"></div>
              </div>
            </div><!-- End Skills Item -->';

}
?>
            </div>
            <div class="col-lg-6">
            <?php
            foreach($skillstring_b as $sd){
            $h = explode('+',$sd);
            echo ' <div class="progress">
            <span class="skill"><span>'.$h[0].'</span> <i class="val">'.$h[1].'%</i></span>
            <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="'.$h[1].'" aria-valuemin="0" aria-valuemax="'.$h[1].'"></div>
            </div>
            </div><!-- End Skills Item -->';

            }
            ?>
          </div>
        </div>
      </div>
    </section><!-- /Skills Section -->
    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p><?php echo $resume_content;?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4>AJIL K MOHANAN</h4>
              <p><em><?php echo $summary_content;?></em></p>
            </div><!-- Edn Resume Item -->
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Master of Computer Application</h4>
              <h5>2010 - 2012</h5>
              <p><em>SMU, INDIA</em></p>
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <h4>Bachelor of Computer Application</h4>
              <h5>2007 - 2010</h5>
              <p><em>SMU, INDIA</em></p>
            </div><!-- Edn Resume Item -->

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <?php echo $experience; ?>
          </div>
        </div>
      </div>
    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Featured Projects</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <?php
          $categories = get_categories(array(
          'orderby' => 'name',
          'order'   => 'ASC',
          'hide_empty' => true,
          'exclude'    => get_option('default_category')
          ));

          echo '  <li data-filter="*" class="filter-active">All</li>';
          foreach ($categories as $category) {

          echo '<li data-filter=".filter-'.$category->slug.'">'.$category->name.'</li>';
          }
          ?>
          </ul>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          <?php
$args = array(
  'post_type'      => 'portfolio', // Replace with your custom post type slug
  'post_status'    => 'publish',              // Only get published posts
  'posts_per_page' => -1,                     // Get all posts
  'orderby'        => 'title',                // Order by title
  'order'          => 'ASC',                  // Order ascending
);
$custom_query = new WP_Query($args);
if ($custom_query->have_posts()) {

  while ($custom_query->have_posts()) {
      $custom_query->the_post();
        $post_id = get_the_ID(); // Get the current post ID
        $categories = get_the_category($post_id);

        if (!empty($categories)) {
          $category_names = array(); // Array to store category names
          foreach ($categories as $category) {
              $category_names[] = 'filter-'.$category->slug; // Add category name to the array
          }
          $categories = implode(' ', $category_names); // Join category names with commas
      }
      echo ' <div class="col-lg-4 col-md-6 portfolio-item isotope-item '.$categories.'">
              <div class="portfolio-content  card h-100">
                  <img src="'.get_the_post_thumbnail_url().'" class="card-img-top" alt="">
                  <div class="card-body">
                  <p class="card-text">'.get_the_title().'</p>
                  <a target="_blank" href="'.get_field('url',get_the_ID()).'">View</a>
                  </div>
              </div>
            </div>';
  }

}
// Reset post data to avoid conflicts
wp_reset_postdata();
          ?>
        </div>
          </div><!-- End Portfolio Container -->
        </div>
      </div>
    </section><!-- /Portfolio Section -->
    <section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Uses</h2>
        <p>This is a list of the equipment, services and software that I use most frequently. I've been inspired by <a href="https://uses.tech/" title="Usec Tech" rel="nofollow" class="text-violet-800 dark:text-pink-500 dark:hover:text-pink-600 hover:text-violet-900">uses.tech</a> and <a href="https://wesbos.com/uses/" title="WesBos Uses" rel="nofollow" class="text-violet-800 dark:text-pink-500 dark:hover:text-pink-600 hover:text-violet-900">Wes Bos' uses page</a>to create my own.</p>
      </div><!-- End Section Title -->
      <!-- Section Title -->
      <div class="container">

<div class="row gy-4"> <h5>Hardware</h5>
<ul class="list-group list-group-flush">
<ul>
            <!--[if BLOCK]><![endif]-->                <li>

                    <!--[if BLOCK]><![endif]-->
                      <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">PhpStorm 💸</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">IDE</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    With Laravel Idea plugin, Nord theme and JetBrains Mono font
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://jetbrains.com/phpstorm/" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>
                            </span>
                            <span>
                                jetbrains.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">Visual Studio Code</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">IDE</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    With Nord theme and JetBrains Mono font
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://code.visualstudio.com" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>

                            </span>
                            <span>
                                code.visualstudio.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">Warp</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">Terminal</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    Excellent terminal with way too many tabs open at all times.
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://app.warp.dev/referral/2EJYWM" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>

                            </span>
                            <span>
                                app.warp.dev
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">Raycast</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">Productivity</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    At this point I think I could not live without Raycast. I use it all the time for opening apps, previous copy/pastes, Laravel/WP/Tailwind docs etc. etc.
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://raycast.com" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>

                            </span>
                            <span>
                                raycast.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">Ivory 💸</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">Mastodon</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    I used Tweetbot so I wanted to support Tapbots and use Ivory while it is in active development and yes it is great Mastodon app for iOS and MacOS.
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://tapbots.com/ivory/" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>

                            </span>
                            <span>
                                tapbots.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">Laravel Herd</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">Webdev</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    I used Valet a long time and now I have been trying out Laravel Herd and it seems to be working great and easy to migrate from Valet.
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://herd.laravel.com" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>

                            </span>
                            <span>
                                herd.laravel.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">1Password 💸</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">Passwords</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    I have been managing my passwords for a long time with 1Password. Our company has license so we have our licences and other shared info there also.
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://1password.com" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>
                            </span>
                            <span>
                                1password.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">iCloud Drive 💸</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">Files</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    I moved away from Dropbox and started using iCloud Drive.
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://www.icloud.com/iclouddrive" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>

                            </span>
                            <span>
                                www.icloud.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
                            <li>

                    <!--[if BLOCK]><![endif]-->                        <span class="inline-flex items-center not-prose">
                            <span class="leading-snug font-bold">Mimestream 💸</span>
                            <span class="ml-2">
                                <span class="tag block tag-uses not-prose">Mail</span>
                            </span>
                        </span>
                        <br>
                     <!--[if ENDBLOCK]><![endif]-->
                    Excellent e-mail app if you or your organisation is using Google's mail. Sadly no iOS version (at least yet).
                    <!--[if BLOCK]><![endif]-->                                                <br>
                        <a target="_blank" href="https://mimestream.com" class="inline-flex items-center">
                            <span class="mr-1">
                            <i class="fa-solid fa-link"></i>

                            </span>
                            <span>
                                mimestream.com
                            </span>
                        </a>
                     <!--[if ENDBLOCK]><![endif]-->
                </li>
             <!--[if ENDBLOCK]><![endif]-->
        </ul>
</ul>
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