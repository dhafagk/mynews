<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Error 404 - </title>
    <!--Call CSS FILES-->
        <?php wp_enqueue_style( 'mynews-styles', get_template_directory_uri() . 'assets/css/BootLizeV3.min.css', false, '1.0.0' ); ?> <!--BOOTLIZE V3,1 -->
</head>
<body>
<style type='text/css'>
*{padding: 0;margin: 0;	}
html, body{height: 100%;font-family: GillSans, Calibri, Trebuchet, sans-serif;overflow: hidden;}
html {
    background-image: url('assets/img/boxdiv6.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: none;
    background-attachment: fixed;
    height: 100%;
}
    #errorpage{
        height: 100%;width: 100%;font-size: 30px;margin-top: 5em;
    }
    .error{margin:13% auto;background: rgba(225,225,225,0.8);padding-bottom:50px;}
    .error .box-404{font-family:Oswald,&quot;Arial Narrow&quot;,Sans-Serif;font-size:100px;color:#c0392b;margin:0 auto;}
    .error h1{text-transform:uppercase;text-decoration:none;font-size:140%;margin:0;padding:0;color:#000;}
    .error p{line-height:0.7em;font-size:25px;padding: 0px 20px;color:#000; }
    a:link{color:darkcyan !important;text-decoration:none}
    a:visited{color:greenyellow !important;text-decoration:none}
    a:hover{color:orangered !important;text-decoration:none}
    .error-footer{background: rgba(225,0,0,0.6);padding:0px;position: relative;bottom: -8px;}
    .error-footer p{font-size:25px;color:white;text-align: center;}
</style>

<!-- page error -->
<div id="errorpage">
    <div class="error">
        <div class="container-material">
            <div class='box-404 center'>404</div><!-- box 404 -->
            <h1>LINK tidak ditemukan</h1>
            <p>
                Kemungkinan URL yang anda masukan <i>SALAH</i>.
                Kembali ke <a href="<?php echo esc_url( home_url('/') ); ?>">MyNews</a>
            </p>
        </div><!--/.container-->
    </div><!--/.error-->
    <div class="error-footer">
        <p>
        <?php $footer = get_option('footer'); if($footer){ ?>
        <span class="title-project"><?php echo $footer; ?></span>
        <?php }else{ ?>
        <span class="title-project">Copyright (c) 2016 shaffindo megakreassi</span>
        <?php } ?>
        </p>
    </div><!--/.error footer-->
</div><!--/#errorpage-->
<script>
//<![CDATA[
    $(document).ready(function(){
        $('.credit').html('Design by <a class="a" href="http://daloadtemplate.blogspot.com">ExteraDex</a>');

        
        $('.title-project').html('<a class="a" href="http://daloadtemplate.blogspot.com">AqoursSafeLink</a>');
    });
//]]>
</script>

</body>
</html>