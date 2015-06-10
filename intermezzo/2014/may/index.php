<?php 
  require('../../../bin/ClassMathGuard.php');
  include("../../../includes/variables.php");
  include("../../../includes/ic/ic-header.php"); 
?>

<body class="icPage showPage">
  <span id="top" class="ic-may2014-hero"></span>
<div id="wrapper">

   <!-- Navigation--> 
    <div id="nav-col">
      <div id="nav">
          <?php include('../../../includes/main-nav.php'); ?> 
            
            <?php include('../../../includes/main-nav-social.php'); ?> 
        </div>
    </div> <!-- End Navigation -->
    
    <!-- Content -->  
  <div id="main-col">

        <!-- Header -->
        <?php include('../../../includes/main-hero-container.php'); ?>   
        
        <!-- Show Description -->
        <?php include('../../../includes/ic/ic-show-description.php'); ?>

        <!-- Forms -->
        <?php include('../../../includes/ic/ic-forms-archive.php'); ?>
        
        <!-- Highlights -->
        <?php include('../../../includes/ic/ic-may2014-highlights-archive.php'); ?>
        
        <!-- Roster -->
        <?php include('../../../includes/ic/ic-may2014-roster.php'); ?>
        
        <!-- Floorplan -->
        <?php include('../../../includes/ac/acic-may2014-floorplan.php'); ?>
        
        <!-- Hotel + Travel -->
        <?php include('../../../includes/ac/acic-may2014-hotel.php'); ?>
        
        <!-- Video -->
        <?php include('../../../includes/ic/ic-may2014-video.php'); ?>
        
        <!-- Gallery -->
        <?php include('../../../includes/ic/ic-may2014-gallery.php'); ?>
      <!-- BLANK SPACE-->
            <div style="float:left; clear:both; height:300px;" >
            </div>
        <!-- BLANK SPACE-->
        
    </div><!-- end main col-->

</div><!-- end wrapper-->

<?php include("../../../includes/show-footer.php"); ?>
