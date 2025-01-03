<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="mt-5">
      <div class="container">

        <div class="row align-items-center">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div>
                <h2 class="">Post A Job</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
              </div>
              <div class="col-6">
                <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-12">
            <form class="p-4 p-md-5 border rounded w-75 shadow" method="" id="jobForm">
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
              
            
             
              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Product Designer">
              </div>
              <div class="form-group">
                <label for="job-location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="e.g. New York">
              </div>

              <div class="form-group">
        <label for="category">Category</label>
        <input type="text" class="form-control" id="category" name="category" placeholder="Design">
      </div>

              <div class="form-group">
                <label for="job-type">Job Type</label>
                <select class="selectpicker border rounded" id="type" name="type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option>Part Time</option>
                  <option>Full Time</option>
                </select>
              </div>
              <div class="form-group">
                <label for="job-title">salary</label>
                <input type="text" class="form-control" id="salary" name="salary" placeholder="Product Designer">
              </div>
             
              <div class="form-group">
                <label for="job-description">Job Description</label>
                <div class="" id="editor-1">
                  <!-- <p>Write Job Description!</p> -->
                  <textarea name="description" id="description" placeholder="Write Job Description!" class="form-control"></textarea>
                </div>
              </div>

              <div class="form-group">
        <label for="image">Job Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
            
               <!-- <a href="#" class="btn btn-block btn-primary btn-md w-25">Save Job</a> -->
              <button type="submit">Save Job</button>
            
             <div id="responseMessage"></div>
            </form>
          </div>

         
        </div>
        
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('#jobForm').submit(function(e) {
    e.preventDefault();
    
    var formData = new FormData(this);
    
    $.ajax({
        url: '<?= base_url('/job/store') ?>',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status === 'success') {
                $('#responseMessage').html('<p class="text-success">' + response.message + '</p>');
                $("#jobForm")[0].reset();
            } else if (response.status === 'error') {
                $.each(response.errors, function(key, value) {
                    $('#' + key).after('<p class="text-danger">' + value + '</p>');
                });
            }
        },
        error: function() {
            $('#responseMessage').html('<p class="text-danger">An error occurred, please try again.</p>');
        }
    });
});
</script>

<?= $this->endSection(); ?>