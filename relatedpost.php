<div class="related-post">
                    
                    <div class="row">
<?php 
$orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
$args=array(
'post__not_in' => array($post->ID),
'posts_per_page'=> 3,
'caller_get_posts'=>1,
'orderby'=>rand,
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<div class="headrelated">Related <span class="text-primary-color1">Post</span></div>';
while( $my_query->have_posts() ) {
$my_query->the_post();?>
                        <div class="related-konten col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <div class="related-img">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                        <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                    </a>
                            </div><!--/related img-->
                            <h2><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" rel="<?php the_id(); ?>"><?php echo wp_trim_words( get_the_title(), 10, ''); ?></a></h2>
                            <h3><?php the_time('f J, Y'); ?></h3>
                        </div><!--/.col-->
<?php
}
}
}
$post = $orig_post;
wp_reset_query(); ?>
                    </div><!--/.row-->
                </div><!--/ralated post-->