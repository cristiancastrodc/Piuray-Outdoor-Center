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

<?php if ($logged_in): ?>
  <section id="admin">
    <div class="container">
      <?php if (!empty($tabs)): ?>
        <div class="row">
          <div class="col-lg-12">
            <?php print render($tabs); ?>
          </div>
        </div>
      <?php endif ?>
      <?php if ($messages): ?>
        <div class="row">
          <div class="col-lg-12">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif ?>
    </div>
  </section>
<?php endif ?>

<?php print render($page['content']); ?>

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
