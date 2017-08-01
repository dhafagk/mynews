<?php get_header(); ?>
    <!--==== MAIN WRAPPER ===== -->
    <div id="main-wrapper" class="container">
    <div class="row">
        <div id="left-slide" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <?php if(have_posts()) : ?>
          <!--=============
              BEADCRUMBS
            =================-->
            <?php while(have_posts()) : the_post(); ?>
           <div class="breadcrumbs">
                <span class="location">You are at:</span> 
                <?php custom_breadcrumbs(); ?>
           </div><!--/.breadcrumbs-wrap-->
           <!--=============
              JUDUL POST
            =================-->
           <h1 class="title"><?php the_title(); ?></h1>
           <!--=============
               PostInfo
            ================-->
            <div class="postinfo">
                <div class="author-img">
                    <?php echo get_avatar('1'); ?>
                </div><!--/outhor img -->
                <div class="postinfo-caption">
                    <span>By <a href=""><?php the_author(); ?></a> - <?php the_time('j F, Y'); ?> - <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> 3</span>
                </div><!--/.postinfo caption-->
            </div><!--/.postinfo-->
            <!--===========
                ShareButton
            ===============-->
            <div class="postshare">
                <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" class="cf service facebook" target="_blank" onclick="window.open(this.href); return false;"><i class="fa fa-facebook"></i> <span class="label ">Facebook</span></a>
                <a href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" class="cf service twitter" target="_blank"><i class="fa fa-twitter"></i> <span class="label ">Twitter</span></a>
                <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="cf service google" target="_blank"><i class="fa fa-google"></i> <span class="label ">Google+</span></a>
            </div><!--/.postshare-->
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
                <?php $role = get_role( 'penulis' ); var_dump($role); ?>
            </div><!--/#post-content-->
            <!--===========
                FOOTER Post
            ===============-->
            <div id="footer-post1">
                <div class="moretag">
                <?php $tags = get_the_tags(); ?>
                <?php if(!empty($tags)) : ?>
                <?php foreach ($tags as $tagss) { ?>
                    <span class="izuki"><a href="<?php echo esc_url( get_tag_link( $tagss->term_id )); ?>" title="Culture"><?php echo $tagss->name ?></a></span>
               <?php } else : echo '<span>No Tags Found</span>'; endif; ?>
                </div><!--/.moretag-->
         
                <section class="navigate-posts">
                    <div class="previous">
                        <span class="tiang"><i class="fa fa-chevron-left"></i>Previous Article</span>
                        <span class="link"><a href=""><?php previous_post_link('%link'); ?></a></span>
                    </div><!--/.previous-->
                    <div class="next">
                        <span class="tiang">Next Article<i class="fa fa-chevron-right"></i></span>
                        <span class="link">
                        <?php $nextpost = get_next_post(); ?>
                            <a href="" rel=""><?php if ($nextpost) {
                                next_post_link('%link');
                            }else{
                                echo "Tidak ada next post";
                                } ?></a>
                        </span>
                    </div><!--/.next-->
                </section><!--/navigate posts-->
            </div><!--/#Footer Post 1-->
            <div id="footer-post2">
                <?php global $post; ?>
                <?php if( get_post_meta(get_the_id(), 'author_box', true) == 'on' ){ ?>
                <div class='boxauthor hide-on-med-and-down'>
                    <div class='boxauthor_photo'>
                      <?php echo get_avatar('1'); ?>
                    </div><!-- author photo -->
                    <div class='boxtitle'>
                    <?php $authordong = get_the_author_meta('nickname'); ?>
                        <h3>Author : <?php if ($authordong) {
                            echo $authordong;
                        }else{
                            the_author();
                            } ?> <a expr:href='data:post.authorProfileUrl' rel='author' target='_blank' title='Masyadi'><data:post.author/></a></h3>
                    </div><!-- box title -->
                    <div class='boxcontent' style="padding-bottom: 10px;">
                        <?php $descdong = get_the_author_meta('description'); ?>
                        <?php if ($descdong) {
                            echo nl2br($descdong);   
                        }else{ ?>
                            Terimakasih, telah membaca artikel mengenai <b><a href="<?php the_title(); ?>" alt="<?php the_title(); ?>" rel="<?php the_id(); ?>"><?php the_title(); ?></a></b>. Semoga artikel tersebut bermanfaat untuk Anda. Mohon untuk memberikan 1+ pada <a href='https://plus.google.com/u/0/112761561600561597198' rel='author' target='_blank' title='Google+'>Google+</a>, 1 Like pada <a href='https://www.facebook.com/rikkatyrans' rel='me' target='_blank' title='Facebook'>Facebook</a>, dan 1 Follow pada <a href='https://twitter.com/megaedanmutles' rel='me' target='_blank' title='Twitter'>Twitter</a>. Jika ada pertanyaan atau kritik dan saran silahkan tulis pada kotak komentar yang sudah disediakan.
                            <?php } ?> 
                    </div><!-- BOX content -->
                    <div class='boxsocial'>
                        <div class='boxsocialtitle'>
                            Sosial Media
                        </div><!-- box sosial title -->
                        <?php $fb = get_the_author_meta('facebook'); $tw = get_the_author_meta('twitter'); $gg = get_the_author_meta('google'); ?>
                        <div class='boxfb'>

                        <?php if($fb){ ?>
                            <a href="<?php echo $fb; ?>" rel='nofollow' target='_blank' title='Share ke Facebook'>Facebook</a>
                        <?php }else{ ?>
                        <a expr:href='&quot;http://twittter.com/share?url=&quot; + data:post.url' rel='nofollow' target='_blank' title='Share ke Facebook'>Facebook</a>
                        <?php } ?>   

                        </div>
                        <div class='boxtwit'>

                            <?php if($tw){ ?>
                            <a href="<?php echo $tw; ?>" rel='nofollow' target='_blank' title='Share ke Twitter'>Twitter</a>
                        <?php }else{ ?>
                        <a expr:href='&quot;http://twittter.com/share?url=&quot; + data:post.url' rel='nofollow' target='_blank' title='Share ke Twitter'>Twitter</a>
                        <?php } ?>

                        </div>
                        <div class='boxgplus'>

                            <?php if($gg){ ?>
                            <a href="<?php echo $gg; ?>" rel='nofollow' target='_blank' title='Share ke Google+'>Google+</a>
                        <?php }else{ ?>
                        <a expr:href='&quot;http://twittter.com/share?url=&quot; + data:post.url' rel='nofollow' target='_blank' title='Share ke Google+'>Google+</a>
                        <?php } ?> 

                        </div>
                    </div><!-- box social -->
                </div><!-- aurhor box -->
                <?php }else{ ?>
                <div></div>
                <?php } ?>
                <?php endwhile; endif; ?>
                
                <?php include (TEMPLATEPATH . '/relatedpost.php'); ?>

            </div><!--/#Footer Post 2-->
            <div id="footer-post3"></div><!--/#Footer Post 3-->
        </div><!--/#left slide/.col-->
        <?php get_sidebar(); ?>
    </div><!--/.row-->
    </div><!--/#main wrapper -->
    <?php get_footer(); ?>