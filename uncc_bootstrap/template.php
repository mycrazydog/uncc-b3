<?php

/**
 * @file
 * template.php
 */


function uncc_bootstrap_preprocess_html(&$variables) {

  $nav_style = theme_get_setting('nav_style');
  $variables['classes_array'][] = "nav-" . $nav_style;
  
}





/**
 OVERRIDE
 * @file
 * menu-tree.func.php
 */

/**
 * Bootstrap theme wrapper function for the primary menu links.
 */
function uncc_bootstrap_menu_tree__primary(&$variables) {
  return '<ul class="menu nav nav-justified">' . $variables['tree'] . '</ul>';
}




