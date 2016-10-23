<?php
/**
 * @file
 * Definition of Zurb Foundation Two column stacked Display Suite layout.
 */

function ds_zf_2col_stacked_nyheter() {
  return array(
    'label' => t('Powerpipe Nyheter'),
    'regions' => array(
      'header' => t('Header'),
      'left' => t('Left'),
      'right' => t('Right'),
      'footer' => t('Footer'),
    ),
    'image' => TRUE,
  );
}
