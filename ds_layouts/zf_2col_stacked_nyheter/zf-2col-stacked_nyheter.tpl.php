<?php
/**
 * @file
 * Template for Powerpipe Zurb Foundation Two column stacked Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="zf-2col-stackeds <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php if (!empty($header)): ?>
    <div class="<?php print $zf_wrapper_classes; ?>>
      <<?php print $header_wrapper ?> class="group-header columns snall-12">
      <?php print $header; ?>
      </<?php print $header_wrapper ?>>
    </div>
  <?php endif; ?>

  
    <div class="<?php print $zf_wrapper_classes; ?>">
   <?php if (!empty($right)): ?>
      <<?php print $left_wrapper ?> class="small-12 medium-8 columns <?php print $left_classes; ?>">
    <?php else:?>
      <<?php print $left_wrapper ?> class="small-12 medium-8 columns <?php print $left_classes; ?>">
    <?php endif; ?>
    <?php print $left; ?>
    </<?php print $left_wrapper ?>>
  
  <?php //if (!empty($right)): ?>
      <<?php print $right_wrapper ?> class="small-12 medium-4 columns right-column<?php print $right_classes; ?>">
      <?php print $right; ?>
      
      <!-- <h4 class="title"><?php print t('Fler nyheter'); ?></h4> -->
      <?php //print views_embed_view('nyheter_nod', 'block'); ?>
      </<?php print $right_wrapper ?>>
    </div>
  <?php //endif; ?>

  <?php if (!empty($footer)): ?>
    <div class="<?php print $zf_wrapper_classes; ?>">
      <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
      <?php print $footer; ?>
      </<?php print $footer_wrapper ?>>
    </div>
  <?php endif; ?>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
