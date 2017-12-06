<?php
/**
 * Text Module template
 *
 * $this is an instace of the Text object.
 *
 * Available properties:
 * $this->content (string) HTML content.
 *
 * @package Hogan
 */

declare( strict_types = 1 );
namespace Dekode\Hogan;

if ( ! defined( 'ABSPATH' ) || ! ( $this instanceof Text ) ) {
	return; // Exit if accessed directly.
}

echo wp_kses_post( $this->content );
