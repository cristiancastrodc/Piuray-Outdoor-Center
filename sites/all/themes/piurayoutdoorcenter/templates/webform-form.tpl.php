<?php
  // Print out the progress bar at the top of the page
  print drupal_render($form['progressbar']);

  // Print out the preview message if on the preview page.
  if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
  }
?>

<div class="row">
  <div class="col-md-3 col-md-offset-1">
    <?php if (array_key_exists('nombre', $form['submitted'])): ?>
      <?php print drupal_render($form['submitted']['nombre']); ?>
    <?php endif ?>
    <?php if (array_key_exists('name', $form['submitted'])): ?>
      <?php print drupal_render($form['submitted']['name']); ?>
    <?php endif ?>
  </div>
  <div class="col-md-3">
    <?php if (array_key_exists('telefono', $form['submitted'])): ?>
      <?php print drupal_render($form['submitted']['telefono']); ?>
    <?php endif ?>
    <?php if (array_key_exists('phone', $form['submitted'])): ?>
      <?php print drupal_render($form['submitted']['phone']); ?>
    <?php endif ?>
  </div>
  <div class="col-md-3">
    <?php if (array_key_exists('email', $form['submitted'])): ?>
      <?php print drupal_render($form['submitted']['email']); ?>
    <?php endif ?>
  </div>
</div>
<div class="row">
  <div class="col-md-9 col-md-offset-1">
    <?php if (array_key_exists('comentario', $form['submitted'])): ?>
      <?php print drupal_render($form['submitted']['comentario']); ?>
    <?php endif ?>
    <?php if (array_key_exists('message', $form['submitted'])): ?>
      <?php print drupal_render($form['submitted']['message']); ?>
    <?php endif ?>
  </div>
</div>
<div class="row">
  <div class="col-md-3 col-md-offset-1">
    <?php print drupal_render_children($form); ?>
  </div>
</div>
