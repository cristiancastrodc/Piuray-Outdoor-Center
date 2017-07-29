<?php if ($page['navbar']): ?>
  <!-- Navigation -->
  <nav class="navbar navbar-shrink">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php print $front_page; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive" /></a>
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

<div class="error-page-content">
  <header>
    <div class="container-fluid no-padding">
      <div class="row">
        <div class="col-lg-12">
          <img src="<?php print base_path() . path_to_theme(); ?>/img/error-img.jpg" alt="" class="img-responsive center-block">
        </div>
      </div>
    </div>
  </header>

  <div class="error-message">
    <?php print render($page['content']); ?>
  </div>
</div>

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
