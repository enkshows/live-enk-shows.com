<?php 
$name     = "Sole Commerece";
$content  = "A trade show dedicated exclusively to footwear and handbags with the best domestic and international retailers.";
$keyword  = "Sole Commerce, Mens Tradeshow, Womens fashion tradeshow, New york trade show, international trade show, fashion coterie, ENK, Accessories tradeshow, Shoes Tradeshow, sole commerce, fashion trade events";
  include('../../../includes/variables.php'); 
  include($root . '/includes/sc/2016/sept/sc-sept016-vars.php');
  include($root . '/includes/show-header.php');
?> 
<body class="coteriePage sc showPage" id="showPage">
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
        <?php include($root . '/includes/sc/2016/sept/sc-sept016-postano.php'); ?>
      <?php elseif ( $hero) : ?>
        <?php include($root . '/includes/main-hero-container.php'); ?>
      <?php else : ?>
        <?php include($root . '/includes/new-template-show-header.php'); ?>
      <?php endif; ?>

      <!-- Show Descriptions -->
      <?php include($root . '/includes/sc/2016/sept/sc-2016-show-description.php'); ?>
    
      <!-- Info Links/forms -->  
      <?php include($root . '/includes/sc/2016/sept/sc-2016-forms.php'); ?>  

      <!-- Roster Module --> 
      <?php include($root . '/includes/sc/2016/sept/sc-sept016-roster-post.php'); ?>

      <!-- Floorplan Module --> 
      <?php include($root . '/includes/sc/2016/sept/sc-sept016-floorplan.php'); ?>      

      <!-- Hotel + Travel Module --> 
      <div style="float:left;height:890px;"><?php include($root . '/includes/_partials/partial-fc-hotel.php'); ?></div>

      <!-- Gallery --> 
      <?php include($root . '/includes/_partials/partial-gallery.php'); ?>  
    
      <!-- BLANK SPACE-->
      <div style="float:left; clear:both; height:300px;"></div>
      <!-- BLANK SPACE-->
    
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include($root . '/includes/new-show-footer.php'); ?>