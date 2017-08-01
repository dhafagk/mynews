<?php $args = array('posts_per_page' => '6','post_type' => array('post'), 'offset' => '2');
         $eeq = new WP_Query($args);
if($eeq->have_posts()) : while($eeq->have_posts()) : $eeq->the_post(); ?>
<div class="co-thumb col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="co-thumb-img col-md-4">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                        <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                    </a>
                    </div><!--/.col-->
                    <div class="co-thumb-post col-md-8">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                            <h2><?php echo wp_trim_words( get_the_title(), 10, ''); ?></h2>
                        </a>
                        <span><?php the_time('j F, Y'); ?></span>
                    </div><!--/.col-->
                </div><!--/.content-->
<?php endwhile; endif; ?>

