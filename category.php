<?php get_header(); ?>

<!--==== MAIN WRAPPER ===== -->
    <div id="main-wrapper" class="container">
    <div class="row">
        <div id="left-slide" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="container">
                <div class="row">
                    <div id="browser-search">
                    <?php if(have_posts()) : ?>
                        <h2 class="size-up ">Browsing: <span class="size-up size"><?php single_cat_title(); ?></span></h2>
                    </div><!--/#browser search-->
                </div><!--/.row-->
            </div><!--/container-->
            
            <div class="container">
                <div class="row">
				<?php if (category_description()): ?>
					<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
				<?php while(have_posts()) : the_post(); ?>
            <div class="newsco row">
                <div class="newsco-img col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                     <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            //image default
                            }?>
                 </a>
                </div><!--/.col-->
                <div class="newsco-post col-xs-12 col-sm-7 col-md-7 col-lg-7">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
                            <h2><?php echo wp_trim_words( get_the_title(), 10, ''); ?></h2>
                        </a>
                    <span>By <a href=""><?php the_author(); ?></a> - <?php the_time( 'j F, y' ); ?> - <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 3</span>
                    <p class="a"><?php the_excerpt(); ?></p>
                </div><!--/.col-->
            </div><!--/.row-->
        <?php endwhile; endif; ?>
                </div><!--/.row-->
            </div><!--/container-->
        </div><!--/#left slide/.col-->
        <?php include "sidebar.php"; ?>
    </div><!--/.row-->
    </div><!--/#main wrapper -->
<?php get_footer(); ?>