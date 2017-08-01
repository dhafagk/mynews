<?php ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <?php wp_head(); ?>
    <?php if (is_user_logged_in()) {
    show_admin_bar(true);
} ?>
</head>
<body>
    <!--====== HEADER ======== -->
	<div id="header-wrapper" class="transparent hide-on-med-and-down">
	    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <div id="header-left"><?php $logo = get_option('logo');
                    if($logo){ ?>
                        <a href="<?php echo esc_url(get_home_url('/')); ?>"><img src="<?php echo $logo; ?>" alt="<?php wp_title(); ?>" rel="home" /></a>
                    <?php }else{
                        echo "string";
                        } ?>
                </div><!--/#header left-->
            </div><!--/.col-->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div id="header-right"><?php $adsheader = get_option('adsheader');
                if ($adsheader) {
                    echo $adsheader;
                }else{ ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smz-728x90-4.jpg" alt="" />
                   <?php } ?>
                </div><!--/#header-righ-->
            </div><!--/.col-->
	    </div><!--/.row-->
	    </div><!--/container-->
	</div><!--/#header wrap -->
	<!--======== NAVBAR =====--> 
	<nav class="transparent z-depth-0">
        <div class="nav-wrapper z-depth-1">
            <!-- === SLIDE NAV ==== -->
            <ul id="slide-out" class="side-nav">
                <li>
                    <div class="header-sidenav">
                    <a href="#!" class="size-up button-exit">Navigate <span class="glyphicon right glyphicon glyphicon-remove" aria-hidden="true" style="margin-top:10px;"></span></a>
                    </div><!--/header-sidenav-->
                </li>
                <li>
                    <ul class="navbar-sidenav">
                    <li><?php wp_nav_menu( array('theme_location' => 'main','container' => '', 'fallback_cb' => '')) ?></li>
                    <!-- <li><a href="#!" class="text-primary-color1">Home</a></li>
                    <li><a href="#!">Second Sidebar Link</a></li>
                     <li class="no-padding">
                        <ul class="collapsible collapsible-accordion">
                          <li>
                            <a class="collapsible-header">Dropdown</a>
                            <div class="collapsible-body">
                              <ul>
                                <li><a href="#!">First</a></li>
                                <li><a href="#!">Second</a></li>
                                <li><a href="#!">Third</a></li>
                                <li><a href="#!">Fourth</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </li> -->
                </ul>
                </li>
            </ul><!--/#slide out-->
            <a href="#" data-activates="slide-out" class="button-collapse hide-on-med-and-up show-on-medium-and-down"><i class="material-icons black-text">menu</i></a>
            <script> 
                jQuery(".button-exit").sideNav('destroy');
                jQuery(".button-exit2").sideNav('hide');
                jQuery(".button-collapse").sideNav('show');
                jQuery('.button-collapse').sideNav({
                  menuWidth: 283,
                  edge: 'left', 
                  closeOnClick: true, 
                  draggable: true, 
                  /*onOpen: function(el) { }, 
                  onClose: function(el) {  }, */
                });
               
            </script>
            <!-- === /SLIDE NAV ==== -->
            <a href="#!" class="brand-logo center hide-on-med-and-up show-on-medium-and-down"><?php if($logo){ ?>
                        <img src="<?php echo $logo; ?>" alt="" rel="home" width="100px"/>
                    <?php }else{
                        echo "string";
                        } ?></a>
          <ul id="nav-mobile" class="hide-on-med-and-down container">
            <li id="menu">
                <?php wp_nav_menu( array('theme_location' => 'main','container' => '', 'fallback_cb' => '')) ?>
            </li> <!--/ .nav -->
            <div class="right">
                <li><a class="btn-search" href="#!"><i class="material-icons">search</i></a>
                <div class="form-search row">
                    <form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>" material="off">
                        <div class="form-group">  
                         <input type="text" name="s" id="s" class="form-control" placeholder="Search..." value="<?php echo trim( get_search_query() ); ?>">
                        </div>  
                    </form>
                </div></li>
                <script>
                    jQuery('.btn-search').click(function(){
                       jQuery('.form-search').toggle('fast'); 
                    });
                </script>
            </div>
          </ul>
        </div>
    </nav>