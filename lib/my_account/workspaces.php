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

function ProjectTheme_my_account_workspaces_function()
{
		global $current_user, $wpdb, $wp_query;
		get_currentuserinfo();
		$uid = $current_user->ID;
		
?>
    	<div id="content" class="account-main-area">
        
        
         
				
                
                <?php
				
				global $current_user;
				get_currentuserinfo();
				$uid = $current_user->ID;




			echo '<div class="my_box3 border_bottom_0"> <div class="box_content">   ';
				_e("There are no workspaces yet.",'ProjectTheme');
				echo '</div>  </div> ';


				?>


				

        
   
        
  		</div>      
<?php
		ProjectTheme_get_users_links();

}
	
?>