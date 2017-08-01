<?php $args = array('posts_per_page' => '2','post_type' => array('post'));
         $eeq = new WP_Query($args);
if($eeq->have_posts()) : while($eeq->have_posts()) : $eeq->the_post(); ?>
                <div class="content col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="content-img">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                        <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                    </a>
                    </div><!--/.content img -->
                    <div class="content-post">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <h2><?php echo wp_trim_words( get_the_title(), 10, ''); ?></h2> 
                        </a>
                        <span>By <?php the_author_posts_link(); ?> - <?php the_time('j F, Y'); ?> - <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> <?php echo wpb_get_post_views(get_the_ID()); ?></span>
                        <p class="a"><?php the_excerpt(); ?></p>
                    </div><!--/.content post -->
                </div><!--/.content -->
<?php endwhile; endif; ?>