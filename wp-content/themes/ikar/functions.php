<?php
add_filter('show_admin_bar', '__return_false');

require_once get_template_directory() . '/functions/enqueue_js_and_css.php';
