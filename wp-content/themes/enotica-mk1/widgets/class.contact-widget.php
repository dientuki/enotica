<?php

class contact_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
      // Base ID of your widget
      'contact_widget', 
      // Widget name will appear in UI
      'Datos de contacto', 
      // Widget description
      array( 'description' => "Contacto") 
    );
  }

  public function widget($args, $instance) {
    extract( $args );
    set_query_var('instance', $instance);    
    get_template_part('widgets/contact', 'widget');
  }

	public function form( $instance ) {
    //Defaults
		$instance = wp_parse_args(
			(array) $instance,
			array(
        'address' => '',
        'phone' => '',
        'email' => '',
			)
		);
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'address' ); ?>">Direccion:</label>
			<input type="text" name="<?php echo $this->get_field_name( 'address' ); ?>" id="<?php echo $this->get_field_id( 'address' ); ?>" class="widefat" placeholder="Direccion" value="<?php echo $instance['address']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'phone' ); ?>">Telefono:</label>
			<input type="tel" name="<?php echo $this->get_field_name( 'phone' ); ?>" id="<?php echo $this->get_field_id( 'phone' ); ?>" class="widefat" placeholder="Telefono" value="<?php echo $instance['phone']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'email' ); ?>">Email:</label>
			<input type="email" name="<?php echo $this->get_field_name( 'email' ); ?>" id="<?php echo $this->get_field_id( 'email' ); ?>" class="widefat" placeholder="Email" value="<?php echo $instance['email']; ?>" />
		</p>        
		<?php
	}

  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
    $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
    $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
    return $instance;
  }

}
//registering my widget so its available in the back-end
add_action('widgets_init', function() {
    register_widget('contact_widget');
});