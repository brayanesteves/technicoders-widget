<?php
    /**
     * Adds Technicoders_Subs widget.
     */
    class Technicoders_Subs_Widget extends WP_Widget {

        /**
         * Register widget with WordPress.
         */
        function __construct() {
            parent::__construct(
                'technicoders_widget', // Base ID
                esc_html__( 'Technicoders Software', 'tchncdrs_domain' ), // Name
                array( 'description' => esc_html__( 'Widget to display Technicoders', 'tchncdrs_domain' ), ) // Args
            );
        }

        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget( $args, $instance ) {
            echo $args['before_widget']; // Whatever you want to display before widget (<div>, etc)
            /*if ( ! empty( $instance['title'] ) ) {
                echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
            }*/
            // Widget Content Output
            echo '<div class="body-technicoders"><div class="container-technicoders card-technicoders"><div class="card-technicoders" data-text="Design"><div class="imgBx"><img src="https://www.crearlogogratisonline.com/images/crearlogogratis_1024x1024_01.png" alt=""></div><div class="content"><div><h3>' . $instance['title'] . '</h3><p>' . $instance['descriptions'] . '</p><!--<a href="#">Read More</a>--></div></div></div></div>';
            echo $args['after_widget']; // Whatever you want to display after widget (</div>, etc)
        }

        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form( $instance ) {
            $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Technicoders Title', 'tchncdrs_domain' );
            $description = ! empty( $instance['descriptions'] ) ? $instance['descriptions'] : esc_html__( 'Technicoders Description', 'tchncdrs_domain' );
?>
            <!-- <TITLE> -->
            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'tchncdrs_domain' ); ?></label> 
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
            </p>
            <!-- </TITLE> -->
            <!-- <DESCRIPTION> -->
            <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'descriptions' ) ); ?>"><?php esc_attr_e( 'Description:', 'tchncdrs_domain' ); ?></label> 
            <textarea class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'descriptions' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'descriptions' ) ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>"></textarea>
            </p>
            <!-- </DESCRIPTION> -->
<?php 
        }

        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
            $instance['descriptions'] = ( ! empty( $new_instance['descriptions'] ) ) ? sanitize_text_field( $new_instance['descriptions'] ) : '';

            return $instance;
        }

    } // class Foo_Widget
?>