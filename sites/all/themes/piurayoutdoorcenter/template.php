<?php
function piurayoutdoorcenter_menu_link(array $variables) {
  /*** Get each of the menu elements, one by one ***/
  $element = $variables['element'];
  /*** Variable for store sub-menu (if any) ***/
  $sub_menu = '';

  /*** Get the sub-menu (if any) ***/
  $has_sub_menu = false;
  if ($element['#below']) {
    $has_sub_menu = true;
    $sub_menu = drupal_render($element['#below']);
  }

  /*** Alter menu parents, for scrolling ***/
  // If URL contains #, then add class for scrolling to respective section
  $is_scrolling_link = false;
  if (strpos(url($element['#href']), '#')) {
    $is_scrolling_link = true;
    $link = substr(url($element['#href']), 7);
    if ($element['#below']) {
      $output = '<a href="'.$link.'" class="page-scroll">' . $element['#title'] . '<span class="caret"></span></a>';
    } else {
      $output = '<a href="'.$link.'" class="page-scroll">' . $element['#title'] . '</a>';
    }
  } else {
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  }

  $menu_link = '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
  return drupal_is_front_page() ? $menu_link :
         (!$is_scrolling_link || $has_sub_menu) ? $menu_link : null;
}

function piurayoutdoorcenter_preprocess_page(&$vars) {
  // Add js to front page
  if(drupal_is_front_page()) {
    drupal_add_js(drupal_get_path('theme', 'piurayoutdoorcenter') . '/js/nav-scroll.js');
    drupal_add_js(drupal_get_path('theme', 'piurayoutdoorcenter') . '/js/local.js');
    drupal_add_js(drupal_get_path('theme', 'piurayoutdoorcenter') . '/js/jquery.easing.js');
  }
  // Add background variables
  $water_bg_fid = theme_get_setting('water_bg');
  $vars['water_bg_url'] = file_create_url(file_load($water_bg_fid)->uri);
}
