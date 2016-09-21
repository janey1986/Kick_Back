<!-- the home page -->
<?php

get_header(); ?>

<!-- MAIN CONTENT -->
<!-- images -->
<div id="mainCarousel">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <!-- 			        <li data-target="#myCarousel" data-slide-to="3"></li> -->
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <a href="./tickets.php"><img src=".\images\slides\Audience.jpg" alt="<?php echo $slideShowDescription1; ?>" title="" /></a>

            </div>
            <div class="item">
                <a href="./tickets.php"><img src="<?php echo $slideShow2; ?>" alt=""<?php echo $slideShowDescription2; ?> title="" /></a>

            </div>
            <div class="item">
                <a href="./tickets.php"><img src="<?php echo $slideShow3; ?>" alt=""<?php echo $slideShowDescription3; ?> title="" /></a>
            </div>
            <!-- 			         <div class="item">
			           <a href="./tickets.php"><img src="<?php echo $slideShow4; ?>" alt=""<?php echo $slideShowDescription4; ?> title="" /></a>
<!-- 			        </div> -->
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- upcoming shows -->
<div id="main">
    <div id="titleDiv"><h1>Upcoming Shows</h1></div>

	<!-- SHOW 1 -->
    <p id="shows"><?php $my_postid = 53; $content = get_post_field('post_content', $my_postid);  echo $content; ?></p>
    <br /><br />
    <div class="container" >
        <div class="row">

        <?php

			$show_one_cat = array(
			    'category_name' => 'first-show',
			    'showposts' => 4,
			    'post_type' => 'post',
			    'post_status' => 'publish',
			    'orderby' => 'date',
			    'order' => 'ASC'
			);

			$show_one_query = new WP_Query( $show_one_cat );
			if ( $show_one_query->have_posts()) {
			    $i = 0;
			    while ( $show_one_query->have_posts()) {
			       $i++;
			       $show_one_query->the_post(); ?>
			       <div id ="show" class="col-xs-3 col-sm-2 col-md-2">

			       <?php
					$content = get_the_content('Read more');
					print $content;
				   ?></div><?php
			    }
			}

			$show_one_link_cat = array(
					'category_name' => 'first-show-link',
					'showposts' => 1,
					'post_type' => 'post',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'ASC'
			);

			$show_one_link_query = new WP_Query( $show_one_link_cat );
			if ( $show_one_link_query->have_posts()) {
				$show_one_link_query->the_post(); ?>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<a class="btn btn-primary btn-lg round centreImg" role="button" href="
						<?php
							$content = get_the_content('Read more');
							print $content;
						?>"> Buy Tickets</a></div>
			<?php } ?>


        </div>
    </div>
    <br />

    <!-- SHOW 2 -->
    <p id="shows"><?php $my_postid = 55; $content = get_post_field('post_content', $my_postid);  echo $content; ?></p>
    <br /><br />
    <div class="container">
        <div class="row">

            <?php

			$show_two_cat = array(
			    'category_name' => 'second-show',
			    'showposts' => 4,
			    'post_type' => 'post',
			    'post_status' => 'publish',
			    'orderby' => 'date',
			    'order' => 'ASC'
			);

			$show_two_query = new WP_Query( $show_two_cat );
			if ( $show_two_query->have_posts()) {
			    $i = 0;
			    while ( $show_two_query->have_posts()) {
			       $i++;
			       $show_two_query->the_post(); ?>
			       <div id ="show" class="col-xs-3 col-sm-2 col-md-2">

			       <?php
					$content = get_the_content('Read more');
					print $content;
				   ?></div><?php
			    }
			}

			$show_two_link_cat = array(
					'category_name' => 'second-show-link',
					'showposts' => 1,
					'post_type' => 'post',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'ASC'
			);

			$show_two_link_query = new WP_Query( $show_two_link_cat );
			if ( $show_two_link_query->have_posts()) {
				$show_two_link_query->the_post(); ?>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<a class="btn btn-primary btn-lg round centreImg" role="button" href="
						<?php
							$content = get_the_content('Read more');
							print $content;
						?>"> Buy Tickets</a></div>
			<?php } ?>

        </div>
    </div>
    <br />

</div> <!-- close upcoming shows -->

<!-- Start split screen LEFT COLUMN -->
<div id="mainRed">
    <div class="container">
        <div class="row">
            <div id="leftCol" class="leftCol col-xs-12 col-sm-8 col-md-8 well" >
                <div id="leftColContentContainer" >
                    <div id="leftColTitleDiv" ><h1>About Us</h1></div>
                    <br /><br /><br />

                    <?php echo $aboutUsHome; ?>

                    <div id="leftColTitleDiv" ><h1>Watch Us</h1></div>
                    <br /><br /><br />

                    <iframe id="promoVideo" src="https://www.youtube.com/embed/x5gGifT7piM" frameborder="0" allowfullscreen></iframe>

                </div>
            </div>

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
                    <!-- 	<div id='twitterDiv' style='overflow: hidden;'>
                         <a class="twitter-timeline" href="https://twitter.com/KickBackComedy" data-widget-id="381519022778380288" data-link-color="#ffffff" data-chrome="noheader nofooter noborders transparent noscrollbar">Tweets by @KickBackComedy</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                     </div> -->

                    <a class="twitter-timeline" href="https://twitter.com/KickBackComedy" height="" data-widget-id="381519022778380288" data-link-color="#ffffff" data-chrome="noheader nofooter noborders transparent noscrollbar">Tweets by @KickBackComedy</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                    <div style="clear: both; display: block;"></div>
                </div>
            </div>


        </div> <!-- close row -->
    </div> <!-- close container -->
<?php get_footer(); ?>
