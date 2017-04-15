<header>
  <div class="container-fluid no-padding">
    <div class="row">
      <div class="col-lg-12">
        <img class="img-responsive center-block" src="<?php print base_path() . path_to_theme(); ?>/css/img/bg-contact.jpg" width="1920" height="1080">
      </div>
    </div>
  </div>
</header>
<section class="node-title">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5 col-sm-6 pull-right text-right text-uppercase">
        <h1><?php print t("CONTACT"); ?></h1>
      </div>
    </div>
  </div>
</section>
<section class="node-content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php print render($content['webform']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10">
        <ul class="list-inline social-links pull-right">
          <li><a href="https://www.facebook.com/PIURAYOC" target="_blank"><i class="fa fa-3x fa-facebook"></i></a></li>
          <li><a href="https://www.tripadvisor.com/Attraction_Review-g294314-d8754774-Reviews-Piuray_Outdoor_Center-Cusco_Cusco_Region.html" target="_blank"><i class="fa fa-3x fa-tripadvisor"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="map">
  <div class="container-fluid no-padding">
    <div class="row">
      <div class="col-lg-12">
        <?php
          $block = module_invoke('views', 'block_view', 'front_map-block');
          print render($block);
        ?>
      </div>
    </div>
  </div>
</section>
