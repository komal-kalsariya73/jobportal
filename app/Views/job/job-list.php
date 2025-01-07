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
            <a href="javascript:void(0);" id="clear-filters">Clear All</a>
        </div>
        <form method="get" id="all_search_form" onsubmit="return false;">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <button type="submit" class="btn btn-primary btn-block" style="background: #89ba16;" id="search-button">Search</button>

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
                                <input type="text" class="form-control" name="job-title" id="job-title" placeholder="Enter keyword or title">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category Search -->
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <a role="button" class="collapsed" data-toggle="collapse" href="#job_category_1" aria-expanded="false">
                            <span>Search by Category</span>
                            <i class="fas fa-plus toggle-icon"></i>
                        </a>
                    </div>
                    <div id="job_category_1" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat1" name="category[]" value="Testing">
                                    <label class="form-check-label" for="cat1">Testing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat2" name="category[]" value="Designing">
                                    <label class="form-check-label" for="cat2">Designing</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat3" name="category[]" value="Consultant">
                                    <label class="form-check-label" for="cat3">Consultant</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Radius Search -->
                <div class="panel panel-default">
                    <div class="panel-heading p-2" role="tab">
                        <a role="button" class="collapsed" data-toggle="collapse" href="#radius_search" aria-expanded="true">
                            <span>Radius Search</span>
                            <i class="fas fa-plus toggle-icon"></i>
                        </a>
                    </div>
                    <div id="radius_search" class="panel-collapse collapse" role="tabpanel">
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="sb_user_address" id="sb_user_address" placeholder="Enter Map Address">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="distance" id="distance" placeholder="Number of miles">
                            </div>
                        </div>
                    </div>
                </div>
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
              <div class="row" id="job-listings">
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
              <nav aria-label="Job Pagination">
            <ul class="pagination" id="pagination-links"></ul>
        </nav>
    </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   


    <script>
document.addEventListener("DOMContentLoaded", function () {
    fetchJobs();

    function fetchJobs() {
        const jobListings = document.getElementById("job-listings");

        
        const baseURL = '<?= base_url('uploads/') ?>';

        fetch('<?= base_url('/api/fetch-jobs') ?>')
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
                        jobListings.innerHTML = "<p>No jobs found.</p>";
                        return;
                    }

                    // Render each job dynamically
                    jobs.forEach(job => {
                        jobListings.innerHTML += `
                            <div class="col-lg-12">
                                <div class="single_jobs p-4 mb-3 shadow-sm rounded" style="background-color: #fff4d3;">
                                    <div class="features-star-2"><i class="fa fa-star"></i></div>
                                    <div class="row align-items-center">
                                        <!-- Job Info Section -->
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div>
                                                <a href="job_details/${job.id}">
                                                    <h5 class="mb-1 text-dark">${job.title}</h5>
                                                </a>
                                                <p class="mb-1">
                                                    <a href="#" class="text-uppercase" style="color: #233d7b">${job.category}</a>
                                                </p>
                                                <p class="mb-1" style="color:#233d7b">
                                                    <i class="fa fa-map-marker" style="color: #233d7b"></i> ${job.location}
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
                                            <p class="d-block text-dark font-z m-0">Job Type: <span class="text-primary">${job.type}</span></p>
                                            <p class="mb-1 text-gray m-0 p-0"><span class="text-dark">Posted:</span> ${timeAgo(job.created_at)}</p>
                                            <p class="mb-0 text-gray"><span class="text-dark">Deadline:</span> ${job.updated_at}</p>
                                        </div>

                                        <!-- Apply Button Section -->
                                        <div class="col-md-2 text-right">
                                            <a href="job_details/${job.id}" class="btn btn-primary btn-sm">Apply Now</a>
                                                 <a href="<?= base_url('/job/job-single') ?>?id=${job.id}">view
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                } else {
                    jobListings.innerHTML = "<p>No jobs found.</p>";
                }
            })
            .catch(error => {
                console.error("Error fetching jobs:", error);
                jobListings.innerHTML = "<p>Error loading jobs. Please try again later.</p>";
            });
    }

    // Function to display time ago in human-readable format
    function timeAgo(timestamp) {
        let date = new Date(timestamp);
        let diff = Math.floor((new Date() - date) / 1000);
        let seconds = diff;
        let minutes = Math.floor(seconds / 60);
        let hours = Math.floor(minutes / 60);
        let days = Math.floor(hours / 24);
        let months = Math.floor(days / 30);
        let years = Math.floor(months / 12);

        if (years > 0) return years + ' years ago';
        if (months > 0) return months + ' months ago';
        if (days > 0) return days + ' days ago';
        if (hours > 0) return hours + ' hours ago';
        if (minutes > 0) return minutes + ' minutes ago';
        return seconds + ' seconds ago';
    }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle form submission for search
    performSearch(1);
    document.getElementById('search-button').addEventListener('click', function() {
        performSearch(1);
    });

    // Handle clear filters
    document.getElementById('clear-filters').addEventListener('click', function() {
        document.getElementById('all_search_form').reset();
        performSearch(1); // Reset the search
    });

    function performSearch(page) {
        // Gather filter data
        const jobTitle = document.getElementById('job-title').value;
        const categories = [];
        document.querySelectorAll('input[name="category[]"]:checked').forEach(function(checkbox) {
            categories.push(checkbox.value);
        });
        const sbUserAddress = document.getElementById('sb_user_address').value;
        const distance = document.getElementById('distance').value;

        // Send AJAX request
        const searchData = {
            job_title: jobTitle,
            category: categories,
            sb_user_address: sbUserAddress,
            distance: distance,
            page: page
        };

        fetch('<?= base_url("/api/search-jobs") ?>', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(searchData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === "success") {
                const jobListings = document.getElementById('job-listings');
                const baseURL = '<?= base_url(); ?>';
                jobListings.innerHTML = '';
                data.data.forEach(job => {
                    jobListings.innerHTML += `
                        <div class="col-lg-12">
                                <div class="single_jobs p-4 mb-3 shadow-sm rounded" style="background-color: #fff4d3;">
                                    <div class="features-star-2"><i class="fa fa-star"></i></div>
                                    <div class="row align-items-center">
                                        <!-- Job Info Section -->
                                        <div class="col-md-6 d-flex align-items-center">
                                            <div>
                                                <a href="job_details/${job.id}">
                                                    <h5 class="mb-1 text-dark">${job.title}</h5>
                                                </a>
                                                <p class="mb-1">
                                                    <a href="#" class="text-uppercase" style="color: #233d7b">${job.category}</a>
                                                </p>
                                                <p class="mb-1" style="color:#233d7b">
                                                    <i class="fa fa-map-marker" style="color: #233d7b"></i> ${job.location}
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
                                            <p class="d-block text-dark font-z m-0">Job Type: <span class="text-primary">${job.type}</span></p>
                                            <p class="mb-1 text-gray m-0 p-0"><span class="text-dark">Posted:</span> ${timeAgo(job.created_at)}</p>
                                            <p class="mb-0 text-gray"><span class="text-dark">Deadline:</span> ${job.updated_at}</p>
                                        </div>

                                        <!-- Apply Button Section -->
                                        <div class="col-md-2 text-right">
                                            <a href="job_details/${job.id}" class="btn btn-primary btn-sm">Apply Now</a>
                                    <a href="<?= base_url('/job/job-single') ?>?id=${job.id}">view


                                        </div>
                                     
                                    </div>
                                </div>
                            </div>                    `;
                });

                // Create pagination links
                const paginationLinks = document.getElementById('pagination-links');
                paginationLinks.innerHTML = ''; // Clear existing links
                
                // Create "Previous" link if it's not the first page
                if (data.pagination.current_page > 1) {
                    let prevPage = document.createElement('li');
                    prevPage.classList.add('page-item');
                    let prevLink = document.createElement('a');
                    prevLink.classList.add('page-link');
                    prevLink.href = 'javascript:void(0);';
                    prevLink.textContent = 'Previous';
                    prevLink.addEventListener('click', function() {
                        performSearch(data.pagination.current_page - 1); // Go to the previous page
                    });
                    prevPage.appendChild(prevLink);
                    paginationLinks.appendChild(prevPage);
                }

                
                for (let i = 1; i <= data.pagination.total_pages; i++) {
                    let pageLink = document.createElement('li');
                    pageLink.classList.add('page-item');
                    let pageAnchor = document.createElement('a');
                    pageAnchor.classList.add('page-link');
                    pageAnchor.href = 'javascript:void(0);';
                    pageAnchor.textContent = i;
                    pageAnchor.addEventListener('click', function() {
                        performSearch(i); 
                    });
                    pageLink.appendChild(pageAnchor);
                    paginationLinks.appendChild(pageLink);
                }

                
                if (data.pagination.current_page < data.pagination.total_pages) {
                    let nextPage = document.createElement('li');
                    nextPage.classList.add('page-item');
                    let nextLink = document.createElement('a');
                    nextLink.classList.add('page-link');
                    nextLink.href = 'javascript:void(0);';
                    nextLink.textContent = 'Next';
                    nextLink.addEventListener('click', function() {
                        performSearch(data.pagination.current_page + 1); 
                    });
                    nextPage.appendChild(nextLink);
                    paginationLinks.appendChild(nextPage);
                }
            } else {
                document.getElementById('job-listings').innerHTML = '<p>No jobs found.</p>';
            }
        })
        .catch(error => {
            console.error("Error fetching jobs:", error);
        });
    }

    // Function to display time ago format (you can customize this)
    function timeAgo(dateString) {
        const date = new Date(dateString);
        const now = new Date();
        const diffInSeconds = Math.floor((now - date) / 1000);
        const diffInMinutes = Math.floor(diffInSeconds / 60);
        const diffInHours = Math.floor(diffInMinutes / 60);
        const diffInDays = Math.floor(diffInHours / 24);

        if (diffInDays > 0) {
            return `${diffInDays} days ago`;
        }
        if (diffInHours > 0) {
            return `${diffInHours} hours ago`;
        }
        if (diffInMinutes > 0) {
            return `${diffInMinutes} minutes ago`;
        }
        return 'Just now';
    }
});
</script>
    
<?= $this->endSection(); ?>