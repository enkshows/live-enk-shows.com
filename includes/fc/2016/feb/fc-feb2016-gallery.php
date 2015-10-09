<!-- Gallery -->
<div id="gallery" class="module">
  <h1>Gallery</h1>
    <div class="slider-wrapper theme-default controlnav-thumbs">
      <div class="ribbon"></div>
      <div id="slider" class="nivoSlider">
        <?php 
          $path = IMG_FC . '2016/feb/fc-feb2016-gallery';
          for ($i = 1; $i <= 6; $i++){
            echo '<img src="' . $path . $i .'.jpg" data-thumb="' . $path . $i . '-thumb.jpg" alt="" />';
          }
        ?>
      </div>
    </div>
</div>