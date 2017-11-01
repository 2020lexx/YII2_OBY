<?php
/**
* Plugin Name: 0x Blog Module
* Description: This plugin call the blog
* Version: 1.0
* Author: @pablo
*/
 


function tbt_bl_timestamp1(){
	echo "ajax response in zweb:".time();
	//echo "slide";
	die();

	//
}
 // add
add_action( 'wp_ajax_tbt_bl_timestamp1', 'tbt_bl_timestamp1' );
add_action( 'wp_ajax_nopriv_tbt_bl_timestamp1', 'tbt_bl_timestamp1' ); // need this to serve non logged in users

// utils functions
// titles
function tbt_bl_blog_titles($title){

   $title_code='<div class="clearfix"></div><h3 class="zx_widget_title_single"><span class="fa fa-angle-down"></span> '.$title.'</h3>';
   echo $title_code;
}
// post views
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return '<span class="zx_views_count">'.$count.'</span> Views';
}

 
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

// make link to zoom single post 

function tb_bl_single_post_link($postID){

	return "javascript:tbt_div_zoom('initial','action=tbt_bl_single_post&tbt_bl_post_id=".$postID."','on')";
	;
}
// view functions

function tbt_bl_recent_comments() {
	//extract( $args );

	// Set up some default widget settings
 
	// Our variables from the widget settings
	$title = __( 'Recent Comments' , 'zx_tbt' );
	$number_of_posts_to_show = 3;
 
	// Display video widget
	 
    // Loop
	$args = array(
	'status'       => 'approve',
	'number'       => $number_of_posts_to_show,
	);
	
	
	// The Query
	$comments_query = new WP_Comment_Query;
	$comments = $comments_query->query( $args );
	
	?> <div class="zx_widget">    
       <?php tbt_bl_blog_titles($title);  ?>
        <div class="zx_recent_comment_post_holder"> 
  	<?php
	// Comment Loop
	if ( $comments ) {
		foreach ( $comments as $comment ) {
			 $id = $comment->user_id;
			?>
        
	          <div class="zx_recent_comment_post">
                <div class="zx_author_avatar">
                	<?php echo get_avatar( $id, '200');?>
                </div>
                <div class="zx_post_content">
                	<div class="zx_small_avatar">
                    	<?php echo get_avatar( $id, '100');?>
                    </div>
					<h6><?php echo $comment->comment_author;?></h6>
                    <span class="comment_date"><?php echo $comment->comment_date;?></span>
                    <div class="zx_post_content_content"><a href="<?php echo  tb_bl_single_post_link($comment->comment_post_ID); ?>"><?php echo substr($comment->comment_content,0,100).'...';  ?> </a></div>
                </div>
            </div>
             <div class="clearfix">&nbsp;</div>  
      <?php } ?>
        </div>	
       
		<?php
	} else {
		echo 'No comments found.';
	}

	echo "</div><div class='clearfix'></div>";
 	die();
 
	
}
 // add
add_action( 'wp_ajax_tbt_bl_recent_comments', 'tbt_bl_recent_comments' );
add_action( 'wp_ajax_nopriv_tbt_bl_recent_comments', 'tbt_bl_recent_comments' ); // need this to serve non logged in users
 
 	
function tbt_bl_popular_posts() {
	 
	// Our variables from the widget settings
	$title =__( 'Popular Posts' , 'zx_tbt' );
	$number_of_posts_to_show = 4;
 	
 	   
     
    // Loop
	$args = array( 
		'post_type' => 'post',
		'posts_per_page' => $number_of_posts_to_show,
		'meta_key' => 'post_views_count',
		'orderby' => 'meta_value_num',
		'order' => 'DESC'
	);
	$the_query = new WP_Query( $args );

	$catt = get_the_terms( $post->ID, 'category' );
	if (isset($catt) && ($catt!='')){
	$slugg = '';
	$slug = ''; 

	foreach($catt  as $vallue=>$key){
		$slugg .= strtolower($key->slug) . " ";
		$slug  .= ''.$key->name.', ';
	}
	
	};
	 ?> <div class="zx_widget  zx_hidden zx_visible animated fadeIn" style="height:100%">      <?php
       tbt_bl_blog_titles($title);
    
    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();  
   		  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'squre-for-widgets');  
	?>
		
		 <div class="zx_popular_widget_post_holder" style="height:25%">
         	<div class="zx_popular_widget_post_image" style="height:100%">
            	<?php if ($large_image_url[0] !='') {?>
				<a class="zx_image_link" href="<?php echo tb_bl_single_post_link(get_the_ID());  ?>"><img class="img-responsive" src="<?php echo $large_image_url[0]; ?>"></a>
                <?php }else{?>
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/framework/css/img/zx_format_standard_w.png">
				<?php };?>
                <div class="zx_popular_widget_views"><?php echo getPostViews(get_the_ID());?></div>
            </div>
            <div class="zx_popular_widget_post_content" style="height:25%">
            	<div class="zx_date_d colored"><?php the_time('d F') ?> <span class="zx_year"><?php the_time('Y') ?></span></div>
                <div class="zx_post_cat">
					<?php echo substr($slug, '0', '-2');?>
                </div>
            	<h5 class="zx_blog_post_title"><strong><a href="<?php echo tb_bl_single_post_link(get_the_ID());  ?>"><?php the_title(); ?> </a></strong></h5>
                <div class="zx_popular_widget_post_description" style="overflow:hidden;height:33%"><?php echo get_post_meta(get_the_ID(), 'post-descr', true); ?></div>
            </div>
         </div>
         <div class="clearfix"></div>
        

	<?php endwhile;  ?> 
    <?php endif; ?>
	 
	  <div class='clearfix'></div> 

 	<?php
  	wp_reset_query();
 	die();
}
 // add
add_action( 'wp_ajax_tbt_bl_popular_posts', 'tbt_bl_popular_posts' );
add_action( 'wp_ajax_nopriv_tbt_bl_popular_posts', 'tbt_bl_popular_posts' ); // need this to serve non logged in users

// main post holder

function tbt_bl_post_holder(){
	
	$plugin_dir = plugin_dir_path( __FILE__ );
	 
	 // Loop
	$args = array( 
		'post_type' => 'post',
		'posts_per_page' => 20,
		'meta_query' => array(
		'relation' => 'OR',
			array(
				'key' => 'oi_featured',
				'value' => 'Yes',
				'compare' => 'LIKE'
			)
	)
	);
	$the_query = new WP_Query( $args );

	$catt = get_the_terms( $post->ID, 'category' );
	if (isset($catt) && ($catt!='')){
	$slugg = '';
	$slug = ''; 
	foreach($catt  as $vallue=>$key){
		$slugg .= strtolower($key->slug) . " ";
		$slug  .= ''.$key->name.', ';
	}
	
	};
	 
 

?>
<div id="posts_holder" class="zx_posts_holder" data-sticky_parent>
	<?php if ( !is_archive() ) { ?>
	<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts('paged='.$paged.'&cat='.$cat); ?>		
    <?php } ?> 
    <?php if (!(have_posts())) { ?><h3 class="page_title">There are no posts</h3><?php }  ?>   
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<?php $layout = get_post_meta($post->ID, 'posts_layout', 1);
		if ($layout == 'Wide'){?>
       	<div <?php post_class('zx_wide_post'); ?> id="post-<?php the_ID(); ?>">
            <div class="blog_item" style="height:100%;overflow:hidden;">
                <?php $format = get_post_format(); get_template_part( 'zx_blog/post-format/format', $format );   ?>
            </div>
        </div>
        <?php }else {?>
        <div <?php post_class('zx_post'); ?> id="post-<?php the_ID(); ?>">
            <div class="blog_item" style="height:100%;overflow:hidden;">

                <?php $format = get_post_format(); get_template_part( 'zx_blog/post-format/format', $format );   ?>
            </div>
        </div>
        <?php };?>
    <?php endwhile;  ?> 
	<?php endif; ?>
    <?php if (function_exists('wp_corenavi')) { ?><div class="zx_pg"><?php wp_corenavi(); ?><div class="clearfix"></div></div><?php }?>
</div>
<?php
  	wp_reset_query();
 	die();
}

 // add
add_action( 'wp_ajax_tbt_bl_post_holder', 'tbt_bl_post_holder' );
add_action( 'wp_ajax_nopriv_tbt_bl_post_holder', 'tbt_bl_post_holder' ); // need this to serve non logged in users

// single post
function tbt_bl_single_post(){

$id=$_POST['tbt_bl_post_id'];
 // Loop
	$args = array( 
		'p' => $id,
	);
	$the_query = new WP_Query( $args );
  
   if (!($the_query->have_posts())) { ?><h3 class="page_title">There are no posts</h3><?php }   ?>  
<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<div data-sticky_parent <?php post_class('zx_single_post'); ?> id="post-<?php the_ID(); ?>">
		<?php $format = get_post_format(); get_template_part( 'zx_blog/post-format/single', $format );   ?>
	</div>

<?php endwhile; endif;  
 wp_reset_query();
 	die();
}
// add
add_action( 'wp_ajax_tbt_bl_single_post', 'tbt_bl_single_post' );
add_action( 'wp_ajax_nopriv_tbt_bl_single_post', 'tbt_bl_single_post' ); // need this to serve non logged in users

?>