<?php get_header(); ?>
    <!--==== MAIN WRAPPER ===== -->
    <div id="main-wrapper" class="container">
    <div class="row">
        <div id="left-slide" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <?php if(have_posts()) : ?>

            <?php while(have_posts()) : the_post(); ?>

           <!--=============
              JUDUL POST
            =================-->
           <h1 class="title" style="margin-top: 20px !important;padding-bottom: 0px!important;"><?php the_title(); ?></h1>
            <!--===========
                PostContent
            ===============-->
            <div id="post-content">
                <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail('');
                        }else{
                            //image default
                            }?>
                <?php the_content(); ?>
            </div><!--/#post-content-->

            <!--===========
                ShareButton
            ===============-->
            <div class="postshare">
                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" class="cf service facebook" target="_blank" onclick="window.open(this.href); return false;"><i class="fa fa-facebook"></i> <span class="label ">Facebook</span></a>
                <a href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" class="cf service twitter" target="_blank"><i class="fa fa-twitter"></i> <span class="label ">Twitter</span></a>
                <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="cf service google" target="_blank"><i class="fa fa-google"></i> <span class="label ">Google+</span></a>
            </div><!--/.postshare-->

                
                <?php endwhile; endif; ?>

            <div id="footer-post3"></div><!--/#Footer Post 3-->
        </div><!--/#left slide/.col-->
        <?php get_sidebar(); ?>
    </div><!--/.row-->
    </div><!--/#main wrapper -->
    <?php get_footer(); ?>