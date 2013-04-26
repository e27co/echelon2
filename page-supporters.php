<?php
get_header();
?>   
<div class="showcase">
  <div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit whos-in">
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
	<div class="row-fluid">
		<div class="nav nav-tabs text-center" id="agendaTab">
		  <a class="sub-nav" data-toggle="tab" href="#sponsors">Sponsors</a>
		  <a class="sub-nav" data-toggle="tab" href="#exhibitors">Exhibitors</a>
		  <a class="sub-nav" data-toggle="tab" href="#startups">Startups</a>
		  <a class="sub-nav" data-toggle="tab" href="#partners">Partners</a>
		</div>
		<hr class="speakers">
		<div class="tab-content" id="supporTabContent">
		  <div id="sponsors" class="tab-pane fade active in">
			<h4 class="pull-right">Be a Sponsor<a href="mailto:" class="sponsor">Click here!</a></h4>
			<h2>Sponsors</h2>
			<div class="row-fluid text-left add-bot main-sponsors text-center">
			  <div class="span3">
				<h3>Premier</h3>
				<div class="wrapper-logo">
				  <img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/gb-main.png"/>
				</div>  
			  </div>
			  <div class="span3">
				<h3>Regular</h3>
				<div class="wrapper-logo">
				  <img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/bb-main.png"/>
				</div>  
			  </div>
			  <div class="span3">
				<h3>Regular</h3>
				<div class="wrapper-logo">
				  <img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/bb-main.png"/>
				</div>  
			  </div>
			  <div class="span3">
				<h3>Regular</h3>
				<div class="wrapper-logo">
				  <img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/bb-main.png"/>
				</div>  
			  </div>
			</div> 
			<h2>Satellite Sponsors</h2>
			<p class="lead">Premier Sponsors</p>
			<div class="row-fluid text-left add-bot sat-sponsors">
			  <div class="span3">
			   
			  </div>
			  <div class="span3">
			   
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			</div>
			<p class="lead">Venue Sponsors</p>
			<div class="row-fluid text-left add-bot sat-sponsors">
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			</div>  
		  </div>
		  <div id="exhibitors" class="tab-pane fade">
			<h4 class="pull-right">Join the Exhibit<a href="mailto:" class="sponsor">Click here!</a></h4>
			<h2>Exhibitors</h2>
		   <div class="row-fluid text-left add-bot sat-sponsors">
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			</div>  
		  </div>
		  <div id="startups" class="tab-pane fade">
			<h4 class="pull-right">Submit your Startup<a href="mailto:" class="sponsor">Click here!</a></h4>
			<h2>Startups</h2>
		   <div class="row-fluid text-left add-bot sat-sponsors">
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			</div>
		  </div>
		  <div id="partners" class="tab-pane fade">
			<h4 class="pull-right">Be a Media Partner<a href="mailto:" class="sponsor">Click here!</a></h4>
			<h2>Media Partners</h2>
		   <div class="row-fluid text-left add-bot sat-sponsors">
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
			  <div class="span3">
				
			  </div>
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