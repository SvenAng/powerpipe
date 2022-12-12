<?php

/**
 * Implements template_preprocess_html().
 */
function powerpipe_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function powerpipe_preprocess_page(&$variables) {
}

/**
 * Implements template_preprocess_node.
 */
function powerpipe_preprocess_node(&$variables) {
}


/**
 * Implements theme_menu_link().
 */
 function powerpipe_menu_tree__menu_block__2($variables) {
   return '<ul class="main-menu">' . $variables['tree'] . '</ul>';
 }
 
 

/**
 * Implements theme_menu_link().
 */
function powerpipe_menu_link(array $variables) {
 $element = $variables['element'];
   $sub_menu = '';
 
   $element['#attributes']['class'][] = 'Level1';
 
   if ($element['#below']) {
   unset($element['#below']['#theme_wrappers']);
     $sub_menu = '<ul class="submenu">' . drupal_render($element['#below']) . '</ul>';
     
   }
   else{
   	$variables['element']['#localized_options']['attributes']['class'][] = 'no-submenu';
   	//$variables['element']['#localized_options']['attributes']['class'][] = 'XXXX';
   	return theme_menu_link($variables);
   }
   $output = l($element['#title'], $element['#href'], $element['#localized_options']);
   return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
 
}



function powerpipe_preprocess_file_icon(&$variables) {
  $variables['icon_directory'] = drupal_get_path('theme', 'powerpipe') . '/images/file_icons';

  if (!empty($vars['is_front'])) {
    metatag_page_build($vars['page']);
  }
}


function powerpipe_paragraphs_view($variables) {
   $element = $variables['element'];
   return $element['#children'];
}

?>

