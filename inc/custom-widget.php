<?php

add_action( 'widgets_init', 'popular_widget');
function popular_widget() {
register_widget( 'popular_widget_info' );
}
class popular_widget_info extends WP_Widget {
function popular_widget_info () {
$this->WP_Widget('popular_widget_info', '[MyNews] Random News', $widget_ops ); }
public function form( $instance ) {
if ( isset( $instance[ 'name' ]) && isset ($instance[ 'total' ]) ) {
$name = $instance[ 'name' ];
$total = $instance[ 'total' ];
}
else {
$name = __( '', 'srs_widget_title' );
$total = __( '', 'srs_widget_title' );
} ?>
<p>Title: <input class="widefat" name="<?php echo $this->get_field_name( 'name' ); ?>" type="text" value="<?php echo esc_attr( $name );?>" /></p>
<p>Display: <input class="widefat" name="<?php echo $this->get_field_name( 'total' ); ?>" type="number" min="5" value="<?php echo esc_attr( $total ); ?>" placeholder="Ingin menampilkan berapa post?"/></p>
<?php
}
function update($new_instance, $old_instance) {
$instance = $old_instance;
$instance['name'] = ( ! empty( $new_instance['name'] ) ) ? strip_tags( $new_instance['name'] ) : '';
$instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : '';
return $instance;
}
function widget($args, $instance) {
extract($args);
echo $before_widget;
$name = apply_filters( 'widget_title', $instance['name'] );
$total = empty( $instance['total'] ) ? '&nbsp;' : $instance['total'];
if ( !empty( $name ) ) { echo "<div class='widget-header'>" . $name . "</div>"; };
$i = 0;$popularpost = new WP_Query( array( 'posts_per_page' => $total, 'post_type' => 'post', 'order' => 'ASC', 'orderby' => 'rand' ) ); while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
<?php $i++ ?>
		<div class="row">
                <div class="widget-img">
                    <a href="">
                        <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail();
                        }else{
                            echo '<img src="assets/img/boxdiv6.jpg" alt="">';
                            }?>
                    </a>
                </div> <!--widget img-->
                <div class="widget-caption">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="<?php the_id(); ?>"><h2><?php echo wp_trim_words( get_the_title(), 5, '...'); ?></h2></a>
                    <span><?php the_time('j F, Y'); ?></span>
                </div><!--/widget caption-->
        </div>
<?php endwhile;
echo "</div>";
echo $after_widget;
} }

?>