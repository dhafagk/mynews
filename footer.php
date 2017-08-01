<!--===== FOOTER ==== -->
<section class="footer1" id="contacts1-0" style="background-color: rgb(50, 50, 50); padding-top: 90px; padding-bottom: 90px;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="logo-footer"><a href="index-2.html">
                    <?php $logfoot = get_option('logfoot');
                    if($logfoot){ ?>
                        <img src="<?php echo $logfoot; ?>" alt="" rel="home" />
                    <?php }else{
                        echo "string";
                        } ?></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <p><strong>Address</strong><br>
                    <span class="white-text"><?php $address = get_option('c_address');
                        if ($address) {
                            echo $address;
                        }else{
                            echo "Saya tidak punya alamat";
                        }
                    ?></span>
                </p>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <p><strong>Contacts</strong><br>
                    <span class="white-text"><?php $kontak = get_option('c_contacts');
                        if ($kontak) {
                            echo $kontak;
                        }else{
                            echo "Tidak ada kontak";
                        }
                    ?></span><br><br>
                </p>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <p><strong>Links</strong><br>
                    <span class="white-text"><?php $link = get_option('c_link');
                        if ($link) { ?>
                            <a href="<?php $link ?>" target="_blank" class="white-text"><?php echo $link; ?></a>
                        <?php }else{
                            echo "Tidak ada kontak";
                        }
                    ?></span><br><br>
                </p>
            </div>

        </div>
    </div>
</section>

<footer class="" id="footer1-2" style="background-color: rgb(46, 46, 46); padding-top: 1.75rem; padding-bottom: 1.75rem;">

    <div class="container">
    <?php $footer = get_option('footer'); if($footer){ ?>
        <p class="center grey-text"><?php echo $footer; ?></p>
        <?php }else{ ?>
        <p class="center grey-text">Copyright (c) 2016 shaffindo megakreassi</p>
        <?php } ?>
    </div>
</footer>
</body>
</html>