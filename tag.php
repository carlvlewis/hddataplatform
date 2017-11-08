<?php

global $query_string;
	
$closed = array(
		'key' => 'closed',
		'value' => "0",
		//'type' => 'numeric',
		'compare' => '='
);
	
$prs_string_qu = wp_parse_args($query_string);
$prs_string_qu['meta_query'] = array($closed);
$prs_string_qu['post_type'] = array('job','post');

query_posts($prs_string_qu);

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$term_title = $term->name;
 	
//======================================================

	get_header();

?>

<?php 

		if(function_exists('bcn_display'))
		{
		    echo '<div class="my_box3_breadcrumb"><div class="padd10_a">';	
		    bcn_display();
			echo '</div></div>';
		}

?>	

<div id="content">

<div class="box_title"><?php
						if(empty($term_title)) echo __("All Posted Jobs",'PricerrTheme');
						else echo sprintf( __("Latest Posted Jobs in %s",'PricerrTheme'), $term_title);
					?>
            		
            		
            		
            	</div>


<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>

<?php PricerrTheme_get_post(); ?>

<?php  
 		endwhile; 
		
		if(function_exists('wp_pagenavi')):
		wp_pagenavi(); endif;
		                             
     	else:
		
		echo __('No jobs posted.',"PricerrTheme");
		
		endif;
		// Reset Post Data
		wp_reset_postdata();
		 
		?>


</div>


<div id="right-sidebar">
    <ul class="xoxo">
        <?php dynamic_sidebar( 'other-page-area' ); ?>
    </ul>
</div>


<?php

	get_footer();

?>