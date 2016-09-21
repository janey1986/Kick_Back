<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kick Back Comedy Club : Comedy Club Guildford | Comedy Club Surrey | Stand-up Comedy | Home Page</title>
    <meta charset="utf-8">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">


    <meta name="Description" content="<?php echo $metaDescription; ?>">
    <meta name="keywords" content="<?php echo $metaKeywords; ?>" >

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    <title>Kick Back Comedy Club</title>



<?php wp_head(); ?>

</head>
<body id="homePage" class="homePage">

<!-- mobile logo -->
<header>
    <div class="aboveNavbar">
        <div class="row">
            <ul id="nav-logo-mob">
                <li id="themoblogo"><a href="<?php bloginfo( 'url' );?>"></a></li>
            </ul>
        </div>
    </div>
    <div style="clear: both;"></div>
</header>

<div class="mainFullSize">
    <div id="content">
        <!-- Navigation -->
        <nav class="mynavbar navbar navbar-default navbar-static-top">
            <!-- social media icons -->
            <div class="socialIcons">
                <div >
                    <div id="socialWrap">
                        <ul id="social">

                            <li id="fb"><a target="_blank" href="https://www.facebook.com/KickBackComedy"></a></li>
                            <li id="tw"><a target="_blank" href="https://twitter.com/KickBackComedy"></a></li>
                            <li id="yt"><a target="_blank" href="http://www.youtube.com/channel/UCHbXMT__JMzGQHeNnyLzNLw"></a></li>
                            <li id="gp"><a target="_blank" href="https://plus.google.com/103816807015957316592/about?gl=uk&hl=en"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- phone and email in full screen header -->
            <div style="clear: both;"></div>
            <div class="phoneAndEmail" >
                <div id='email'><a href="mailto:info@kickbackcomedy.com" class="email" ><p class="email-text">EMAIL: info@kickbackcomedy.com</p></a></div>
                <br />
                <div id='phone'><a href="tel:+447784045110" class="phone" ><img src="./images/phone.png" /></a></div>
            </div>


            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class=""><img src="./images/nav-icon2.png" /></span>

                </button>

                <a class="navbar-brand" href="<?php bloginfo( 'url' );?>"></a>
                <a class="navbar-call" href="tel:+447784045110" >
                    <img src="./images/phone-icon.png" />
                </a>

                <a class="navbar-sms" href="mailto:info@kickbackcomedy.com">
                    <img src="./images/email-icon.png" />
                </a>

                <a target="_blank" class="navbar-sms" href="https://www.facebook.com/KickBackComedy">
                    <img src="./images/fb-icon.png" />
                </a>

                <a target="_blank" class="navbar-sms" href="https://twitter.com/KickBackComedy">
                    <img src="./images/tw-icon.png" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                        $args = array(
                            'menu'          => 'header-menu',
                            'menu_class'    => 'nav navbar-nav navbar-right',
                            'menu_id'       => 'navIcons',
                            'container'     => 'false'
                        );
                        wp_nav_menu( $args );
                    ?>
            </div>
            <!-- /.navbar-collapse -->

        </nav>
        <!-- join mailing list mobile only! -->
        <div class="container">
            <div class="row" >
                <div id="mobileMailingList" class="col-xs-12 hidden-sm hidden-md hidden-lg well" >

                    <form id='frmMobileMailingList' name='frmMobileMailingList' onsubmit='return false;' >
                        <input class="mobileMailingListInput" type='text' id='mobileMailingListInput' name='mobileMailingListInput' placeholder='Join Mailing List Here' />
                        <input type="image" src="./images/MailingListButton.png"  id='mobileMailingListSubmit' name='mobileMailingListSubmit' class='mobileMailingListSubmit'/>
                    </form>
                    <div class="clear"></div>

                    <div class='success' id='mobileSuccessMessage'></div>
                    <div class='error' id='mobileFailMessage'></div>
                    <div class='loading' id='MMLLoading'>We're working on it....</div>

                    <div class="clear"></div>

                </div>

            </div>

        </div>
