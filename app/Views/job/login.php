<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<section class="section-hero overlay inner-page bg-image position-relative" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="d-flex">
          <div class="col-md-7 col-lg-12">
          <div class="n-breadcrumb-info">
                <h1>Account SignIn</h1><p class="mb-5 pb-5">Having great skills and specialty in software quality assurance, software testing, software requirement.</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
     

            <div class="row  shadow posilogin">

              <div class="col-lg-7">
                <div class="post-job-heading mt-4 pl-4">
                  <h3>Login Using your email</h3>
                </div>
                <form action="#" class="p-4" id="loginform">

                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="fname">Email</label>
                      <input type="text" id="fname" class="form-control" placeholder="Email address">
                    </div>
                  </div>
                  <div class="row form-group mb-4">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="fname">Password</label>
                      <input type="password" id="fname" class="form-control" placeholder="Password">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-md-12">
                      <button type="submit" value="Log In" class="btn px-4 btn-primary text-white">LOGIN</button>

                    </div>
                  </div>
                  <div id="responseMessage"></div>
                  Don't you have account? <a href="<?= base_url('/job/signup')?>">Sign up now</a>
                </form>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding">
                <div class="n-page-right-side">
                  <div class="post-job-heading">
                    <h3 class="text-light">Using Social Accounts</h3>
                  </div>
                  <div class="form-group">
                    <p class="text-light">mollis et mi. Morbi elementum, purus eu congue efficitur, justo dolor condimentum ex, at gravida nisi massa</p>
                  </div>
                  <div class="social-buttons">

                  </div>
                </div>
              </div>
            </div>
         
      </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      $('#loginform').submit(function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    $.ajax({
        url: '<?= base_url('/api/login') ?>', 
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            
            $('.text-danger').remove();

            if (response.status === 'success') {
                
                $("#responseMessage").html('<p class="text-success">' + response.message + '<a href="<?= base_url('/job/login') ?>">Login</a></p>');

            
                $("#signupForm")[0].reset();
            } else if (response.status === 'error') {
                
                $.each(response.errors, function (key, value) {
            if (key === 'gender' || key === 'user_type') {
                $('#' + key).after('<p class="text-danger">' + value + '</p>');
            } else {
                $('#' + key).after('<p class="text-danger">' + value + '</p>');
            }
        });
            }
        },
        error: function () {
            $("#responseMessage").html('<p class="text-danger">An error occurred. Please try again.</p>');
        }
    });
});

    </script>
    
<?= $this->endSection(); ?>