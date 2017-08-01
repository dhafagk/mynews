<?php include "header.php"; ?>
    <!-- ==== BOX DIV ===== -->
         <?php include (TEMPLATEPATH . '/featured-posts.php'); ?>
    <!--==== MAIN WRAPPER ===== -->
    <div id="main-wrapper" class="container">
    <div class="row">
        <div id="left-slide" class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="">
            <span class="pembuka">
                <h1 class="size size-2" style="margin-bottom:7px;">Berita <span class="text-primary-color1">Terpopuler</span></h1>
                <hr width="100%;"/>
            </span><!--/.pembuka-->
            <div class="row">
            <?php include (TEMPLATEPATH . '/article-popular.php'); ?>
            </div>
            </div><!--/.container-->
            
            <div class="">
            <span class="pembuka">
                <h1 class="size size-2" style="margin-bottom:7px;">Berita <span class="text-primary-color1">Terbaru</span></h1>
                <hr width="100%"/>
            </span><!--/.pembuka-->
            <div class="row">
            <?php include (TEMPLATEPATH . '/berita-terbaru.php'); ?>
            </div><!--/.row-->
            <div class="row">
            <?php include (TEMPLATEPATH . '/berita-terbaru-s.php'); ?>
            </div><!--/.row-->
            </div><!--/.container-->
            
            <div class="">
            <span class="pembuka">
                <h1 class="size size-2" style="margin-bottom:7px;">Berita <span class="text-primary-color1">Olahraga</span></h1>
                <hr width="100%"/>
            </span><!--/.pembuka-->
            <?php include (TEMPLATEPATH . '/berita-olahraga.php'); ?>
            </div><!--/.container-->
        </div><!--/#left slide/.col-->
        <?php include "sidebar.php"; ?>
    </div><!--/.row-->
    </div><!--/#main wrapper -->
 <?php include "footer.php"; ?>