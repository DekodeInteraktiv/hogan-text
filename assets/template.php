<?php
/**
 * Template for text module
 *
 * $this is an instace of the Text object. Ex. use: $this->content to output content value.
 *
 * @package Hogan
 */

namespace Dekode\Hogan;

if ( ! defined( 'ABSPATH' ) || ! ( $this instanceof Text ) ) {
	return; // Exit if accessed directly.
}

// CSS classes for inner wrapper <div>.
$classes = apply_filters( 'hogan/module/text/inner_wrapper_classes', [], $this );
$classes = trim( implode( ' ', array_filter( $classes ) ) );

?>

<div class="<?php echo esc_attr( $classes ); ?>">
	<?php echo wp_kses_post( $this->content ); ?>
</div>
