<?php
$args = array('showposts' => '3','post_type' => 'post','category_name' => 'sport','order' => 'ASC','order' => '');
$qqqq = new WP_Query($args);
if($qqqq->have_posts()) : while($qqqq->have_posts()) : $qqqq->the_post();
?>
<div class="newsco row">
                <div class="newsco-img col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <a href="<?php the_permalink(); ?>" id="<?php the_title(); ?>">
                        <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            echo '<img src="assets/img/boxdiv6.jpg" alt="">';
                            }?>
                    </a>
                    <span class="label"><?php numinous_colored_category(); ?></span>
                </div><!--/.col-->
                <div class="newsco-post col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php echo wp_trim_words( get_the_title(), 10, ''); ?></h2> 
                    </a>
                    <span>By <?php the_author_posts_link(); ?> - <?php the_time('j F, Y'); ?> - <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 3</span>
                    <p class="a"><?php the_excerpt(); ?></p>
                </div><!--/.col-->
            </div><!--/.row-->
<?php endwhile; endif; ?>
<div style="clear:both;"></div>