<?php
get_header();
?>   
<div class="showcase">
  <div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit agenda">
	  <div class="row-fluid">
			<?php
			while ( have_posts() ){
				the_post();
				$p = get_post( get_the_ID(), OBJECT );
				?><h1><?php echo $p->post_title;?></h1><?php
				echo "<div class=''>";
				the_content();
				echo "</div>";
			}
			?> 
	  </div>
	</div>
  </div>
  <div class="container">
	<div class="row-fluid text-center">
		<div class="nav nav-tabs" id="agendaTab">
		  <a class="sub-nav" data-toggle="tab" href="#satellites">Satellites</a>
		  <a class="sub-nav" data-toggle="tab" href="#4-june">Echelon Day 1</a>
		  <a class="sub-nav" data-toggle="tab" href="#5-june">Echelon Day 2</a>
		</div>
		<hr class="speakers">
		<div class="tab-content" id="agendaTabContent">
		  <div id="satellites" class="tab-pane fade active in">
			<div class="row-fluid text-left add-bot">
			  <h1>Satellites - The Beginning of the Journey for Startups</h1>
			  <p class="lead">Held from March – April, the Satellites is used as a platform to score startups to qualify for the Echelon June exhibitions and pitching sessions. The Satellites engage local communities on their home ground and drive their tech industry forward.</p>
			  <p class="lead">This is an event by the region for the region. Satellites spotlight local startups in their own market for international investors, corporates and stakeholders and also to encourage local stakeholders to look beyond their local markets and into the region .</p>
			</div> 
			<div class="row-fluid text-left add-bot">
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/indonesia.png" /></a>
				<h4><a href="">Indonesia</a></h4>
				<hr>
				<p>The Energy Tower</p>
				<hr>
				<p>30 Mar, 2013</p>
			  </div>
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/singapore.png" /></a>
				<h4 class="text-left"><a href="">Singapore</a></h4>
				<hr>
				<p>Plug-In@BLK71</p>
				<hr>
				<p>3 Apr, 2013</p>
			  </div>
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/hongkong.png" /></a>
				<h4 class="text-left"><a href="">Hong Kong</a></h4>
				<hr>
				<p>The Good Lab</p>
				<hr>
				<p>9 Apr, 2013</p>
			  </div>
			</div> 
			<div class="row-fluid text-left add-bot">
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/taiwan.png" /></a>
				<h4><a href="">Taiwan</a></h4>
				<hr>
				<p>Taiwan International Convention Center</p>
				<hr>
				<p>10 Apr, 2013</p>
			  </div>
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/manila.png" /></a>
				<h4 class="text-left"><a href="">Philippines</a></h4>
				<hr>
				<p>Meridian International College (MINT)</p>
				<hr>
				<p>13 Apr, 2013</p>
			  </div>
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/malaysia.png" /></a>
				<h4 class="text-left"><a href="">Malaysia</a></h4>
				<hr>
				<p>Bangsar South MSC CyberCenter</p>
				<hr>
				<p>17 Apr, 2013</p>
			  </div>
			</div> 
			<div class="row-fluid text-left add-bot">
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/vietnam.png" /></a>
				<h4><a href="">Vietnam</a></h4>
				<hr>
				<p>Sherwood Residence</p>
				<hr>
				<p>17 Apr, 2013</p>
			  </div>
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/thailand.png" /></a>
				<h4 class="text-left"><a href="">Thailand</a></h4>
				<hr>
				<p>Grande Centre Point Hotel and Residence</p>
				<hr>
				<p>20 Apr, 2013</p>
			  </div>
			  <div class="span4">
				<a href=""><img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/satellites/japan.png" /></a>
				<h4 class="text-left"><a href="">Japan</a></h4>
				<hr>
				<p>Gate City Ohsaki</p>
				<hr>
				<p>25 Apr, 2013</p>
			  </div>
			</div> 
		  </div>
		  <div id="4-june" class="tab-pane fade first-day">
			<h2>Tuesday, 4 June 2013</h2>
			<div class="row-fluid add-top">
			  The Day 1 agenda is still being finalized. If you would like to recommend a speaker, please click <a href='recommend-a-speaker'>here</a>.<br /><br /><br />
			</div>
		  </div>

		  <div id="5-june" class="tab-pane fade first-day">
			<h2>Tuesday, 5 June 2013</h2>
			<div class="row-fluid add-top">
			  The Day 1 agenda is still being finalized. If you would like to recommend a speaker, please click <a href='recommend-a-speaker'>here</a>.<br /><br /><br />
			</div>
		  </div>

		</div>
	  </div>
  </div>
  <div class="row text-center add-bot-xlarge visible-phone">
	<h2>Get your early bird tickets now!</h2>
	<a href="#buy" class="buy-big">Purchase tickets</a>
  </div>
</div>
<?php
	get_footer();
?>