 <aside class="right-off-canvas-menu">
        <!--<?php print ($alt_main_menu); ?>-->
        <?php print render($page['offcanvas_meny']); ?>
        <?php print render($page['lang']); ?>
 </aside>
 <?php $sokvag = url($_GET['q']);?>
  <?php $soksidapath_se = '/sv/kontakt';?>
  <?php $soksidapath_en = '/en/contact';?>
  <?php $salespath_se = '/sv/kontakt/forsaljning';?>
  <?php $salespath_en = '/en/contact/sales';?>
  <?php $ovrigapath_se = '/sv/kontakt/ovriga';?>
  <?php $ovrigapath_en = '/en/contact/common';?>
  <?php $ledningpath_se = '/sv/kontakt/ledning';?>
  <?php $ledningpath_en = '/en/contact/management';?>
  <?php $vitbakgrund = ""; ?>
    <a class="exit-off-canvas"></a>
<!--.page -->
<div role="document" class="page">

  <!--.l-header -->  <header role="banner" class="l-header">

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
    

    <!-- <div class="language-menu row"> -->
      <!-- <div class="columns small-12"> -->
         <?php //print render($page['langu']); ?>
      <!-- </div> -->
    <!-- </div> -->

    <div class="lev1-navigation row">
      <!--<div class="row">-->
	      
  		<div class="small-10 large-4 columns logo">
  			<div class="logo-inside">	
       		<?php print $linked_logo; ?>		
  		  </div>
  		</div>
  		<div class="large-8 columns main-navigation show-for-large-up">
        <div class="language-menu"><?php print render($page['langu']); ?></div>
  			<?php print render($page['nav1']); ?>
      </div>
          
      <nav class="tab-bar small-2 columns hide-for-large-up">
        <a class="right-off-canvas-toggle menu-icon" href="#" ><span></span></a>
      </nav>
    </div>
	
	<div class="lev2-navigation show-for-large-up">
		<div class="row">
			<?php print render($page['nav2']); ?>
		</div>	
	</div>
    <?php endif; ?>
    
  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
  <div class="featured">
    <!--.l-featured -->
    <section class="l-featured">
      <!-- <div class="columns"> -->
        <?php print render($page['featured']); ?>
      <!-- </div> -->
    </section>
    <!--/.l-featured -->
    </div>
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>
  
  <?php if ($soksidapath_se == $sokvag || $soksidapath_en == $sokvag || $salespath_se == $sokvag || $salespath_en == $sokvag || $ovrigapath_se == $sokvag || $ovrigapath_en == $sokvag || $ledningpath_se == $sokvag || $ledningpath_en == $sokvag): ?>
    <?php $vitbakgrund = "style='background-color:#fff;'"; ?>
  <?php endif; ?>
  <!--.l-main -->
   <?php //print $sokvag;?>
  <div class="outer-main" <?php print $vitbakgrund; ?>>
  <main role="main" class="row l-main">
    <!-- .l-main region -->
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($breadcrumb): ?>
      	<div class="hide-for-small-only">
      		<? print $breadcrumb; ?>
      	</div>
      <?php endif; ?>

      <?php if ($title): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      
      <?php if ($soksidapath_se != $sokvag && $soksidapath_en != $sokvag): ?>
        
        <?php print render($page['content']); ?>
      <?php endif; ?>
    </div>
    <!--/.l-main region -->


    <?php if ($soksidapath_se == $sokvag || $soksidapath_en == $sokvag): ?>
        <div class="columns medium-12 small-12">
          <?php //print $title; ?>
          <?php print render($page['sidebar_news']); ?>
        </div>
        <div class="columns medium-12 small-12">
          <?php print render($page['content']); ?>
        </div>
        
    <?php endif; ?> 
      
      

    <?php //endif; ?>



    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  </div>
  <!--/.l-main -->
	<!--.viewblock -->
	
		<?php if (!empty($page['viewblock'])): ?>
		<div class="viewblock">
		  <section class="viewblock-content row">
		    <?php print render($page['viewblock']); ?>
		  </section>
		</div>
		<?php endif; ?>
	
	<!--/.viewblock -->
	<!--.Callout full -->
	<div class="callout-full">
		<?php if (!empty($page['calloutfull'])): ?>
		  <section class="callout-full-content row">
		    <?php print render($page['calloutfull']); ?>
		  </section>
		<?php endif; ?>
	</div>
	<!--/.viewblock -->
  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <div class="outer-triptych">
    <section class="l-triptych row">
      <div class="triptych-first medium-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle medium-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last medium-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    </div>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <div class="outer-footer-columns">
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first small-12 medium-2 large-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second small-12 medium-7 large-6 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="small-12 medium-3 large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      
    </section>
    </div>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer -->
  <div class="outer-footer">
  <footer class="l-footer row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) : ?>
      <div class="copyright columns">
        &copy; <?php print date('Y') . ' ' . $site_name . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  </div>
  <!--/.l-footer -->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>

<!--/.page -->
