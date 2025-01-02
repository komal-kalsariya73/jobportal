<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Job Listing</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Search Job</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="job_listing_area">
        <div class="container">
          <div class="row">
            <!-- Sidebar Filters -->

            <div class="col-lg-4 col-md-6 col-sm-12">
              <aside class="new-sidebar">
                <div class="heading">
                  <h4>Search Filters</h4>
                  <a href="https://jobs.nokriwp.com/search-page/">Clear All</a>
                </div>
                <form method="get" id="all_search_form">
                  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <button type="submit" class="btn btn-primary btn-block" style="background: #89ba16;">Search</button>

                    <!-- Keyword Search -->
                    <div class="panel panel-default">
                      <div class="panel-heading p-2" role="tab">
                        <a role="button" data-toggle="collapse" href="#job_keyword" aria-expanded="true">
                          <span>Search by Keyword</span>
                          <i class="fas fa-minus toggle-icon"></i>
                        </a>
                      </div>
                      <div id="job_keyword" class="panel-collapse collapse show" role="tabpanel">
                        <div class="panel-body">
                          <div class="form-group">
                            <input type="text" class="form-control" name="job-title" placeholder="Enter keyword or title">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading p-2" role="tab">
                        <a role="button" class="collapsed" data-toggle="collapse" href="#radius_search" aria-expanded="true">
                          <span>Radius Search</span>
                          <i class="fas fa-minus toggle-icon"></i>
                        </a>
                      </div>
                      <div id="radius_search" class="panel-collapse collapse show" role="tabpanel">
                        <div class="panel-body">
                          <div class="form-group">
                            <input type="text" class="form-control" name="sb_user_address" placeholder="Enter Map Address">
                          </div>
                          <div class="form-group">
                            <input type="number" class="form-control" name="distance" placeholder="Number of miles">
                          </div>

                        </div>
                      </div>
                    </div>
                    <!-- Category Search -->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab">
                        <a role="button" class="collapsed" data-toggle="collapse" href="#job_category_1" aria-expanded="false">
                          <span>Search by Category </span>
                          <i class="fas fa-plus toggle-icon"></i>
                        </a>
                      </div>
                      <div id="job_category_1" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat1" name="category[]" value="Automotive">
                              <label class="form-check-label" for="cat1">Automotive</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat2" name="category[]" value="Construction">
                              <label class="form-check-label" for="cat2">Construction</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat3" name="category[]" value="Consultant">
                              <label class="form-check-label" for="cat3">Consultant</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab">
                        <a role="button" class="collapsed" data-toggle="collapse" href="#job_category_2">
                          <span> Qualificaton
                          </span>
                          <i class="fas fa-plus toggle-icon"></i>
                        </a>
                      </div>
                      <div id="job_category_2" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat4" name="category[]" value="Healthcare">
                              <label class="form-check-label" for="cat4">Healthcare</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat5" name="category[]" value="Education">
                              <label class="form-check-label" for="cat5">Education</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat6" name="category[]" value="IT">
                              <label class="form-check-label" for="cat6">IT</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab">
                        <a role="button" class="collapsed" data-toggle="collapse" href="#job_category">
                          <span>Job Level</span>
                          <i class="fas fa-plus"></i>
                        </a>
                      </div>
                      <div id="job_category" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat1" name="category[]" value="Automotive">
                              <label class="form-check-label" for="cat1">Automotive</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat2" name="category[]" value="Construction">
                              <label class="form-check-label" for="cat2">Construction</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="cat3" name="category[]" value="Consultant">
                              <label class="form-check-label" for="cat3">Consultant</label>
                            </div>
                            <!-- Add more checkboxes as needed -->
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Radius Search -->
                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-search"></i> Search</button>

                  </div>
                </form>
              </aside>
            </div>

            <!-- Job Listings -->
            <div class="col-lg-8">
              <div class="recent_joblist_wrap mb-4 p-4 shadow-sm rounded bg-white">
                <div class="d-flex justify-content-between align-items-center">
                  <h4 style="color: #242424; font-weight: 500;">Available Jobs (12)</h4>
                  <select class="form-control w-auto">
                    <option value="Most Recent" selected>Descending</option>
                    <option value="1">Ascending</option>
                    <option value="2">Descending</option>

                  </select>
                </div>
              </div>

              <div class="recent_joblist_wrap mb-4 p-3 shadow-sm rounded bg-white">
                <div class="row align-items-center">
                  <!-- Text Section -->
                  <div class="col-9">
                    <span class="d-block text-dark mb-1">Job alerts</span>
                    <p class="mb-0">Receive emails for the latest jobs matching your search criteria</p>
                  </div>
                  <!-- Button Section -->
                  <div class="col-3 text-right">
                    <button class="btn btn-primary">Job Alert</button>
                  </div>
                </div>
              </div>

              <!-- Job Cards -->
              <div class="job_lists">
                <div class="row">
                  <!-- Single Job -->
                  <div class="col-lg-12">
                    <div class="single_jobs p-4 mb-3 shadow-sm rounded" style="background-color: #fff4d3;">
                    <div class="features-star-2"><i class="fa fa-star"></i></div>
                      <div class="row align-items-center">
                        <!-- Job Info Section -->
                        <div class="col-md-6 d-flex align-items-center">
                          <div>
                            <a href="job_details.html">
                              <h5 class="mb-1 text-dark">Software Engineer</h5>
                            </a>
                            <p class="mb-1">
                              <a href="#" class="text-uppercase"  style="color: #233d7b">Delight King</a>
                            </p>
                            <p class="mb-1" style="color:#233d7b">
                              <i class="fa fa-map-marker"  style="color: #233d7b"></i> California, USA
                            </p>
                            <ul class="featured-badge-list">
                              <li class="feature">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=63" target="_blank" rel="noopener noreferrer">Feature</a>
                              </li>
                              <li class="private">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=65" target="_blank" rel="noopener noreferrer">Private</a>
                              </li>
                              <li class="urgent">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=64" target="_blank" rel="noopener noreferrer">Urgent</a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <!-- Job Type & Deadline Section -->
                        <div class="col-lg-4 font-z">
                          <p class="d-block text-dark font-z m-0">Job Type: <span class="text-primary">Full-time</span></p>
                          <p class="mb-1 text-gray m-0 p-0"><span class="text-dark">Posted:</span> 3 years ago</p>
                          <p class="mb-0 text-gray"><span class="text-dark">Deadline:</span> 31 Jan 2020</p>
                        </div>

                        <!-- Apply Button Section -->
                        <div class="col-md-2 text-right">
                          <a href="job_details.html" class="btn btn-primary btn-sm">Apply Now</a>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-12">
                    <div class="single_jobs p-4 mb-3 shadow-sm rounded" style="background-color: #fff4d3;">
                    <div class="features-star-2"><i class="fa fa-star"></i></div>
                      <div class="row align-items-center">
                        <!-- Job Info Section -->
                        <div class="col-md-6 d-flex align-items-center">
                          <div>
                            <a href="job_details.html">
                              <h5 class="mb-1 text-dark">Software Engineer</h5>
                            </a>
                            <p class="mb-1">
                              <a href="#" class="text-uppercase"  style="color: #233d7b">nokri</a>
                            </p>
                            <p class="mb-1"  style="color: #233d7b">
                              <i class="fa fa-map-marker"  style="color: #233d7b"></i> California, USA Lahore
                            </p>
                            <ul class="featured-badge-list">
                              <li class="feature">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=63" target="_blank" rel="noopener noreferrer">Feature</a>
                              </li>
                              <li class="private">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=65" target="_blank" rel="noopener noreferrer">Private</a>
                              </li>
                              <li class="urgent">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=64" target="_blank" rel="noopener noreferrer">Urgent</a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <!-- Job Type & Deadline Section -->
                        <div class="col-lg-4 font-z">
                          <p class="d-block text-dark font-z m-0">Job Type: <span class="text-primary">Full-time</span></p>
                          <p class="mb-1 text-gray m-0 p-0"><span class="text-dark">Posted:</span> 3 years ago</p>
                          <p class="mb-0 text-gray"><span class="text-dark">Deadline:</span> 31 Jan 2020</p>
                        </div>

                        <!-- Apply Button Section -->
                        <div class="col-md-2 text-right">
                          <a href="job_details.html" class="btn btn-primary btn-sm">Apply Now</a>
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-lg-12">
                    <div class="single_jobs p-4 mb-3 shadow-sm rounded" style="background-color: #fff4d3;">
                    <div class="features-star-2"><i class="fa fa-star"></i></div>
                      <div class="row align-items-center">
                        <!-- Job Info Section -->
                        <div class="col-md-6 d-flex align-items-center">
                          <div>
                            <a href="job_details.html">
                              <h5 class="mb-1 text-dark">Software Engineer</h5>
                            </a>
                            <p class="mb-1">
                              <a href="#" class="text-uppercase"  style="color: #233d7b">Delight King</a>
                            </p>
                            <p class="mb-1"  style="color: #233d7b">
                              <i class="fa fa-map-marker"  style="color: #233d7b"></i> California, USA
                            </p>
                            <ul class="featured-badge-list">
                              <li class="feature">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=63" target="_blank" rel="noopener noreferrer">Feature</a>
                              </li>
                              <li class="private">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=65" target="_blank" rel="noopener noreferrer">Private</a>
                              </li>
                              <li class="urgent">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=64" target="_blank" rel="noopener noreferrer">Urgent</a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <!-- Job Type & Deadline Section -->
                        <div class="col-lg-4 font-z">
                          <p class="d-block text-dark font-z m-0">Job Type: <span class="text-primary">Full-time</span></p>
                          <p class="mb-1 text-gray m-0 p-0"><span class="text-dark">Posted:</span> 3 years ago</p>
                          <p class="mb-0 text-gray"><span class="text-dark">Deadline:</span> 31 Jan 2020</p>
                        </div>

                        <!-- Apply Button Section -->
                        <div class="col-md-2 text-right">
                          <a href="job_details.html" class="btn btn-primary btn-sm rounded">Apply Now</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="single_jobs p-4 mb-3 shadow-sm rounded" style="background-color: #fff4d3;">
                    <div class="features-star-2"><i class="fa fa-star"></i></div>
                      <div class="row align-items-center">
                        <!-- Job Info Section -->
                        <div class="col-md-6 d-flex align-items-center">
                          <div>
                            <a href="job_details.html">
                              <h5 class="mb-1 text-dark">Software Engineer</h5>
                            </a>
                            <p class="mb-1">
                              <a href="#" class="text-uppercase"  style="color: #233d7b">Localhead Inc. Ltd.</a>
                            </p>
                            <p class="mb-1"  style="color: #233d7b">
                              <i class="fa fa-map-marker"  style="color: #233d7b"></i> California, USA
                            </p>
                            <ul class="featured-badge-list">
                              <li class="feature">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=63" target="_blank" rel="noopener noreferrer">Feature</a>
                              </li>
                              <li class="private">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=65" target="_blank" rel="noopener noreferrer">Private</a>
                              </li>
                              <li class="urgent">
                                <a href="https://jobs.nokriwp.com/search-page/?job_class=64" target="_blank" rel="noopener noreferrer">Urgent</a>
                              </li>
                            </ul>
                          </div>
                        </div>

                        <!-- Job Type & Deadline Section -->
                        <div class="col-lg-4 font-z">
                          <p class="d-block text-dark font-z m-0">Job Type: <span class="text-primary">Full-time</span></p>
                          <p class="mb-1 text-gray m-0 p-0"><span class="text-dark">Posted:</span> 3 years ago</p>
                          <p class="mb-0 text-gray"><span class="text-dark">Deadline:</span> 31 Jan 2020</p>
                        </div>

                        <!-- Apply Button Section -->
                        <div class="col-md-2 text-right">
                          <a href="job_details.html" class="btn btn-primary btn-sm">Apply Now</a>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!-- Repeat similar blocks for other job listings -->
                </div>
              </div>

              <!-- Pagination -->
              <nav class="d-flex justify-content-center mt-4">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-left"></i></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>









    
<?= $this->endSection(); ?>