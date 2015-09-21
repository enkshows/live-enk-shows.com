<div class="module" id="floorplans">
  <h1>Floor Plans</h1>
  <h2><?php echo $venue; ?></h2>
  <p> To view and/or download a detailed floor plan, click the links on the left or on the desired venue or venue level from the image.  
    Detailed floor plans are typically available 4-6 weeks prior to the Show opening.</p>
    <div class="row">
      <nav class="row-item item-one-third">
        <ul class="page-inner-nav">
          <li>3D Overview</li>
        </ul>
        <div id="btn1" class="showcol-btn1">
        <a onClick=" OpenMapYourShowMax(this.href,this.target);return false" class="showcol-link" target="floorplan" 
        href="http://www.mapyourshow.com/shows/index.cfm?Show_ID=COTERIE15">Show Planner</a>
        <!--<a href="http://www.mapyourshow.com/shows/index.cfm?show_id=coterie15" target="_blank" class="showcol-link">SHOW PLANNER</a>-->
        </div>     
      </nav>
      <div class="row-item item-two-third">
        <a href="<?php echo PDF_FC; ?>2015/sep/fc-sep2015_exhibitormap_lv4.pdf" target="_blank">
          <img width="320"  src="<?php echo IMG_FC; ?>2015/sep/fc-sep2015-level4.png" border="0">
        </a>
        <a href="<?php echo PDF_FC; ?>2015/sep/fc-sep2015_exhibitormap_lv3.pdf" target="_blank">
          <img width="100%"  src="<?php echo IMG_FC; ?>2015/sep/fc-sep2015-level3.png" border="0">
        </a>
        <a href="<?php echo PDF_FC; ?>2015/sep/fc-sep2015_exhibitormap_lv1.pdf" target="_blank">
          <img width="400"  src="<?php echo IMG_FC; ?>2015/sep/fc-sep2015-level1.png" border="0">
        </a>
      </div>  
    </div>
</div>
<!-- <li>
  Detailed Floor Plan</a>
  <ul class="inner-nav--sub-nav">
    <li><a href="<?php //echo PDF_FC; ?>2015/feb/fc-feb2015_exhibitormap_lv4.pdf">Level 4 (100 - 800)</a></li>
    <li><a href="<?php //echo PDF_FC; ?>2015/feb/fc-feb2015_exhibitormap_lv3.pdf">Level 3 (1500 - 8000)</a></li>
    <li><a href="<?php //echo PDF_FC; ?>2015/feb/fc-feb2015_exhibitormap_lv1.pdf">Level 1 (8300 - 10,000)</a></li>
  </ul>
</li> -->