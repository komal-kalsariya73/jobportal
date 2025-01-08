<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<head>
    <title>JobBoard &mdash; Website Template by Colorlib</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
 <link rel="stylesheet" href="<?= base_url('public/assets/css/profile.css')?>">  
</head>
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="text-white font-weight-bold">Profile</h1>
                        <div class="custom-breadcrumbs">
                            <a href="#">Home</a> <span class="mx-2 slash">/</span>
                            <span class="text-white"><strong>name</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mt-4">
        <div id="job-profile"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // Fetch the job ID dynamically from PHP
        const jobId = '<?= $id ?>'; // This is passed from the controller
        const jobApiUrl = `<?= base_url('/job/profileApi') ?>/${jobId}`;

        // Fetch job details via AJAX and render the page
        fetch(jobApiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    const job = data.job;
                const user = data.user;
                    document.getElementById('job-profile').innerHTML = `
                        <div class="row">
                            <!-- Sidebar Section -->
                            <div class="col-lg-4">
                                <aside class="resume-3-sidebar">
                                    <div class="n-candidate-info">
                                        <h4>Candidate Detail</h4>
                                        <ul>
                                            <li>
                                                <i class="fas fa-briefcase"></i>
                                                <div class="resume-detail-meta">
                                                    <small>Title:</small>
                                                    <strong>${user.name}</strong>
                                                </div>
                                            </li>
                                             <li>
                                                <i class="fas fa-briefcase"></i>
                                                <div class="resume-detail-meta">
                                                    <small>Gender:</small>
                                                    <strong>${user.gender}</strong>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                                <div class="resume-detail-meta">
                                                    <small>Location:</small>
                                                    <strong>${job.location || 'N/A'}</strong>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fas fa-dollar-sign"></i>
                                                <div class="resume-detail-meta">
                                                    <small>Salary:</small>
                                                    <strong>${job.salary || 'N/A'}</strong>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <div class="resume-detail-meta">
                                                    <small>Posted On:</small>
                                                    <strong>${job.created_at || 'N/A'}</strong>
                                                </div>
                                            </li>
                                        </ul>
                                         <button class="btn btn-primary btn-block"><i class="fas fa-heart"></i>Update</button>
                        <a href="#" class="btn btn-secondary btn-block"><i class="fas fa-download"></i> Generate Resume</a>
                                    </div>
                                </aside>
                            </div>

                            <!-- Main Content Section -->
                            <div class="col-lg-8">
                                <div class="resume-3-detail">
                                    <!-- Job Description Section -->
                                    <div class="resume-3-box">
                                        <h4>Job Description</h4>
                                        <p>${job.description || 'No description available.'}</p>
                                    </div>
                                      <div class="resume-3-box resume-skills">
                        <h4>Skills and Tools</h4>
                        <div class="bar-wrapper">
                            <span class="progress-text">Patience</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%;"></div>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <span class="progress-text">Commitment</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="bar-wrapper">
                            <span class="progress-text">Trainings</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>
                     <div class="resume-3-box">
                        <h4>Education</h4>
                        <div class="resume-timeline-box">
                            <span class="degree-duration">May 2010 - March 2018</span>
                            <h5 class="degree-name">Software Engineering</h5>
                            <span class="institute-name">Stanford University</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                                </div>
                            </div>
                            
                        </div>
                         
                    `;
                } else {
                    document.getElementById('job-profile').innerHTML = `<p>${data.message}</p>`;
                }
            })
            .catch(error => {
                console.error('Error fetching job details:', error);
                document.getElementById('job-profile').innerHTML = `
                    <p>Error loading job details. Please try again later.</p>
                `;
            });
    </script>
<?= $this->endSection(); ?>