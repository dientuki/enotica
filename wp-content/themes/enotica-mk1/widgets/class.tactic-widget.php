<?php

class tactic_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
      // Base ID of your widget
      'tactic_widget', 
      // Widget name will appear in UI
      'Tactico', 
      // Widget description
      array( 'description' => "Tactico") 
    );
  }

  public function widget($args, $instance) {
    extract( $args );
    set_query_var('parent_page', $instance['parent_page']);    
    get_template_part('widgets/tactic', 'widget');
  }

	public function form( $instance ) {
    //Defaults
		$instance = wp_parse_args(
			(array) $instance,
			array(
				'parent_page'   => '',
			)
		);
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'parent_page' ); ?>">Pagina del tactico:</label>
			<select name="<?php echo $this->get_field_name( 'parent_page' ); ?>" id="<?php echo $this->get_field_id( 'parent_page' ); ?>" class="widefat">
        <?php 
          $pages = get_pages(array('parent' => 0)); 
          foreach ( $pages as $page ) {
            $option = '<option value="' . $page->ID . '" '. $this->selected($instance['parent_page'], $page->ID) . '>';
            $option .= $page->post_title;
            $option .= '</option>';
            echo $option;
          }
        ?>
			</select>
		</p>
		<?php
	}

  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['parent_page'] = ( ! empty( $new_instance['parent_page'] ) ) ? strip_tags( $new_instance['parent_page'] ) : '';
    return $instance;
  }

  private function selected($ins, $id) {
    if ($ins == $id) {
      return 'selected="selected"';
    }
  }  

}
//registering my widget so its available in the back-end
add_action('widgets_init', function() {
    register_widget('tactic_widget');
});