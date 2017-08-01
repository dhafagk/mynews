<!-- ==== BOX DIV ===== -->
    <div id="boxdiv">
    <div class="container">
     <div class="row">
<?php $args = array('showposts' => '1','post_type' => array('post'), 'ordeby' => '1');
         $QueriedObject = new WP_Query($args);
         //the loop
         if( $QueriedObject->have_posts()) :
        while( $QueriedObject->have_posts()) :
            $QueriedObject->the_post(); ?>
        <div id="boxdiv1" class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
            <div class="boxdiv-item item-large">
            <a href="<?php the_permalink(); ?>" title="<?php echo wp_trim_words( get_the_title(), 10, ''); ?>" class="">
                     <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                     <div class="egd" style=" height:77px; "></div><!-- /egd -->
                 </a>
                 <div class="boxdiv-caption">
        <span class="label"><?php numinous_colored_category(); ?></span>
                     <h1><a href="<?php the_permalink(); ?>" style="color: #fff;"><?php echo wp_trim_words( get_the_title(), 10, ''); ?></a></h1>
                     <span class="date"><?php the_time('j F, Y'); ?></span>
                 </div><!--/.boxdiv caption -->
             </div><!--/.boxdiv item-->
         </div><!--/#boxdiv1-->
     <?php endwhile; endif; ?>

<?php $args = array('posts_per_page' => '1','post_type' => array('post'), 'ordeby' => '1','offset' => '1');
         $QueriedObject = new WP_Query($args);
         //the loop
         if( $QueriedObject->have_posts()) :
        while( $QueriedObject->have_posts()) :
            $QueriedObject->the_post(); ?>
             <div id="boxdiv2" class="col-xs-6 col-sm-6 col-md-5 col-lg-5">
             <div class="boxdiv-item item-medium">
                 <a href="<?php the_permalink(); ?>" title="<?php echo wp_trim_words( get_the_title(), 10, ''); ?>" class="">
                     <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                     <div class="egd" style=" height:77px; "></div><!-- /egd -->
                 </a>
                 <div class="boxdiv-caption">
                     <span class="label"><?php numinous_colored_category(); ?></span>
                     <h1><a href="<?php the_permalink(); ?>" style="color: #fff;"><?php echo wp_trim_words( get_the_title(), 10, ''); ?></a></h1>
                     <span class="date"><?php the_time('j F, Y'); ?></span>
                 </div><!--/.boxdiv caption -->
             </div><!--/.boxdiv item-->
         </div><!--/#boxdiv2-->
        <?php endwhile; endif; ?>
<?php $args = array('posts_per_page' => '1','post_type' => array('post'), 'ordeby' => '1','offset' => '2');
         $QueriedObject = new WP_Query($args);
         //the loop
         if( $QueriedObject->have_posts()) :
        while( $QueriedObject->have_posts()) :
            $QueriedObject->the_post(); ?>
        <div id="boxdiv3" class="col-xs-6 col-sm-6 col-md-5 col-lg-5">
             <div class="boxdiv-item item-small">
                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                     <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                     <div class="egd" style=" height:77px; "></div><!-- /egd -->
                 </a>
                 <div class="boxdiv-caption">
                     <span class="label"><?php numinous_colored_category(); ?></span>
                     <h1><a href="<?php the_permalink(); ?>" style="color: #fff;"><?php echo wp_trim_words( get_the_title(), 8, ''); ?></a></h1>
                     <span class="date"><?php the_time('j F, Y'); ?></span>
                 </div><!--/.boxdiv caption -->
             </div><!--/.boxdiv item-->
         </div><!--/#boxdiv3-->
         <?php endwhile; endif; wp_reset_query(); ?>
<?php $args = array('posts_per_page' => '1','post_type' => array('post'), 'ordeby' => '1','offset' => '3');
         $QueriedObject = new WP_Query($args);
         //the loop
         if( $QueriedObject->have_posts()) :
        while( $QueriedObject->have_posts()) :
            $QueriedObject->the_post(); ?>
        <div id="boxdiv3" class="col-xs-6 col-sm-6 col-md-5 col-lg-5 hide-on-med-and-down">
             <div class="boxdiv-item item-small">
                 <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                     <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                     <div class="egd" style=" height:77px; "></div><!-- /egd -->
                 </a>
                 <div class="boxdiv-caption">
                     <span class="label"><?php numinous_colored_category(); ?></span>
                     <h1><a href="<?php the_permalink(); ?>" style="color: #fff;"><?php echo wp_trim_words( get_the_title(), 8, ''); ?></a></h1>
                     <span class="date"><?php the_time('j F, Y'); ?></span>
                 </div><!--/.boxdiv caption -->
             </div><!--/.boxdiv item-->
         </div><!--/#boxdiv3-->
         <?php endwhile; endif; wp_reset_postdata(); ?>
</div><!--/.row-->
    </div><!--/.container-->
    </div><!--/#boxdiv-->