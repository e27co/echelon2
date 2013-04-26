<?php
get_header();
?>   
<div class="showcase">
      <div class="container">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit speakers">
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
            <div class="nav nav-tabs" id="speakersTab">
              <a class="sub-nav" data-toggle="tab" href="#speaker">Speakers</a>
              <a class="sub-nav" data-toggle="tab" href="#judge">Judges</a>
            </div>
            <hr class="speakers">
            <div class="tab-content" id="speakersTabContent">
              <div id="speaker" class="tab-pane fade active in">
                <h1 class="text-center add-bot-large">The Speakers</h1>
                <?php
				echo f_speakers();
				?>
              </div>
              <div id="judge" class="tab-pane fade">
                <h1 class="text-center add-bot-large">The Judges</h1>
                <?php
				echo f_judges();
				?>
              </div>
            </div>
          </div>
      </div>
       <div class="row text-center add-bot-xlarge visible-phone">
        <h2>Get your early bird tickets now!</h2>
        <a href="<?php echo get_bloginfo("home")."/tickets"; ?>" class="buy-big">Purchase tickets</a>
      </div>
      
    </div>  
<?php
	get_footer();
?>