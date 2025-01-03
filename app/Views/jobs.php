<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<section class="home-section section-hero overlay bg-image" style="background-image: url('<?= base_url('public/assets/images/hero_1.jpg') ?>');" id="home-section">

<div class="container">
  <div class="row align-items-center justify-content-center">
    <div class="col-md-12">
      <div class="mb-5 text-center">
        <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate est, consequuntur perferendis.</p>
      </div>
      <form method="post" class="search-jobs-form">
        <div class="row mb-5">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <input type="text" class="form-control form-control-lg" placeholder="Job title, Company...">
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Region">
              <option>Anywhere</option>
              <option>San Francisco</option>
              <option>Palo Alto</option>
              <option>New York</option>
              <option>Manhattan</option>
              <option>Ontario</option>
              <option>Toronto</option>
              <option>Kansas</option>
              <option>Mountain View</option>
            </select>
          </div>
          <!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="true" title="Select Job Type">
              <option>Part Time</option>
              <option>Full Time</option>
            </select>
          </div> -->
          <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
            <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 popular-keywords">
            <h3>Trending Keywords:</h3>
            <ul class="keywords list-unstyled m-0 p-0">
              <li><a href="#" class="">UI Designer</a></li>
              <li><a href="#" class="">Python</a></li>
              <li><a href="#" class="">Developer</a></li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<a href="#next" class="scroll-button smoothscroll">
  <span class=" icon-keyboard_arrow_down"></span>
</a>

</section>

<!-- <section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
<div class="container">
  <div class="row mb-5 justify-content-center">
    <div class="col-md-7 text-center">
      <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
      <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
    </div>
  </div>
  <div class="row pb-0 block__19738 section-counter">

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
      <div class="d-flex align-items-center justify-content-center mb-2">
        <strong class="number" data-number="1930">0</strong>
      </div>
      <span class="caption">Candidates</span>
    </div>

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
      <div class="d-flex align-items-center justify-content-center mb-2">
        <strong class="number" data-number="54">0</strong>
      </div>
      <span class="caption">Jobs Posted</span>
    </div>

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
      <div class="d-flex align-items-center justify-content-center mb-2">
        <strong class="number" data-number="120">0</strong>
      </div>
      <span class="caption">Jobs Filled</span>
    </div>

    <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">      
      <div class="d-flex align-items-center justify-content-center mb-2">
        <strong class="number" data-number="550">0</strong>
      </div>
      <span class="caption">Companies</span>
    </div>

      
  </div>
</div>
</section> -->

<section class="explore-categories py-5">
<div class="container">
  <div class="heading-title text-center mb-4">
    <h2>Explore Categories</h2>
    <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</p>
  </div>
  <div class="row g-4">
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=80" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/11/car.png" alt="Automotive">
        </div>
        <h5>Automotive</h5>
        <span>(1 Openings)</span>
      </a>
    </div>
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=83" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/10/blackboard.png" alt="Education">
        </div>
        <h5>Education</h5>
        <span>(1 Openings)</span>
      </a>
    </div>
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=81" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/11/cardiogram1.png" alt="Health and Care">
        </div>
        <h5>Health and Care</h5>
        <span>(1 Openings)</span>
      </a>
    </div>
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=88" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/10/paint-roller-1.png" alt="Construction">
        </div>
        <h5>Construction</h5>
        <span>(0 Openings)</span>
      </a>
    </div>
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=8" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/10/painting-palette.png" alt="Designer">
        </div>
        <h5>Designer</h5>
        <span>(1 Openings)</span>
      </a>
    </div>
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=16" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/10/spinning.png" alt="Fitness Trainer">
        </div>
        <h5>Fitness Trainer</h5>
        <span>(0 Openings)</span>
      </a>
    </div>
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=10" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/10/promotion.png" alt="Marketing">
        </div>
        <h5>Marketing</h5>
        <span>(1 Openings)</span>
      </a>
    </div>
    <div class="col-md-3 col-sm-6">
      <a href="https://jobs.nokriwp.com/search-page/?cat-id=85" class="category-card text-center">
        <div class="cat-icons mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/10/question.png" alt="Other Services">
        </div>
        <h5>Other Services</h5>
        <span>(1 Openings)</span>
      </a>
    </div>
  </div>
  <div class="text-center mt-4">
    <a href="#" class="btn  btn-lg" style="background: #90c317;color:white">Explore More</a>
  </div>
</div>
</section>

<section class="n-featured-jobs">
<div class="container">

  <div class="row  justify-content-center">
    <div class="heading-title text-center">
      <h2>Featured Jobs</h2>
      <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</p>
    </div>
  </div>

  <ul id="job-listings" class="job-listings mb-5">
  <script>
document.addEventListener("DOMContentLoaded", function () {
  fetchJobs();

  function fetchJobs() {
    const jobListings = document.getElementById("job-listings");

    // Define the base URL for images
    const baseURL = '<?= base_url('uploads/') ?>';

    fetch('<?= base_url('/jobs/fetchJobs') ?>') // Make sure this route works in routes.php
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json();
      })
      .then(data => {
        if (data.status === "success") {
          const jobs = data.data;

          // Clear existing listings
          jobListings.innerHTML = "";

          if (jobs.length === 0) {
            jobListings.innerHTML = "<li>No jobs found.</li>";
            return;
          }

          // Render each job
          jobs.forEach(job => {
            jobListings.innerHTML += `
             <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="job-single.html"></a>
      <div class="job-listing-logo">
                  <img src="${baseURL}${job.image}" alt="${job.title}" class="img-fluid">
                </div>
               <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                 
                   <h2>${job.title}</h2>
          <strong>${job.description}</strong>
                   </div>
                      <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> ${job.location}
        </div>
                  <div class="job-listing-meta">
                  <span class="badge badge-success">Apply Now</span>
                  </div>
                </div>
              </li>`;
          });
        } else {
          jobListings.innerHTML = "<li>No jobs found.</li>";
        }
      })
      .catch(error => {
        console.error("Error fetching jobs:", error);
        jobListings.innerHTML = "<li>Error loading jobs. Please try again later.</li>";
      });
  }
});


</script>

    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="job-single.html"></a>
      <div class="job-listing-logo">
        <img src="<?= base_url('public/assets/images/job_logo_2.jpg')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </div>

      <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
          <h2>Digital Marketing Director</h2>
          <strong>Sprint</strong>
        </div>
        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> Overland Park, Kansas
        </div>
        <div class="job-listing-meta">
          <span class="badge badge-success">Apply Now</span>
        </div>
      </div>
    </li>

    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="job-single.html"></a>
      <div class="job-listing-logo">
        <img src="<?= base_url('public/assets/images/job_logo_3.jpg')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </div>

      <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
          <h2>Back-end Engineer (Python)</h2>
          <strong>Amazon</strong>
        </div>
        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> Overland Park, Kansas
        </div>
        <div class="job-listing-meta">
          <span class="badge badge-success">Apply Now</span>
        </div>
      </div>
    </li>

    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="job-single.html"></a>
      <div class="job-listing-logo">
        <img src="<?= base_url('public/assets/images/job_logo_4.jpg')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </div>

      <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
          <h2>Senior Art Director</h2>
          <strong>Microsoft</strong>
        </div>
        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> Anywhere
        </div>
        <div class="job-listing-meta">
          <span class="badge badge-success">Apply Now</span>
        </div>
      </div>
    </li>

    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="job-single.html"></a>
      <div class="job-listing-logo">
        <img src="<?= base_url('public/assets/images/job_logo_5.jpg')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </div>

      <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
          <h2>Product Designer</h2>
          <strong>Puma</strong>
        </div>
        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> San Mateo, CA
        </div>
        <div class="job-listing-meta">
          <span class="badge badge-success">Apply Now</span>
        </div>
      </div>
    </li>
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="job-single.html"></a>
      <div class="job-listing-logo">
        <img src="<?= base_url('public/assets/images/job_logo_1.jpg')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </div>

      <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
          <h2>Product Designer</h2>
          <strong>Adidas</strong>
        </div>
        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> New York, New York
        </div>
        <div class="job-listing-meta">
          <span class="badge badge-success">Apply Now</span>
        </div>
      </div>

    </li>
    <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
      <a href="job-single.html"></a>
      <div class="job-listing-logo">
        <img src="<?= base_url('public/assets/images/job_logo_2.jpg')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
      </div>

      <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
        <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
          <h2>Digital Marketing Director</h2>
          <strong>Sprint</strong>
        </div>
        <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
          <span class="icon-room"></span> Overland Park, Kansas
        </div>
        <div class="job-listing-meta">
          <span class="badge badge-success">Apply Now</span>
        </div>
      </div>
    </li>




  </ul>

  <div class="row pagination-wrap">
    <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
      <span>Showing 1-7 Of 43,167 Jobs</span>
    </div>
    <div class="col-md-6 text-center text-md-right">
      <div class="custom-pagination ml-auto">
        <a href="#" class="prev">Prev</a>
        <div class="d-inline-block">
          <a href="#" class="active">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
        </div>
        <a href="#" class="next">Next</a>
      </div>
    </div>
  </div>

</div>
</section>

<section class="explore-categories bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-8">
      <h2 class="text-white">Looking For A Job?</h2>
      <p class="mb-0 text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
    </div>
    <div class="col-md-3 ml-auto">
      <a href="#" class="btn btn-warning btn-block btn-lg">Sign Up</a>
    </div>
  </div>
</div>
</section>



<section class="n-featured-jobs">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="heading-title left position-relative mb-5">
        <h2>Featured Candidates</h2>
      </div>
    </div>
    <div class="col-md-4">
      <div class="candidate-card position-relative p-3 text-center">
        <!-- Bookmark Icon -->
        <span class="bookmark-icon"><i class="fa fa-heart-o"></i></span>

        <!-- Candidate Avatar -->
        <div class="candidate-avatar mx-auto mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/images-7-1.png" alt="David">
        </div>

        <!-- Candidate Details -->
        <h4 class="candidate-title">David</h4>
        <p class="">Data Entry Officer</p>
        <p class=""><i class="fa fa-map-marker"></i> Chickasaw, USA</p>

        <!-- Skills -->
        <div class="candidate-skills mb-3">
          <a href="#">Patience</a>
          <a href="#">Commitment</a>
          <a href="#">Trainings</a>
        </div>

        <!-- View Profile Button -->
        <a href="profile.php" class="btn btn-primary w-100">View Profile</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="candidate-card position-relative p-3 text-center">
        <!-- Bookmark Icon -->
        <span class="bookmark-icon"><i class="fa fa-heart-o"></i></span>

        <!-- Candidate Avatar -->
        <div class="candidate-avatar mx-auto mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/images-7-1.png" alt="David">
        </div>

        <!-- Candidate Details -->
        <h4 class="candidate-title">David</h4>
        <p class="">Data Entry Officer</p>
        <p class=""><i class="fa fa-map-marker"></i> Chickasaw, USA</p>

        <!-- Skills -->
        <div class="candidate-skills mb-3">
          <a href="#">Patience</a>
          <a href="#">Commitment</a>
          <a href="#">Trainings</a>
        </div>

        <!-- View Profile Button -->
        <a href="https://jobs.nokriwp.com/candidate/robert/" class="btn btn-primary w-100">View Profile</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="candidate-card position-relative p-3 text-center">
        <!-- Bookmark Icon -->
        <span class="bookmark-icon"><i class="fa fa-heart-o"></i></span>

        <!-- Candidate Avatar -->
        <div class="candidate-avatar mx-auto mb-3">
          <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/images-7-1.png" alt="David">
        </div>

        <!-- Candidate Details -->
        <h4 class="candidate-title">David</h4>
        <p class="">Data Entry Officer</p>
        <p class=""><i class="fa fa-map-marker"></i> Chickasaw, USA</p>

        <!-- Skills -->
        <div class="candidate-skills mb-3">
          <a href="#">Patience</a>
          <a href="#">Commitment</a>
          <a href="#">Trainings</a>
        </div>

        <!-- View Profile Button -->
        <a href="https://jobs.nokriwp.com/candidate/robert/" class="btn btn-primary w-100">View Profile</a>
      </div>
    </div>
  </div>
</div>

</section>

<section class="">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="heading-title">
                <h2>Pricing Packages</h2>
                <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor.</p>
            </div>
        </div>

        <div class="n-pricing-plan">
            <div class="row clear-custom">
                <!-- Free Plan -->
                <div class="col-md-4">
                    <div class="n-price-single">
                        <div class="n-price-top">
                            <div class="n-price-top-text">
                                <h3>Free</h3>
                                <p>Basic</p>
                            </div>
                        </div>
                        <div class="n-price-bottom">
                            <ul>
                                <li>Validity: 50 Days</li>
                                <li><i class="la la-check"></i>20 Spotlight Jobs</li>
                                <li><i class="la la-check"></i>20 Feature Jobs</li>
                                <li><i class="la la-check"></i>20 Urgent Jobs</li>
                                <li><i class="la la-check"></i>20 Private Jobs</li>
                                <li><i class="la la-check"></i>20 Starred Jobs</li>
                            </ul>
                            <div class="text-center">
                          <a href="javascript:void(0)" class="n-btn-flat">Select Plan</a>
                          </div>
                        </div>
                    </div>
                </div>

                <!-- Standard Plan -->
                <div class="col-md-4">
                    <div class="n-price-single">
                        <div class="n-price-top">
                            <div class="n-price-top-text">
                                <h3><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₨</span>300.00</bdi></span></h3>
                                <p>Standard</p>
                            </div>
                        </div>
                        <div class="n-price-bottom">
                            <ul>
                                <li>Validity: Lifetime</li>
                                <li><i class="la la-check"></i>20 Candidate Searches</li>
                                <li><i class="la la-check"></i>45 Spotlight Jobs</li>
                                <li><i class="la la-check"></i>45 Feature Jobs</li>
                                <li><i class="la la-check"></i>50 Urgent Jobs</li>
                                <li><i class="la la-check"></i>45 Private Jobs</li>
                               
                            </ul>
                            <div class="text-center">
                          <a href="javascript:void(0)" class="n-btn-flat">Select Plan</a>
                          </div>
                        </div>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-md-4">
                    <div class="n-price-single">
                        <div class="n-price-top">
                            <div class="n-price-top-text">
                                <h3><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">₨</span>600.00</bdi></span></h3>
                                <p>Premium</p>
                            </div>
                        </div>
                        <div class="n-price-bottom">
                            <ul>
                                <li>Validity: 70 Days</li>
                                <li><i class="la la-check"></i>30 Candidate Searches</li>
                                <li><i class="la la-check"></i>30 Spotlight Jobs</li>
                                <li><i class="la la-check"></i>25 Feature Jobs</li>
                                <li><i class="la la-check"></i>70 Urgent Jobs</li>
                                <li><i class="la la-check"></i>25 Private Jobs</li>
                               
                            </ul>
                          <div class="text-center">
                          <a href="javascript:void(0)" class="n-btn-flat">Select Plan</a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
   
<section>
<div class="container">
  <div class="testimonials-section light-grey">
    <div class="container">
      <div class="heading-title black text-center">
        <h2>Testimonials from our customers</h2>
        <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor.</p>
      </div>
      <div class="testimonials-slider owl-carousel">
        <!-- Testimonial 1 -->
        <div class="testimonial-item">
          <div class="testimonial-content">
            <p>Lorem ipsum dolor sit amet, magnis monter elit. Aenean commodo ligula eget dolor aenean massa.</p>
            <i class="fa fa-quote-right"></i>
          </div>
          <div class="user-info d-flex align-items-center">
            <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/images-4-1.png" alt="Kevin Hart">
            <div class="user-details">
              <h3>Kevin Hart</h3>
              <p>Web Developer</p>
            </div>
          </div>
        </div>
        <!-- Testimonial 2 -->
        <div class="testimonial-item">
          <div class="testimonial-content">
            <p>Lorem ipsum dolor sit amet, magnis monter elit. Aenean commodo ligula eget dolor aenean massa.</p>
            <i class="fa fa-quote-right"></i>
          </div>
          <div class="user-info d-flex align-items-center">
            <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/login-avatar-1.png" alt="George Harry">
            <div class="user-details">
              <h3>George Harry</h3>
              <p>Technical Engineer</p>
            </div>
          </div>
        </div>
        <!-- Testimonial 3 -->
        <div class="testimonial-item">
          <div class="testimonial-content">
            <p>Lorem ipsum dolor sit amet, magnis monter elit. Aenean commodo ligula eget dolor aenean massa.</p>
            <i class="fa fa-quote-right"></i>
          </div>
          <div class="user-info d-flex align-items-center">
            <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/fe.png" alt="Edward Leo">
            <div class="user-details">
              <h3>Edward Leo</h3>
              <p>CDO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</section>

<section class="site-section py-4">
<div class="container">

  <div class="row align-items-center">
    <div class="col-12 text-center mt-4 mb-5">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h2 class="section-title mb-2">Company We've Helped</h2>
          <p class="lead">Porro error reiciendis commodi beatae omnis similique voluptate rerum ipsam fugit mollitia ipsum facilis expedita tempora suscipit iste</p>
        </div>
      </div>

    </div>
    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_mailchimp.svg')?>" alt="Image" class="img-fluid logo-1">
    </div>
    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_paypal.svg')?>" alt="Image" class="img-fluid logo-2">
    </div>
    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_stripe.svg')?>" alt="Image" class="img-fluid logo-3">
    </div>
    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_visa.svg')?>" alt="Image" class="img-fluid logo-4">
    </div>

    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_apple.svg')?>" alt="Image" class="img-fluid logo-5">
    </div>
    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_tinder.svg')?>" alt="Image" class="img-fluid logo-6">
    </div>
    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_sony.svg')?>" alt="Image" class="img-fluid logo-7">
    </div>
    <div class="col-6 col-lg-3 col-md-6 text-center">
      <img src="<?= base_url('public/assets/images/logo_airbnb.svg')?>" alt="Image" class="img-fluid logo-8">
    </div>
  </div>
</div>
</section>


<section class="bg-light pt-5 testimony-full">

<div class="owl-carousel single-carousel">


  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center text-center text-lg-left">
        <blockquote>
          <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
          <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
        </blockquote>
      </div>
      <div class="col-lg-6 align-self-end text-center text-lg-right">
        <img src="<?= base_url('public/assets/images/person_transparent_2.png')?>" alt="Image" class="img-fluid mb-0">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center text-center text-lg-left">
        <blockquote>
          <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
          <p><cite> &mdash; Chris Peters, @Google</cite></p>
        </blockquote>
      </div>
      <div class="col-lg-6 align-self-end text-center text-lg-right">
        <img src="<?= base_url('public/assets/images/person_transparent.png')?>" alt="Image" class="img-fluid mb-0">
      </div>
    </div>
  </div>

</div>

</section>

<section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('<?= base_url('public/assets/images/hero_1.jpg') ?>');">
<div class="container">
  <div class="row">
    <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
      <h2 class="text-white">Get The Mobile Apps</h2>
      <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
      <p class="mb-0">
        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
        <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
      </p>
    </div>
    <div class="col-md-6 ml-auto align-self-end">
      <img src="<?= base_url('public/assets/images/apps.png')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
    </div>
  </div>
</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  $(document).ready(function () {
    $(".testimonials-slider").owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      responsive: {
        0: { items: 1 },
        768: { items: 2 },
        1024: { items: 3 }
      },
    });
  });
</script>

<?= $this->endSection(); ?>