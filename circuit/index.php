<?php 
  $name     = "Accessorie Circuit";
  $content  = "Established in 1987, CIRCUIT is a comprehensive women’s accessory and footwear exhibition featuring fashion and fine jewelry, handbags, footwear, scarves, belts and gift items.";
  $keyword  = "ACIC, fashion, tradeshow, accessory tradeshow, accessories tradeshow, accessorie circuit, intermezzo collections, intermezzo, circuit, fashion tradeshow";
  include('../includes/variables.php');
  include($root . '/includes/ac/2016/may/ac-may2016-vars.php'); 
  include($root . '/includes/show-header.php');
?> 
<body class="ac showPage" id="showPage">
<?php if ($hero) : ?>
    <span id="top" class="<?php echo $hero; ?>"></span>
  <?php endif; ?>
<div id="wrapper">

 <!-- Navigation--> 
  <div id="nav-col">
    <div id="nav">
      <?php include($root . "/includes/main-nav.php"); ?>    
      </div>
  </div> <!-- End Navigation -->
    
   <!-- Content --> 
  <div id="main-col">
    <!-- Show Header -->
    <!-- Show Hero / Info Container -->
      <?php if ( $postano) : ?>
        <?php include($root . '/includes/ac/2015/ac-feb2015-postano.php'); ?>
      <?php elseif ( $hero) : ?>
        <?php include($root . '/includes/main-hero-container.php'); ?>
      <?php else : ?>
        <?php include($root . '/includes/new-template-show-header.php'); ?>
      <?php endif; ?>  
          
    <!-- Show Descriptions -->
    <?php include($root . '/includes/ac/2016/may/ac-2016-show-description.php'); ?>

    <!-- AC Forms -->
    <?php include($root . '/includes/ac/2016/may/ac-2016-forms.php'); ?>  
    
    <!-- Highlights -->     
    <?php include($root . '/includes/ac/2016/may/ac-may2016-highlights.php'); ?> 

    <!-- Roster -->     
    <?php include($root . '/includes/ac/2016/may/ac-may2016-roster.php'); ?> 
    
    <!-- Floorplans -->     
    <?php include($root . '/includes/ac/2016/may/ac-may2016-floorplan.php'); ?> 

    <!-- Hotel + Travel -->     
    <div style="float:left;height:890px;"><?php include($root . '/includes/_partials/partial-acic-hotel.php'); ?></div>

    <!-- Video -->     
    <?php include($root . '/includes/ac/2015/ac-aug2015-video.php'); ?>

    <!-- Gallery -->
    <?php include($root . '/includes/_partials/partial-gallery.php'); ?>

    <!-- BLANK SPACE-->
    <div style="float:left; clear:both; height:300px;" ></div>
        
    </div><!-- end main col-->

</div><!-- end wrapper-->


<?php include($root . "/includes/new-show-footer.php"); ?>
