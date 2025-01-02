<header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html">JobBoard</a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="<?= base_url('/jobs')?>" class="nav-link active">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li class="has-children">
                <a href="job-listings.html">Job Listings</a>
                <ul class="dropdown">
                  <li><a href="<?= base_url('job/job-single')?>">Job Single</a></li>
                  <li><a href="<?= base_url('job/post-job')?>">Post a Job</a></li>
                </ul>
              </li>
              <li class="has-children">
                <a href="searchjob.php">Search Job</a>
                <ul class="dropdown">
                <li><a href="<?= base_url('job/job-list')?>">Search</a></li>
                  <!-- <li><a href="services.html">Services</a></li>
                  <li><a href="service-single.html">Service Single</a></li>
                  <li><a href="blog-single.html">Blog Single</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="portfolio-single.html">Portfolio Single</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="faq.html">Frequently Ask Questions</a></li>
                  <li><a href="gallery.html">Gallery</a></li> -->
                </ul>
              </li>
              <li><a href="blog.html">Blog</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li class="d-lg-none"><a href="<?= base_url('job/post-job')?>"><span class="mr-2">+</span> Post a Job</a></li>
              <li class="d-lg-none"><a href="login.php">Log In</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="<?= base_url('job/post-job')?>" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Post a Job</a>
              <a href="<?= base_url('job/login')?>" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>

        </div>
      </div>
    </header>