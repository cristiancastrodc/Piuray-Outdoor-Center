<?php if (!empty($content['field_imagen'])): ?>
  <header>
    <div class="container-fluid no-padding">
      <div class="row">
        <div class="col-lg-12">
          <?php print render($content['field_imagen']); ?>
        </div>
      </div>
    </div>
  </header>
<?php endif; ?>

<section class="node-title">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-6 pull-right text-right text-uppercase">
        <h1><?php print $title; ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="node-content">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-justify">
        <?php print render($content['body']); ?>
      </div>
    </div>
    <?php if (!empty($content['field_incluye'])): ?>
      <div class="row">
        <div class="col-sm-4 text-right">
          <h2><span class="pre">¿</span><?php print t('What is included'); ?><span class="post">?</span></h2>
        </div>
        <div class="col-sm-8">
          <?php print render($content['field_incluye']); ?>
        </div>
      </div>
    <?php endif ?>
    <?php if (!empty($content['field_otros'])): ?>
      <div class="row">
        <div class="col-sm-8 col-sm-offset-4">
          <?php print render($content['field_otros']); ?>
        </div>
      </div>
    <?php endif ?>
    <?php if (!empty($content['field_galeria'])): ?>
      <div class="row">
        <div class="col-lg-12">
          <h2 class="links-title"><?php print t('Gallery'); ?></h2>
          <?php print render($content['field_galeria']); ?>
        </div>
      </div>
    <?php endif ?>
  </div>
</section>