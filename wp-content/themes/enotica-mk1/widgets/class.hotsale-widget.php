<?php

class hotsale_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
      // Base ID of your widget
      'hotsale_widget', 
      // Widget name will appear in UI
      'Hot Sale', 
      // Widget description
      array( 'description' => "Hot Sale") 
    );
  }

  public function widget($args, $instance) {
    extract( $args );
    set_query_var('subtitle', $instance['subtitle']);    
    get_template_part('widgets/hotsale', 'widget');
  }

	public function form( $instance ) {
    //Defaults
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'subtitle'   => '',
			)
		);
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'subtitle' ); ?>">Subtitulo:</label>
			<input type="text" name="<?php echo $this->get_field_name( 'subtitle' ); ?>" id="<?php echo $this->get_field_id( 'subtitle' ); ?>" class="widefat" placeholder="Subtitulo" value="<?php echo $instance['subtitle']; ?>" />
		</p>
		<?php
	}

  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['subtitle'] = ( ! empty( $new_instance['subtitle'] ) ) ? strip_tags( $new_instance['subtitle'] ) : '';
    return $instance;
  }

}
//registering my widget so its available in the back-end
add_action('widgets_init', function() {
    register_widget('hotsale_widget');
});