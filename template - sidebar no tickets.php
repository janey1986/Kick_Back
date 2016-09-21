<?php
/**
 * Template Name: template - sidebar no ticket
 *
 * @package WordPress
 * @subpackage Kick Back Comedy Club
 * @since Kick Back Comedy Club 1.0
 */
get_header();
?>

<!-- MAIN CONTENT -->

<!-- Start split screen LEFT COLUMN -->
<div id="mainRed">
	<div class="container">
		<div class="row">
	    <div id="leftCol" class="leftCol col-xs-12 col-sm-8 col-md-8 well" >
	        <div id="leftColContentContainer" >
		        <div id="leftColTitleDiv" ><h1><?php wp_title('');  ?></h1></div>
		        <br /><br /><br />
						<?php
					    // TO SHOW THE PAGE CONTENTS
					    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
								<?php the_content(); ?> <!-- Page Content -->
					    <?php
					    endwhile; //resetting the page loop
					  ?>
			    </div><!-- close left column container -->
			</div> <!-- close left column -->

			<div id="rightCol" class="rightCol hidden-xs col-sm-4 col-md-4 well">
				<div id="sidebarContentContainer">
					<div id="rightColTitleDiv"><h1>Join Mailing List</h1></div>
						<br/><br/>
						<p>To get all the latest news and special offers from Kick Back Comedy Club, join our mailing list here!</p>
						<form id='frmMailingList' name='frmMailingList' onsubmit='return false;' >

							<input class="mailingListInput" type='text' id='mailingList' name='mailingList' placeholder='E-Mail Address' />
							<input type="image" src="./images/MailingListButton.png"  id='mailingListSubmit' name='mailingListSubmit' class='mailingListSubmit'/>

						</form>

						<div class="clear"></div>

						<div class='success' id='successMessage'></div>
						<div class='error' id='failMessage'></div>
						<div class='loading' id='SBMLLoading'>We're working on it....</div>
						<div class="clear"></div>
						<br/>

				<div id="rightColTitleDiv"><h1>Latest News</h1></div>
					</br></br></br>
 					<a class="twitter-timeline" href="https://twitter.com/KickBackComedy" height="" data-widget-id="381519022778380288" data-link-color="#ffffff" data-chrome="noheader nofooter noborders transparent noscrollbar">Tweets by @KickBackComedy</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
       		<div style="clear: both; display: block;"></div>
      </div>
    </div><!-- close right column -->

<?php get_footer(); ?>
