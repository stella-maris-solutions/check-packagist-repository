<?php

require_once __DIR__ . '/vendor/autoload.php';

\StellaMaris\CheckPackagistRepository\Plugin::init();
add_action('wp_ajax_search_install_plugins', 'search_install_plugins');
