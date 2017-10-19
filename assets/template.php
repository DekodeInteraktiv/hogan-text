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

?>

<section class="<?php echo esc_attr( implode( ' ', array_filter( $this->wrapper_classes ) ) ); ?>">
	<article class="columns">
		<?php echo wp_kses_post( $this->content ); ?>
	</article>
</section>
