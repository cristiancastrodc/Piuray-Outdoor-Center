<section id="logo">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <a href="<?php print $front_page; ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="img-responsive center-block" />
        </a>
      </div>
    </div>
  </div>
</section>

<?php if (!empty($tabs)): ?>
  <section id="tabs">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <?php print render($tabs); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<?php if ($messages): ?>
  <section id="messages">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <?php print $messages; ?>
        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<section id="user">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</section>