<!doctype html>
<html lang="en">

<head>
  <title>JobBoard &mdash; Website Template by Colorlib</title>


  
  <?= $this->include('headerlink'); ?>
</head>

<body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <!-- NAVBAR -->
   
 <?= $this->include('header'); ?>
    <!-- HOME -->
    <?= $this->renderSection('content'); ?>
     <?= $this->include('footer'); ?>
    </div>

  <!-- SCRIPTS -->
 
  <?= $this->include('jslink'); ?>

</body>

</html>