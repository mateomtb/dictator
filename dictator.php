<?php
/**
 * The Dictator controls the State of WordPress with WP-CLI
 * 
 * Use wisely.
 */

if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
	return;
}

define( 'DICTATOR', true );

/**
 * Some files need to be manually loaded
 */
require_once dirname( __FILE__ ) . '/autoload.php';
require_once dirname( __FILE__ ) . '/php/class-dictator.php';
require_once dirname( __FILE__ ) . '/php/class-dictator-cli-command.php';

Dictator::add_state( 'network', '\Dictator\States\Network', 'network.yml' );
Dictator::add_state( 'site', '\Dictator\States\Site', 'site.yml' );
