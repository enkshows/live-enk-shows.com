<?php 
  $name     = "Coterie";
  $content  = "An International fashion exhibition in the U.S. featuring contemporary to traditional women’s ready-to-wear. Twice a year in NYC, concurrent with Sole Commerce and TMRW";
  $keyword  = "Fashion Coterie, Coterie, womens trade show, womans trade show, international fashion trade show, sole commerce, tmrw, javits fashion, javits";
  include('../../../includes/variables.php'); 
  include($root . '/includes/fc/2016/feb/fc-feb2016-vars.php');
  include($root . '/includes/show-header.php');
?> 
<body class="coteriePage fc showPage" id="showPage">
<?php if ($hero) : ?>
    <span id="top" class="<?php echo $hero; ?>"></span>
<?php endif; ?>
<div id="wrapper">
  <!-- Navigation-->  
  <div id="nav-col">
    <div id="nav">
      <?php include($root . "/includes/main-nav.php"); ?>
      <?php include($root . "/includes/main-nav-social.php"); ?>
    </div>
  </div> <!-- End Navigation --> 
  
    <!-- Content--> 
    <div id="main-col">
      <!-- Show Hero / Info Container -->
      <?php if ( $postano) : ?>
        <?php include($root . '/includes/fc/2016/feb/fc-feb2016-postano.php'); ?>
      <?php elseif ( $hero) : ?>
        <?php include($root . '/includes/main-hero-container.php'); ?>
      <?php else : ?>
        <?php include($root . '/includes/new-template-show-header.php'); ?>
      <?php endif; ?>

      <!-- Show Descriptions -->
      <?php include($root . '/includes/fc/2016/feb/fc-2016-show-description.php'); ?>
    
      <!-- Info Links/forms -->  
      <?php include($root . '/includes/fc/2016/feb/fc-2016-forms.php'); ?>

      <!-- Highlights  
      <?php //include($root . '/includes/fc/2016/feb/fc-feb2016-highlights.php'); ?>  -->   
      
      <!-- Soundcloud Module --> 
      <?php include($root . '/includes/fc/2016/feb/fc-feb2016-soundcloud.php'); ?>

      <!-- Roster Module --> 
      <?php include($root . '/includes/fc/2016/feb/fc-feb2016-roster-post.php'); ?>

      <!-- Floorplan Module --> 
      <?php include($root . '/includes/fc/2016/feb/fc-feb2016-floorplan.php'); ?>  

      <!-- Hotel + Travel Module --> 
      <div style="float:left;height:910px;"><?php include($root . '/includes/_partials/partial-fc-hotel.php'); ?></div>

      <!-- Gallery --> 
      <?php include($root . '/includes/_partials/partial-gallery.php'); ?>  
    
      <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;"></div>
      <!-- BLANK SPACE-->
    
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include($root . '/includes/new-show-footer.php'); ?>