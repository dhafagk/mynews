<?php

add_action('admin_menu', 'mynews_menu');

function mynews_menu() {
	add_menu_page('Configuration', 'MyNews Config', 'mynews_config','configuration', 'configuration','dashicons-admin-generic',2 );
	add_action( 'admin_init', 'register_mynews_settings' );
	
}
function register_mynews_settings() {
	register_setting( 'mynews-settings', 'logo' );
	register_setting( 'mynews-settings', 'imgads' );
	register_setting( 'mynews-settings', 'linkads' );
	register_setting( 'mynews-settings', 'logfoot');
	register_setting( 'mynews-settings', 'footer');
	register_setting( 'mynews-settings', 'adsheader' );
    register_setting( 'mynews-settings', 'c_address' );
    register_setting( 'mynews-settings', 'c_contacts' ); 
	register_setting( 'mynews-settings', 'c_link' );  
    //
register_setting( 'usagilabs-config', 'recom_num_post' );
}
function dashboard() { 
?>
<div class="wrap">
<h2>Dashboard</h2>
</div>
<?php }
function configuration() {
	if(function_exists( 'wp_enqueue_media' )){
		wp_enqueue_media();
	}else{
		wp_enqueue_style('thickbox');
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}
?>
<div class="wrap">
<h2><i class="dashicons dashicons-admin-generic"></i> Konfigurasi MyNews Theme</h2>
<form method="post" action="options.php" enctype="multipart/form-data">
    <?php settings_fields( 'mynews-settings' ); ?>
    <?php do_settings_sections( 'mynews-settings' ); ?>
<div class='ts'><h2><i class="dashicons dashicons-admin-generic"></i> Pengaturan Utama</h2>
    <table class="form-table">
<!-- <tr valign="top">
			<th scope="row">Title Website</th>
			<td><input type="text" size="20" name="c_title" value="<?php echo get_option('c_title'); ?>" placeholder="Input your title website"> <i>example : C-Studio</i></td> 
		</tr>
<tr valign="top">
			<th scope="row">Deskripsi Website</th>
			<td><input type="text" size="40" name="c_desc" value="<?php echo get_option('c_desc'); ?>" placeholder="Input your title website"> 
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Example : Download Anime Subtitle Indonesia</div>
</td> 
		</tr> -->
    	<tr valign="top">
        <th scope="row">Logo</th>
        <td>
        	<?php if(get_option('logo')!=''){ ?><img class="logo_img" src="<?php echo get_option('logo'); ?>" /></br><?php } ?>
		<input class="logo" type="text" name="logo" size="60" value="<?php echo get_option('logo'); ?>">
		<a href="#" class="header_logo_upload button button-primary">Upload</a>
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Gambar 500px x 500px</div>
	</td>
        </tr>
      <tr valign="top">
        <th scope="row">Ads left</th>
        <td><textarea type="text/javascript" name="adsheader" rows="4" cols="20" value="<?php echo esc_attr( get_option('adsheader') ); ?>" class="large-text code" placeholder="Place your ads code here (728 x 90)"><?php echo esc_attr( get_option('adsheader') ); ?></textarea></td>
        </tr>

        <tr valign="top">
        	<th scope="row"></th>
        	 <td>
        	<?php if(get_option('imgads')!=''){ ?><img class="ads_img" src="<?php echo get_option('imgads'); ?>" /></br><?php } ?>
		<input class="imgads" type="text" name="imgads" size="60" value="<?php echo get_option('logo'); ?>">
		<a href="#" class="header_adsimage_upload button button-primary">Upload</a>
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Gambar 728px x 90px</div>
	</td>
	
        </tr>

        <tr valign="top">
        	<th scope="row"></th>
        	<td><input type="text" size="80" name="linkads" value="<?php echo get_option('linkads'); ?>" placeholder="Link ads"></td>
        </tr>

 
    </table>  
</div>

<div class='ts'><h2><i class="dashicons dashicons-admin-generic"></i> Footer</h2>
  <table class="form-table">
          <tr valign="top">
        <th scope="row">Gambar Footer</th>
        <td>
        	<?php if(get_option('logfoot')!=''){ ?><img class="logfoot_img" src="<?php echo get_option('logfoot'); ?>" /></br><?php } ?>
		<input class="logfoot" type="text" name="logfoot" size="60" value="<?php echo get_option('logfoot'); ?>">
		<a href="#" class="header_logfoot_upload button button-primary">Upload</a>
<div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>Gambar 500px x 500px</div>
	</td>
        </tr>
<tr valign="top">
			<th scope="row">Address</th>
			<td><input type="text" size="80" name="c_address" value="<?php echo get_option('c_address'); ?>" placeholder="Masukkan alamat dari website anda"> <div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>example : Jl. Moch Toha No.77 Kota Bandung Jawa Barat - Indonesia</div></td> 
		</tr>
		<tr valign="top">
			<th scope="row">Contact</th>
			<td><input type="text" size="80" name="c_contacts" value="<?php echo get_option('c_contacts'); ?>" placeholder="Punya kontak yang bisa dihubungi?"> <div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>example : Phone: +62 8999 479 796/</div></td> 
		</tr>
		<tr valign="top">
			<th scope="row">Links</th>
			<td><input type="text" size="80" name="c_link" value="<?php echo get_option('c_link'); ?>" placeholder="Link website perusahaan anda"> <div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>example : www.shaffindo.co.id</div></td> 
		</tr>
		<tr valign="top">
			<th scope="row">Tulisan Footer</th>
			<td><input type="text" size="80" name="footer" value="<?php echo get_option('footer'); ?>" placeholder="Disini tulisan footer"> <div style='color:#666;font-style:italic;padding:5px;font-style:13px;'>example : Copyright (c) 2016 shaffindo megakreassi</div></td> 
		</tr>
 </table>  
</div>


    <?php submit_button(); ?>

</form>
</div>
<script>
		jQuery(document).ready(function($) {
			/*Logo Upload*/
			$('.header_logo_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.logo').val(attachment.url);
					$('.logo_img').attr('src', attachment.url);
	
				})
				.open();
			});

			/*Logo Footer Upload*/
			$('.header_logfoot_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.logfoot').val(attachment.url);
					$('.logfoot_img').attr('src', attachment.url);
	
				})
				.open();
			});

			/*Foto Author Upload*/
			$('.header_adsimage_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.imgads').val(attachment.url);
					$('.ads_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
			/*Service 1 Image Upload*/
			$('.service_1_image_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.service_1_image').val(attachment.url);
					$('.service_1_image_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
			/*Service 2 Image Upload*/
			$('.service_2_image_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.service_2_image').val(attachment.url);
					$('.service_2_image_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
			/*Service 3 Image Upload*/
			$('.service_3_image_upload').click(function(e) {
				e.preventDefault();
	
				var custom_uploader = wp.media({
					title: 'Custom Image',
					button: {
						text: 'Upload Image'
					},
					multiple: false  // Set this to true to allow multiple files to be selected
				})
				.on('select', function() {
					var attachment = custom_uploader.state().get('selection').first().toJSON();
					$('.service_3_image').val(attachment.url);
					$('.service_3_image_img').attr('src', attachment.url);
	
				})
				.open();
			});
			
		});
</script>
<style type='text/css'>
/* ADMIN CSS */
#wpwrap{background:#7ac2ff}
.wrap h2{color:#fff;}
.ts{background:#fff;padding:10px;margin-top:20px;}
.ts>h2{background:#2693f1;padding:10px;margin:-10px;color:#fff}
</style>
<?php } 
function setup() { ?>


</div>
<?php } ?>