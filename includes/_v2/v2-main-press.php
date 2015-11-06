<?php 
  // this includes the config file with all show information
  // it exists on the server
  include($root . "/includes/_content/_content-main-press.php");
?>
<div class="module" id="press">
	<h1>Press</h1>
	<div class="row no-border">
		<h2>Recent Articles</h2>
		<ul class="press-items">
			<?php foreach ($press as $key) : ?>
				<li>
					<a class="press-image" href="<?php echo $key['link'];?>" target="_blank">
						<img src="<?php echo $key['image'];?>" alt="">
						<div class="press-title">
							<?php if ($key['title']):?>
								<p><?php echo $key['show'];?></p>
							<?php endif; ?>
							<?php if ($key['title']):?>
								<h3><?php echo $key['publication'];?></h3>
							<?php endif; ?>
						</div>
					</a>
				</li>
			<?php endforeach; ?>

			<!-- <li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title that is longer than a normal title we typically have on this site. </h3>
					</div>
				</a>
				
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li>
			<li>
				<a class="press-image" href="http://www.google.com" target="_blank">
					<img src="http://fillmurray.com/100/125" alt="">
					<div class="press-title">
						<h3>Press Title</h3>
					</div>
				</a>
			</li> -->
		</ul>
	</div>
	<div class="row">
		<h2>Press Registration</h2>

			<div class="press-reg-container">
				<p>To register as press for Circuit, Intermezzo, FWD January 10.11.12 2016</p>
				<a href="http://advanstar.force.com/acic/webRegLookupPress" class="regBtn" target="_blank">CLICK HERE</a>
			</div>

			<div class="press-reg-container">
				<p>To register as press for Children’s Club January 10.11.12 2016</p>
				<a href="http://advanstar.force.com/childrensclub/webRegLookupPress" class="regBtn" target="_blank">CLICK HERE</a>
			</div>	

			<div class="press-reg-container">
				<p>To register as press for Coterie, Sole, TMRW, FWD February 22.23.24 2016</p>
				<a href="http://advanstar.force.com/coterie/webRegLookupPress" class="regBtn" target="_blank">CLICK HERE</a>
			</div>					
  
		<!--
		<p>For press inquiries please complete the form below. A representative will contact you within 24 business hours. For immediate assistance, please call 212.951.6600.</p>
		<div id="press_form">
			<form id="pressForm" method="post" action="bin/pressForm.php" class="form">
				<fieldset>
					<div class="formcol-l" >
						<input type="text" name="firstName" size="30" value="First Name" class="form-control firstName text-input required" tabindex="201"><br>
						<input type="text" name="companyName"  size="30" value="Company Name" class="form-control input-half m-r-11 pressCompanyName text-input required" tabindex="203"> 
						<input type="text" name="contactPhone"  size="30" value="Contact Phone" class="form-control input-half  pressContactPhone text-input required" tabindex="204"><br>
					</div>
					<div class="formcol-r" >
						<input type="text" name="lastName" size="30" value="Last Name" class="form-control lastName text-input required" tabindex="202"><br>
						<input type="text" name="contactEmail"  size="30" value="Contact Email" class="form-control pressContactEmail text-input email" tabindex="205">
					</div>
					<div class="form-bottom">
						<textarea name="comments" cols="27" rows="5" value="Comments" class="form-control pressComments text-input required" tabindex="206" placeholder="Comments">
							Comments
						</textarea>

						<input type="submit" style="margin-top:20px;" name="submit" class="button" id="pressForm_button" value="Send" tabindex="207">
						<div class="captcha" style="margin-top:0px;">
							<div class="enkCaptcha" id="mainPressFormCaptcha"></div>
						</div>
					</div>
				</fieldset>
				<div class="form_message"></div>
			</form>
		</div>-->
	</div>
</div>

<!-- 

<div id="press" class="module">
	<div class="module-content">
		<h1>Press</h1>
		<h2>Recent Articles</h2>
		<div class="imagePressBox">
		  <div class="element" >
		    <a href="http://enkshows.com/pdf/press/ev-aug2014-wwd.pdf" target="_blank" class="captionShow" style="height:55px;">
		      <span class="publication" target="_blank" style="color: white;">ENK Vegas</span>
		      <br />
		      <span class="article" target="_blank" style="color: white;">WWD</span>
		    </a>
		    <a href="http://enkshows.com/pdf/press/ev-aug2014-wwd.pdf" target="_blank">
		      <img src="<?php echo IMG; ?>press/WWD_general.jpg" />
		    </a>
		  </div>
			<div class="element" >   
				<div class="caption">
					<span class="show" style="font-size:8px;">Coterie</span>
					<br />
					<span class="article">Daily Front Row</span>
				</div>
				<a href="http://www.fashionweekdaily.com/the-fix/article/coterie-sole-daily-diaries" target="_blank">
					<img src="img/home/press/thumb/130313_daily.jpg" />
				</a>
			</div>  
			<div class="element" >   
				<div class="caption">
					<span class="show" style="font-size:8px;">Coterie</span>
					<br />
					<span class="article">WPIX 11</span>
				</div>
				<a href="http://pix11.com/2013/03/04/the-latest-in-style-colors-from-the-coterie-fashion-tradeshow/#axzz2MbpwWD2D" target="_blank">
					<img src="img/home/press/thumb/130306_PIX11.jpg" />
				</a>
			</div>  
			<div class="element">   
				<div class="caption">
					<span class="show">Circuit.Intermezzo</span>
					<br />
					<span class="article">Trendstop</span>
				</div>
				<a href="http://blog.trendstop.com/2013/01/styled-by-trendstop-in-the-know-enk-2013/" target="_blank" >
					<img src="img/home/press/thumb/130122_Trendstop-ACIC.jpg" />
				</a>
			</div>
			<div class="element">   
				<div class="caption">
					<span class="show">Coterie</span>
					<br />
					<span class="article">WWD</span>
				</div>
				<a href="http://www.wwd.com/markets-news/ready-to-wear-sportswear/wwd-coterie-ones-to-watch-6263139" target="_blank">
					<img src="img/home/press/thumb/121010_WWD-coterie02.jpg" />
				</a>
			</div>
			<div class="element">   
				<div class="caption">
					<span class="show">Childrens Club</span>
					<br />
					<span class="article">Style Sight</span>
				</div>
				<a href="http://blog.stylesight.com/kids/events-childrens-club-5" target="_blank">
					<img src="img/home/press/thumb/121023_StyleSight-ChildrensClub.jpg" />
				</a>
			</div> 
			<div class="element" style="margin-right:0px;">   
				<div class="caption">
					<span class="show">ENKVegas</span>
					<br />
					<span class="article">WWD</span>
				</div>
				<a href="http://www.wwd.com/menswear-news/retail-business/mens-trade-show-highlights-6188736" target="_blank">
					<img src="img/home/press/thumb/121010_WWD-Vegas.jpg" />
				</a>
			</div>
		</div>
		<h2 style="margin:0 0 0 0;">Press Contact</h2>
			<p>For press inquiries please complete the form below. A representative will contact you within 24 business hours.  For immediate assistance, please call 212.951.6600.</p>
		<div id="press_form">
			<form id="pressForm" method="post" action="bin/pressForm.php" class="form">
				<fieldset>
					<div class="formcol-l" >
						<input type="text" name="firstName" size="30" value="First Name" class="firstName text-input required" tabindex="201"><br>
						<input type="text" name="companyName"  size="30" value="Company Name" class="pressCompanyName text-input required" tabindex="203"> 
						<input type="text" name="contactPhone"  size="30" value="Contact Phone" class="pressContactPhone text-input required" tabindex="204"><br>
					</div>
					<div class="formcol-r" >
						<input type="text" name="lastName" size="30" value="Last Name" class="lastName text-input required" tabindex="202"><br>
						<input type="text" name="contactEmail"  size="30" value="Contact Email" class="pressContactEmail text-input email" tabindex="205">
					</div>
					<div class="form-bottom">
						<textarea name="comments" cols="27" rows="5" value="" class="pressComments text-input required" tabindex="206">
							Comments
						</textarea><br>
						<br>

						<input type="submit" style="margin-top:20px;" name="submit" class="button" id="pressForm_button" value="Send" tabindex="207">
						<div class="captcha" style="margin-top:0px;">
							<div class="enkCaptcha" id="mainPressFormCaptcha"></div>
						</div>
					</div>
				</fieldset>
				<div class="form_message"></div>
			</form>
		</div>
	</div>
</div>  -->