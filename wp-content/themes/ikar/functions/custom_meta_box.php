<?php

add_action( 'add_meta_boxes', 'slider_home_metabox', 1 );

function slider_home_metabox() {
	add_meta_box( 'slider_home', 'Дополнительные поля', 'slider_home', 'slider-home', 'normal', 'high' );
}

function slider_home( $post ) {
	?>
    <p>Описание слайдер:
        <label>
       <textarea type="text" name="slider_home[description]"
                 style="width:100%;height:50px;"><?php echo get_post_meta( $post->ID, 'description', 1 ); ?></textarea>
        </label>
    </p>
    <p>
        Ссылка на страницу:
        <label>
            <input type="text" name="slider_home[link]" style="width: 100%;"
                   value="<?php echo get_post_meta( $post->ID, 'link', 1 ); ?>">
        </label>
    </p>
    <input type="hidden" name="slider_home_nonce" value="<?php echo wp_create_nonce( __FILE__ ); ?>"/>

	<?php
}

add_action( 'save_post', 'slider_home_update', 0 );
function slider_home_update( $post_id ) {
	if (
		empty( $_POST['slider_home'] )
		|| ! wp_verify_nonce( $_POST['slider_home_nonce'], __FILE__ )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	) {
		return false;
	}
	$_POST['slider_home'] = array_map( 'sanitize_text_field', $_POST['slider_home'] );
	foreach ( $_POST['slider_home'] as $key => $value ) {
		if ( empty( $value ) ) {
			delete_post_meta( $post_id, $key );
			continue;
		}

		update_post_meta( $post_id, $key, $value );
	}

	return $post_id;
}