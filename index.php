<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Dawson Richey | Web Developer CV</title>
    <?php include('./header_includes.php'); ?>

  </head>

  <body class="material-template">
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide">
        <div class="header-content">
          <div class="site-title-block mobile-hidden">
            <div class="site-title">Dawson <span>Richey</span></div>
          </div>

          <!-- Navigation -->
          <?php require('./navbar.php'); ?>
          <!-- Navigation -->
        </div>
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Dawson Richey</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper">
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page" data-id="home">
              <div class="section-inner start-page-content">
                <div class="page-header">
                  <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                      <div class="photo">
                        <img src="images/profile_pic.png" alt="">
                      </div>
                    </div>

                    <div class="col-sm-8 col-md-8 col-lg-8">
                      <div class="title-block">
                        <h1>Dawson Richey</h1>
                        <div class="owl-carousel txt-rotation">                                    
                          <div class="item">
                            <div class="sp-subtitle">Web Developer</div>
                          </div>
                          <div class="item">
                            <div class="sp-subtitle">Frontend-developer</div>
                          </div>
                        </div>
                      </div>

                    <div class="social-links">



<a href="https://www.github.com/dawsonrichey" target="_blank">
  <i class="fa-brands fa-github fa-x"></i>
</a>
<a href="https://www.facebook.com/dawson.richey" target="_blank">
  <i class="fa-brands fa-facebook"></i>
</a>
<a href="https://www.instagram.com/dawson_music" target="_blank">
  <i class="fa-brands fa-instagram"></i>
</a>


<a href="https://www.flickr.com/photos/dawson_richey" target="_blank">
  <i class="fa-brands fa-flickr"></i>
</a>

<a href="https://codepen.io/dawsonrichey/" target="_blank">
  <i class="fa-brands fa-codepen"></i>
</a>

<a href="https://www.linkedin.com/in/dawsonrichey/" target="_blank">
  <i class="fa-brands fa-linkedin"></i>
</a>
<a href="mailto:info@dawsonrichey.com" target="_blank"><i class="fa-regular fa-envelope"></i></a>


</div>

                    </div>
                  </div>
                </div>

                <div class="page-content">
                  <div class="row">

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="about-me">
                        <div class="block-title">
                          <h3>About <span>Me</span></h3>
                        </div>
                        <p>I am a Results-oriented Systems Analyst with 6+ years of experience in web and software development. A fast learner who thrives on generating innovative ideas, trouble-shooting and problem-solving, and working with object-oriented programming languages including Python, PHP, and C#. I enjoy collaborating with end users and clients to enhance front-end design and back-end functionality.</p>
                      </div>
                      <div class="download-resume">
                        <!-- <a href="" class="btn btn-secondary">Download Resume</a> -->
                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <ul class="info-list">
                        <li><span class="title">Age</span><span class="value">34</span></li>
                        <li><span class="title">Location</span><span class="value">Lewisburg, PA</span></li>
                        <li><span class="title">Email</span><span class="value"><a href="mailto:info@dawsonrichey.com">info@dawsonrichey.com</a></span></li>
                        <li><span class="title">Phone</span><span class="value">812-812-2612</span></li>
                        <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                      </ul>
                    </div>

                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- Resume Subpage -->
            <!-- include resume-page.php  -->
            <!-- End of Resume Subpage -->


            <!-- Services Subpage -->
            <!-- services-subpage.php -->
            <!-- End of Services Subpage -->


            <!-- Portfolio Subpage -->
            <!-- include portfolio-page.php  -->
            <!-- /Portfolio Subpage -->

            <!-- Blog Subpage -->
            <!-- include blog-page.php  -->
            <!-- /Blog Subpage -->

            <!-- Contact Subpage -->
            <!-- include contact-page.php  -->
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>

      <?php include('./footer_includes.php'); ?>
  </body>
</html>
