<?php
/**
 * Text module class
 *
 * @package Hogan
 */

declare( strict_types = 1 );
namespace Dekode\Hogan;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( '\\Dekode\\Hogan\\Text' ) && class_exists( '\\Dekode\\Hogan\\Module' ) ) {

	/**
	 * Text module class (WYSIWYG).
	 *
	 * @extends Modules base class.
	 */
	class Text extends Module {

		/**
		 * WYSIWYG content for use in template.
		 *
		 * @var string $content
		 */
		public $content;

		/**
		 * Module constructor.
		 */
		public function __construct() {

			$this->label = __( 'Text', 'hogan-text' );
			$this->template = __DIR__ . '/assets/template.php';

			parent::__construct();
		}

		/**
		 * Field definitions for module.
		 *
		 * @return array $fields Fields for this module
		 */
		public function get_fields() : array {

			return [
				[
					'type' => 'wysiwyg',
					'key' => $this->field_key . '_content',
					'name' => 'content',
					'label' => __( 'Add content', 'hogan-text' ),
					'delay' => true,
					'required' => true,
					'tabs' => apply_filters( 'hogan/module/text/content/tabs', 'all' ),
					'media_upload' => apply_filters( 'hogan/module/text/content/allow_media_upload', 1 ),
					'toolbar' => apply_filters( 'hogan/module/text/content/toolbar', 'hogan' ),
				],
			];
		}

		/**
		 * Map raw fields from acf to object variable.
		 *
		 * @param array $raw_content Content values.
		 * @param int   $counter Module location in page layout.
		 * @return void
		 */
		public function load_args_from_layout_content( array $raw_content, int $counter = 0 ) {

			$this->content = trim( $raw_content['content'] ?? '' );

			parent::load_args_from_layout_content( $raw_content );
		}

		/**
		 * Validate module content before template is loaded.
		 *
		 * @return bool Whether validation of the module is successful / filled with content.
		 */
		public function validate_args() : bool {
			return ! empty( $this->content );
		}
	}
}
