<!-- Gallery -->
<div id="gallery" class="module">
	<h1 style="margin-bottom:20px;">Gallery</h1>
	<div class="module-content" style="margin:10px 0px 0px 0px">
		<div class="slider-wrapper theme-default controlnav-thumbs">
			<div class="ribbon"></div>
			<div id="slider" class="nivoSlider">
				<?php 
					$path = FWD . '2016/jan/fwd-jan2016-gallery';
					for ($i = 1; $i <= 6; $i++){
						echo '<img src="' . $path . $i .'.jpg" data-thumb="' . $path . '-thumb' . $i .'.jpg" alt="" />';
					}
				?>fasfasfsdf
			</div>
		</div>
	</div> 
</div>