<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>BLOG TITLE HERE</title>

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
        <!-- Single Page Content -->
        <div class="single-page-content">
          <div class="content-area">
            <div class="page-content">
              <!-- Blog Entry Content -->
              <div class="blog-post-main-image">
                <img class="post-image img-responsive" src="images/blog/blog_post_2_full.jpg" alt="blog-post-1" />
              </div>

              <div class="blog-post-content">
                <h1>Bootstrap is the Most Popular HTML, CSS, and JS Framework</h1>

                <div class="entry-meta">
                  <span class="date"><a href="#"><i class="fa fa-fw fa-clock-o"></i> 12 December, 2016</a></span>
                  <span class="divider">|</span>
                  <span class="autor"><a href="#"><i class="fa fa-fw fa-user"></i> John Doe</a></span>
                  <span class="divider">|</span>
                  <span class="category"><a href="#"><i class="fa fa-fw fa-folder"></i> jQuery</a></span>
                </div>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a fringilla elit, eu mattis arcu. Curabitur augue augue, scelerisque sit amet varius eget, tristique at nisl. In euismod suscipit tristique. Nulla sollicitudin pretium massa sit amet tristique.</p>

                <p>Aenean porta quam quis tempus posuere. Integer tempor, elit in auctor scelerisque, arcu augue rhoncus mauris, et hendrerit sem tellus vitae eros. Nulla feugiat ultrices posuere. Nullam aliquet dolor orci. Curabitur tincidunt sem et libero dignissim, sed molestie felis ultricies. Phasellus malesuada tellus vitae eros bibendum, nec ultricies massa sollicitudin. Etiam justo neque, faucibus quis urna interdum, interdum rutrum massa. Mauris et velit ac dolor luctus fringilla. Integer in mattis dui, eget eleifend mauris. Fusce sagittis ipsum nec est finibus, vitae congue nunc elementum. Morbi imperdiet nisl sem, at commodo leo posuere a. Maecenas eu laoreet lorem. Aenean fringilla cursus augue, sed mollis dui.</p>

                <blockquote>
                    <p>Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma - which is living with the results of other people's thinking. Don't let the noise of others' opinions drown out your own inner voice. And most important, have the courage to follow your heart and intuition.</p>
                    <footer><cite>Steve Jobs</cite></footer>
                </blockquote>

                <p>Praesent ac quam sed magna gravida interdum. Vivamus sed nunc lobortis, tempor ante ut, gravida nibh. Praesent sed euismod odio. Maecenas dui dui, euismod quis lobortis quis, dignissim ut eros. Curabitur cursus lacinia sollicitudin. Aenean vitae erat imperdiet, egestas nisi non, placerat sapien. In nec commodo justo. Nunc posuere lacinia neque eu malesuada. Sed lacus lacus, tincidunt id faucibus eget, sagittis sed enim. Nunc nec dapibus odio.</p>

                <div class="entry-meta entry-tags-share">
                  <!-- Share Buttons -->
                  <div class="btn-group share-buttons pull-right hidden-xs">
                    <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i> </a>
                  </div>
                  <!-- /Share Buttons -->
                  <ul class="tags">
                    <li><a>HTML5</a></li>
                    <li><a>CSS3</a></li>
                    <li><a>jQuery</a></li>
                    <li><a>Ajax</a></li>
                    <li><a>PHP5</a></li>
                  </ul>
                </div>

                <!-- comments.php -->

              </div>
              <!-- End of Blog Entry Content -->
            </div>
          </div>
        </div>
        <!-- End of Single Page Content -->
      </div>
      <!-- /Main Content -->
    </div>

    <?php include('./footer_includes.php'); ?>
  </body>
</html>
