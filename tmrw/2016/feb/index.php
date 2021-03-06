<?php 
  $name     = "TMRW";
  $content  = "A select portfolio of emerging contemporary designers in a unique and intimate setting within Coterie, held twice a year in NYC.";
  $keyword  = "tmrw, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events";

  include('../../../includes/variables.php'); 
  include($root . '/includes/tmrw/2016/feb/tmrw-feb2016-vars.php');
  include($root . '/includes/show-header.php');
?>

<body class="showPage tmrw" id="showPage">
  <?php if ($hero) : ?>
    <span id="top" class="<?php echo $hero; ?>"></span>
  <?php endif; ?>
  <div id="wrapper">

      <!-- Navigation-->  
    <div id="nav-col">
      <div id="nav">
          <?php include($root . '/includes/main-nav.php'); ?>
           <?php include($root . '/includes/main-nav-social.php'); ?>
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content--> 
  <div id="main-col">

        <?php if ( $postano) : ?>
          <?php include($root . '/includes/tmrw/2016/feb/tmrw-feb2016-postano.php'); ?>
        <?php elseif ( $hero) : ?>
          <?php include($root . '/includes/main-hero-container.php'); ?>
        <?php else : ?>
          <?php include($root . '/includes/new-template-show-header.php'); ?>
        <?php endif; ?>
        
        <!-- Show Description -->
        <?php include($root . '/includes/tmrw/2016/feb/tmrw-2016-show-description.php'); ?>
        
        <!-- Forms -->
        <?php include($root . '/includes/tmrw/2016/feb/tmrw-feb2016-forms.php'); ?>

        <!-- Highlights -->
        <?php include($root . '/includes/tmrw/2016/feb/tmrw-feb2016-highlights.php'); ?> 

        <!-- Music -->
        <?php include($root . '/includes/tmrw/2016/feb/tmrw-feb2016-soundcloud.php'); ?>
        
        <!-- Roster Module 
        <?php //include($root . '/includes/tmrw/2016/feb/tmrw-sept2016-roster-post.php'); ?>--> 

        <!-- Floorplan -->
        <?php include($root . '/includes/tmrw/2016/feb/tmrw-feb2016-floorplan.php'); ?> 

        <!-- Hotel + Travel -->
        <div style="float:left;height:890px;"><?php include($root . '/includes/_partials/partial-fc-hotel.php'); ?></div>

        <!-- Video -->
        <?php include($root . '/includes/_partials/partial-video.php'); ?>

        <!-- Gallery -->
        <?php include($root . '/includes/_partials/partial-gallery.php'); ?> 

      
        <!-- BLANK SPACE-->
            <div style="float:left; clear:both; height:300px;" ></div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . "/includes/new-show-footer.php"); ?>