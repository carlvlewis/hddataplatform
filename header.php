<?php
/***************************************************************************
*
*	ProjectTheme - copyright (c) - sitemile.com
*	The only project theme for wordpress on the world wide web.
*
*	Coder: Andrei Dragos Saioc
*	Email: sitemile[at]sitemile.com | andreisaioc[at]gmail.com
*	More info about the theme here: http://sitemile.com/products/wordpress-project-freelancer-theme/
*	since v1.2.5.3
*
***************************************************************************/


?>
	<!DOCTYPE html>
	<html lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
	<title>
	<?php wp_title(  ); ?>
    </title>
 
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300,600, 900,800' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900,700,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,900' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Bitter:400,700' rel='stylesheet' type='text/css'>
 <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
 
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/normalize.css" />
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); ?>

	<?php

		wp_head();

	?>	

<script>

		jQuery(document).ready(function() {
    (function() {
        //settings
        var fadeSpeed = 200, fadeTo = 0.5, topDistance = 30;
        var topbarME = function() { jQuery('#header').fadeTo(fadeSpeed,1); }, topbarML = function() { jQuery('#header').fadeTo(fadeSpeed,fadeTo); };
        var inside = false;
        //do
		
		if(screen.width > 1199)
       jQuery(window).scroll(function() {
            position = jQuery(window).scrollTop();
            if (jQuery(this).scrollTop() > 1){  
                //add events
               // topbarML();
             //   $('#header').bind('mouseenter',topbarME);
              //  $('#header').bind('mouseleave',topbarML);
			   jQuery('#header').addClass('uberbar2');
			   jQuery('#header #logo').addClass('logo_under_way');
			   jQuery('#cssmenu > ul > li > a').addClass('skr1');
			   
			   
                inside = true;
            }
            else {
               //  topbarME();
				//  $('#header').unbind('mouseenter',topbarME);
              //  $('#header').unbind('mouseleave',topbarML);
                jQuery('#header').removeClass('uberbar2');
			   jQuery('#header #logo').removeClass('logo_under_way');
			   jQuery('#cssmenu > ul > li > a').removeClass('skr1');
                inside = false;
            }
        });
    })();
});
	
	</script>

	 <?php
	 	
		$ProjectTheme_color_for_footer = get_option('ProjectTheme_color_for_footer');
		if(!empty($ProjectTheme_color_for_footer))
		{
			echo '<style> #footer { background:#'.$ProjectTheme_color_for_footer.' }</style>';	
		}
		
		
		$ProjectTheme_color_for_bk = get_option('ProjectTheme_color_for_bk');
		if(!empty($ProjectTheme_color_for_bk))
		{
			echo '<style> body { background:#'.$ProjectTheme_color_for_bk.' }</style>';	
		}
		
		$ProjectTheme_color_for_top_links = get_option('ProjectTheme_color_for_top_links');
		if(!empty($ProjectTheme_color_for_top_links))
		{
			echo '<style> .top-bar { background:#'.$ProjectTheme_color_for_top_links.' }</style>';	
		}
		
		
		//----------------------
		
	 	$ProjectTheme_home_page_layout = get_option('ProjectTheme_home_page_layout');
		if(ProjectTheme_is_home()):
			if($ProjectTheme_home_page_layout == "4"):
				echo '<style>#content { float:right } #left-sidebar { float:left; }</style>';
			endif;
			
			if($ProjectTheme_home_page_layout == "5"):
				echo '<style>#content { width:100%; }  </style>';
			endif;
			
			if($ProjectTheme_home_page_layout == "3"):
				echo '<style>#content { width:395px } .title_holder { width:285px; } #left-sidebar{	float:left;margin-right:15px;}
				 </style>';
			endif;
			
			
			if($ProjectTheme_home_page_layout == "2"):
				echo '<style>#content { width:395px } #left-sidebar{ float:right } #left-sidebar{ margin-right:15px; } .title_holder { width:285px; }
				 </style>';
			endif;
		
		endif;
	 
	 
	 ?>
	 
     <script type="text/javascript">
		
		var $ = jQuery;
		
	function suggest(inputString){
	
		if(inputString.length == 0) {
			jQuery('#suggestions').fadeOut();
		} else {
		jQuery('#big-search').addClass('load');
			jQuery.post("<?php bloginfo('url'); ?>/?autosuggest=1", {queryString: ""+inputString+""}, function(data){
				if(data.length >0) {
					jQuery('#suggestions').fadeIn();
					jQuery('#suggestionsList').html(data);
					jQuery('#big-search').removeClass('load');
				}
			});
		}
	}

	function fill(thisValue) {
		jQuery('#big-search').val(thisValue);
		setTimeout("$('#suggestions').fadeOut();", 600);
	}
	
	<?php
	
	if(is_home()):
	
		$quant_slider 		= 5;
		$quant_slider_move 	= 1;
		$slider_pause 		= 5000;
		$slider_speed		= 1000;
		
		$quant_slider 		= apply_filters('ProjectTheme_quantity_slider_filter', 		$quant_slider);
		$quant_slider_move 	= apply_filters('ProjectTheme_quantity_slider_move_filter', $quant_slider_move);
		$slider_pause 		= apply_filters('ProjectTheme_slider_pause_filter', 		$slider_pause);
		$slider_speed 		= apply_filters('ProjectTheme_slider_speed_filter', 		$slider_speed);
		
	?>
	
	
		jQuery(function(){
	  jQuery('#slider2').bxSlider({
		auto: true,
		speed: <?php echo $slider_speed; ?>,
		pause: <?php echo $slider_pause; ?>,
		autoControls: false,
		displaySlideQty: <?php echo $quant_slider; ?>,
    	moveSlideQty: <?php echo $quant_slider_move; ?>
	  });
	  
	  jQuery("#project-home-page-main-inner").show();
	  
	  
	});	
	
	<?php endif; ?>
	
 
  
			(function($){
			jQuery(document).ready(function(){
			
			
		 
		
	jQuery('.expiration_project_p').each(function(index) 
	{
		var until_now = jQuery(this).html();
		jQuery(this).countdown({until: until_now, format: 'dHMS', compact: false});
											   
	
	});
			
			jQuery("#cssmenu").menumaker({
			   title: "<?php _e('User Menu','ProjectTheme'); ?>",
			   format: "multitoggle"
			});
			
			jQuery("#cssmenu2").menumaker({
			   title: "<?php _e('Main Menu','ProjectTheme'); ?>",
			   format: "multitoggle"
			});
			
			});
			})(jQuery);
				
	</script>
    
	
    <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/all-ie.css" />
    <![endif]-->
    
    <?php do_action('ProjectTheme_before_head_tag_closes'); ?>
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script src="<?php bloginfo('template_url') ?>/js/jquery.countdown.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/vegas.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/vegas.css">
    
    <script>
	jQuery(document).ready(function(){
	jQuery(".home_blur").vegas({
    slides: [
        { src: "<?php bloginfo('template_url') ?>/images/sc1.jpg" },
        { src: "<?php bloginfo('template_url') ?>/images/sc2.jpg" },
        { src: "<?php bloginfo('template_url') ?>/images/sc3.jpg" },
        { src: "<?php bloginfo('template_url') ?>/images/sc4.jpg" }
    ]
});});
	
	</script>
	</head>
	<body <?php body_class(); ?> >

	<?php do_action('ProjectTheme_after_body_tag_open'); ?>

	<div id="wrapper">
		<!-- start header area -->

		<div id="header" class="container-fluid  no-padding">
			<div class="top-bar-bg">
				<div class="top-bar"> 
                
                	<div class="my-logo col-xs-12 col-sm-8 col-md-4 col-lg-3">
                    	
                        <?php
							$logo = get_option('projectTheme_logo_url');
							if(empty($logo)){
								
								$logo = get_bloginfo('template_url').'/images/logo.png';
								$logo = apply_filters('ProjectTheme_logo_url', $logo);
							}
						
							$logo_options = '';
							$logo_options = apply_filters('ProjectTheme_logo_options', $logo_options);	
							
						?>
						<a href="<?php bloginfo('url'); ?>"><img id="logo" alt="<?php bloginfo('name'); ?>" <?php echo $logo_options; ?> src="<?php echo $logo; ?>" /></a>
                    
                    </div>
                
                    <div class="col-xs-12 col-sm-4 col-md-8 col-lg-9 RARA">              
                    <div class="top-links" id="cssmenu">	<ul>						
							<?php 
								
							if(current_user_can('level_10')) {?>
                            <li>  
                            <a href="<?php echo get_admin_url(); ?>"><i class="admin-control" ></i> <?php echo __("WP-Admin",'ProjectTheme'); ?></a> </li><?php }
							
							
							do_action('ProjectTheme_top_menu_items');
						
							$menu_name = 'primary-projecttheme-header';

							if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
							$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						
							$menu_items = wp_get_nav_menu_items($menu->term_id);
					
						
							foreach ( (array) $menu_items as $key => $menu_item ) {
								$title = $menu_item->title;
								$url = $menu_item->url;
								if(!empty($title))
								echo '<li><a href="' . $url . '">' . $title . '</a></li>';
							}
								
							} 
							
							$ProjectTheme_show_blue_menu = get_option('ProjectTheme_show_blue_menu');
							if($ProjectTheme_show_blue_menu == 'no'):
							?>
                            
                            <li><a href="<?php bloginfo('url'); ?>"><?php echo __("Home",'ProjectTheme'); ?></a> </li>
                           <li> <a href="<?php echo projectTheme_advanced_search_link2(); ?>"><?php echo __("Advanced Search",'ProjectTheme'); ?></a> </li>
                            
                            
                            <?php							
							endif;
							?>
                            
                            
                            <?php
							
							global $current_user;
							get_currentuserinfo();
							$uid = $current_user->ID;
							
							 if(ProjectTheme_is_user_business($uid)): ?>
                             
							<li><a href="<?php echo projectTheme_post_new_link(); ?>"><i class="post-new-awsome" ></i> <?php echo __("Post New",'ProjectTheme'); ?></a> </li>
                            <?php endif; ?>
                            
							<?php if(get_option('projectTheme_enable_blog') == "yes") { ?>
                            <li><a href="<?php echo projectTheme_blog_link(); ?>"><i class="blog-awsome" ></i><?php echo __("Blog",'ProjectTheme'); ?></a></li> 
							<?php } ?>
							<?php 
							
						
							
								if(is_user_logged_in())
								{
									global $current_user;
									get_currentuserinfo();
									$u = $current_user;
									
									
									?>
									<li><a href="<?php echo projectTheme_my_account_link(); ?>"><i class="account-awsome" ></i><?php echo __("MyAccount",'ProjectTheme'); ?></a>
                                    	<ul>
                                        	<li><a href="<?php echo projectTheme_my_account_link(); ?>"><?php echo __("Private Messages",'ProjectTheme'); ?></a></li>
                                        	<li><a href="<?php echo projectTheme_my_account_link(); ?>"><?php echo __("Payments",'ProjectTheme'); ?></a></li>
                                        </ul>
                                    </li>
									<li><a href="<?php echo wp_logout_url(); ?>"><i class="logout-awsome" ></i><?php echo __("Log Out",'ProjectTheme'); ?></a></li>
									
									<?php
								}
								else
									{
										
							
							?>
							
							<li><a href="<?php echo site_url() ?>/wp-login.php?action=register"><i class="register-awsome" ></i><?php echo __("Register",'ProjectTheme'); ?></a></li>
							<li><a href="<?php echo site_url() ?>/wp-login.php"><i class="login-awsome" ></i><?php echo __("Log In",'ProjectTheme'); ?></a></li>
							<?php } ?> </ul>
						</div>
                    
                    
				</div>
			</div> <!-- end top-bar-bg -->
			
            </div>
            </div>
            <!-- start main menu -->
            
             <?php
			
			do_action("ProjectTheme_content_before_main_menu");
			
			if(projecttheme_is_home()): 
		?>
        
        <!-- head scr -->
        
        <div class="home_blur">
        <div class="main_area_homepg">
       		<div class="main_tagLine"><?php echo get_option('ProjectTheme_main_tagline') ?></div>
            <div class="sub_tagLine"><div class="wrps"><?php echo get_option('ProjectTheme_sec_tagline') ?></div></div>
       	 	
            <!--
            <form method="get" action="<?php echo get_permalink(get_option('ProjectTheme_advanced_search_page_id')) ?>">
            <div class="search_box_main">
            	<div class="search_box_main2">
                    <div class="rama1"><input type="text" placeholder="<?php _e('What service do you need? (e.g. website design)','ProjectTheme'); ?>" id="findService" name="term"></div>
                    <div class="rama1 rama2"><input type="image" src="<?php bloginfo('template_url') ?>/images/sear1.png" width="44" height="44" /></div>
                </div>
            </div>
            </form> -->
        	
            <div class="buttons_box_main">
            	<ul class="regular_ul">
                	<li><a href="<?php echo get_option('ProjectTheme_button1_link') ?>"><?php echo get_option('ProjectTheme_button1_caption') ?></a></li>
                	<li><a href="<?php echo get_option('ProjectTheme_button2_link') ?>"><?php echo get_option('ProjectTheme_button2_caption') ?></a></li>
                </ul>
            
            </div>
        
        </div>
       	</div>
        
 
        
        
        <!-- END head scr -->
        
        <?php
		
		endif;
			
			
			$ProjectTheme_show_blue_menu = get_option('ProjectTheme_show_blue_menu');
			if($ProjectTheme_show_blue_menu == 'yes' && !projecttheme_is_home()):
		?>
        
        <div class="main_menu_menu_wrap">
       	<?php
		
		$menu_name = 'primary-projecttheme-main-header';

		if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
		$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						
		$menu_items = wp_get_nav_menu_items($menu->term_id);
					
		$m = 0;				
		foreach ( (array) $menu_items as $key => $menu_item ) {
			$title = $menu_item->title;
			$url = $menu_item->url;
			if(!empty($title))
			$m++;
			}
		}
		
		
		 
		if($m == 0):
		
		?>
        <div class="main_menu_menu" id="cssmenu2">
        
        	<ul class="jetmenu blue">
            <li><a href="<?php bloginfo('url'); ?>"><?php _e('Home','ProjectTheme'); ?></a></li>
            
            <?php 
			
				$adv_search_btn = true;
				$adv_search_btn = apply_filters('ProjectTheme_adv_search_btn', $adv_search_btn);
				if($adv_search_btn == true):
			
			 ?>
            <li><a href="<?php echo get_permalink(get_option('ProjectTheme_advanced_search_page_id')); ?>"><?php _e('Project Search','ProjectTheme'); ?></a></li> 
            <?php endif; ?>
            
            
            <?php 
			
				$prov_search_btn = true;
				$prov_search_btn = apply_filters('ProjectTheme_prov_search_btn', $prov_search_btn);
				if($prov_search_btn == true):
			
			 ?>
            <li><a href="<?php echo get_permalink(get_option('ProjectTheme_provider_search_page_id')); ?>"><?php _e('Provider Search','ProjectTheme'); ?></a></li>
            <?php endif; ?>
            
            
            <?php 
			
				$ProjectTheme_all_rpojects_btn = true;
				$ProjectTheme_all_rpojects_btn = apply_filters('ProjectTheme_all_rpojects_btn', $ProjectTheme_all_rpojects_btn);
				if($ProjectTheme_all_rpojects_btn == true):
			
			 ?>
            <li><a href="<?php echo get_permalink(get_option('ProjectTheme_all_projects_page_id')); ?>"><?php _e('All Projects','ProjectTheme'); ?></a></li>
            <?php endif; ?>
            
            
            <?php 
			
				$all_cats_btn = true;
				$all_cats_btn = apply_filters('ProjectTheme_all_cats_btn', $all_cats_btn);
				if($all_cats_btn == true):
			
			 ?> 
            <li><a href="<?php echo get_permalink(get_option('ProjectTheme_all_categories_page_id')); ?>"><?php _e('Show All Categories','ProjectTheme'); ?></a></li> 
            <?php endif; ?>
            
            
            	<?php
		
			$ProjectTheme_enable_project_location = get_option('ProjectTheme_enable_project_location');
			if($ProjectTheme_enable_project_location == "yes"):
		
		?>
            
            <?php 
			
				$all_locs_btn = true;
				$all_locs_btn = apply_filters('ProjectTheme_all_locs_btn', $all_locs_btn);
				if($all_locs_btn == true):
			
			 ?>             
            <li><a href="<?php echo get_permalink(get_option('ProjectTheme_all_locations_page_id')); ?>"><?php _e('Show All Locations','ProjectTheme'); ?></a></li> 
            <?php endif; ?>
            
              <?php
					
					endif;
					
					
							do_action('ProjectTheme_main_menu_items');
					
							
							$menu_name = 'primary-projecttheme-main-header';

							if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
							$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
						
							$menu_items = wp_get_nav_menu_items($menu->term_id);
					
						
							foreach ( (array) $menu_items as $key => $menu_item ) {
								$title = $menu_item->title;
								$url = $menu_item->url;
								if(!empty($title))
								echo '<li><a href="' . $url . '">' . $title . '</a></li>';
							}
								
							}
							
							
							?>
                            
                       
            </ul>
        
        
        </div>
        
        <?php else: 
 
		?>
 
       
        <div class="main_menu_menu">
        <div class="dcjq-mega-menu" id="<?php echo 'cssmenu2'; ?>">		
		<?php
			 
			$menu_name = 'primary-projecttheme-main-header';

			if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) 
			$nav_menu = wp_get_nav_menu_object( $locations[ $menu_name ] );					
							 			
			
			wp_nav_menu( array('menu_id' => 'jetmenu_m', 'menu_class' => 'jetmenua bluea' , 'fallback_cb' => '', 'menu' => $nav_menu, 'container' => false, 'walker' => new Project_Walker_Nav_Menu() ) );
			
		?>		
		</div>
        </div>
        
        <?php endif; ?>
        
          </div> 
		<?php
		endif;
		?>
            
            <!-- end main menu -->
           
		
        
       
        
        <?php
		
		do_action("ProjectTheme_content_after_main_menu");
		
		if( ProjectTheme_is_home()):
		
			get_template_part( 'lib/slider_home');
			get_template_part( 'lib/stretch_area');
		
		endif;
		
		
		?>
        
        