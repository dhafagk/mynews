<?php
$args = array('posts_per_page' => '4','post_type' => 'post', 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num','order' => 'DESC');
$despashito = new WP_Query($args);
if($despashito->have_posts()) : while($despashito->have_posts()) : $despashito->the_post();
?>
<div class="content col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="content-img">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="<?php the_id(); ?>">
                        <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            echo '<img src="assets/img/boxdiv6.jpg" alt="">';
                            }?>
                    </a>
                        <span class="label"><?php numinous_colored_category(); ?></span>
                    </div><!--/.content img -->
                    <div class="content-post">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="<?php the_id(); ?>">
                            <h2 class=""><?php echo wp_trim_words( get_the_title(), 8, '...'); ?></h2> 
                        </a>
                        <span>By <a href=""><?php the_author(); ?></a> - <?php the_time('j F, Y'); ?> - <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <?php echo wpb_get_post_views(get_the_ID()); ?></span>
                        <p class="a"><?php the_excerpt(); ?></p>
                    </div><!--/.content post -->
                </div><!--/.content -->
<?php endwhile; endif; wp_reset_postdata(); ?>