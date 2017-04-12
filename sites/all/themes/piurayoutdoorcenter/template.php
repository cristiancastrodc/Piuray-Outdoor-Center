<?php

function piurayoutdoorcenter_menu_link(array $variables) {
  /*** Get each of the menu elements, one by one ***/
  $element = $variables['element'];
  /*** Variable for store sub-menu (if any) ***/
  $sub_menu = '';

  /*** Get the sub-menu (if any) ***/
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }

  /*** Alter menu parents, for scrolling ***/
  if (strpos(url($element['#href']), '#')) {
    $link = substr(url($element['#href']), 7);
    if ($element['#below']) {
      $output = '<a href="'.$link.'" class="page-scroll">' . $element['#title'] . '<span class="caret"></span></a>';
    } else {
      $output = '<a href="'.$link.'" class="page-scroll">' . $element['#title'] . '</a>';
    }
  } else {
    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  }

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function piurayoutdoorcenter_preprocess_page(&$vars) {
  if(drupal_is_front_page()) {
    drupal_add_js(drupal_get_path('theme', 'piurayoutdoorcenter') . '/js/nav-scroll.js');
    drupal_add_js(drupal_get_path('theme', 'piurayoutdoorcenter') . '/js/local.js');
    drupal_add_js(drupal_get_path('theme', 'piurayoutdoorcenter') . '/js/jquery.easing.js');
  }
}