<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<section class="section-hero overlay inner-page bg-image" style="background-image: url('<?= base_url('public/assets/images/hero_1.jpg') ?>');" id="home-section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text-white font-weight-bold">Apply for a Job</h1>
                <div class="custom-breadcrumbs">
                    <a href="<?= base_url('/') ?>">Home</a> <span class="mx-2 slash">/</span>
                    <a href="<?= base_url('/jobs') ?>">Jobs</a> <span class="mx-2 slash">/</span>
                    <span class="text-white"><strong>Apply for a Job</strong></span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="apply_job_form bg-white p-5 shadow-sm rounded">
            <h4 class="mb-4">Apply for the Job</h4>
            <form id="applyJobForm" class="w-75" enctype="multipart/form-data">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                            <span class="text-danger" id="nameError"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                            <span class="text-danger" id="emailError"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="portfolio" class="form-label">Website/Portfolio Link</label>
                            <input type="text" id="portfolio" name="portfolio" class="form-control" placeholder="Enter your portfolio link">
                            <span class="text-danger" id="portfolioError"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="resume" class="form-label">Upload CV</label>
                            <input type="file" class="form-control" id="resume" name="resume">
                            <span class="text-danger" id="resumeError"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="coverletter" class="form-label">Cover Letter</label>
                            <textarea id="coverletter" name="coverletter" class="form-control" rows="6" placeholder="Write your cover letter"></textarea>
                            <span class="text-danger" id="coverletterError"></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <input type="hidden" name="job_id" value="<?= $job['id'] ?>">
                        <button type="submit" class="btn btn-primary w-100 py-2">Apply Now</button>
                    </div>
                </div>
                <div id="responseMessage"></div>
            </form>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#applyJobForm').submit(function(event) {
        event.preventDefault();
        const formData = new FormData(this);

        // Clear previous error messages
        $('.text-danger').text('');

        $.ajax({
            url: '<?= base_url('jobapply/applyJob') ?>',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.success) {
                    $("#responseMessage").html('<p class="text-success">' + response.message + '</p>');
                    $("#applyJobForm")[0].reset();
                } else {
                    if (response.errors) {
                        $.each(response.errors, function(key, value) {
                            $('#' + key + 'Error').html('<p class="text-danger">' + value + '</p>');
                        });
                    } else {
                        $("#responseMessage").html('<p class="text-danger">' + response.message + '</p>');
                    }
                }
            },
            error: function(xhr, status, error) {
                $("#responseMessage").html('<p class="text-danger">An error occurred. Please try again.</p>');
            }
        });
    });
});
</script>

<?= $this->endSection(); ?>
