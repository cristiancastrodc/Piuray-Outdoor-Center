<body id="page-top">

<?php if ($page['navbar']): ?>
  <!-- Navigation -->
  <nav class="navbar">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive" /></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="menu">
        <?php print render($page['navbar']); ?>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
<?php endif; ?>

<?php if ($page['header']): ?>
  <!-- Header -->
  <header>
    <div class="container-fluid no-padding">
      <div class="row">
        <div class="col-lg-12">
          <?php print render($page['header']); ?>
        </div>
      </div>
    </div>
  </header>
<?php endif; ?>

<section id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</section>

<?php if ($page['water']): ?>
  <section id="water-header" style="background-image: url(<?php echo $water_bg_url; ?>);">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1><?php print t("WATER"); ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section id="water-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <?php print render($page['water']); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($page['earth_2']): ?>
  <section id="earth-header">
    <div class="container">
      <div class="row">
        <div class="col-md-11 col-md-offset-1">
          <h1><?php print t("EARTH"); ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section id="earth-content">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-1">
          <h1><?php print t("EARTH"); ?></h1>
        </div>
        <div class="col-sm-6 col-md-4 text-right">
          <?php print render($page['earth']); ?>
        </div>
        <div class="col-sm-6 col-md-3">
          <?php print render($page['earth_2']); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($page['gastronomy']): ?>
  <section id="gastronomy-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-right">
          <h1><?php print t("GASTRONOMY"); ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section id="gastronomy-content">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-1 col-lg-3 text-right">
          <?php print render($page['gastronomy']); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($page['social']): ?>
  <section id="social-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <h1><?php print t("SOCIAL PROGRAM"); ?></h1>
        </div>
      </div>
    </div>
  </section>
  <section id="social-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php print render($page['social']); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if ($page['info']): ?>
  <section id="info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <?php print render($page['info']); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<!-- Copyright Section -->
<div id="copyright">
  <a href="http://insidelab.net" target="_blank"></a>
</div>

</body>