<?php
/**
 * Text module class
 *
 * @package Hogan
 */

namespace Dekode\Hogan;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( '\\Dekode\\Hogan\\Text' ) ) {

	/**
	 * Text module class (WYSIWYG).
	 *
	 * @extends Modules base class.
	 */
	class Text extends Module {

		/**
		 * WYSIWYG content for use in template.
		 *
		 * @var $content
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
		 */
		public function get_fields() {

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
		 * Map fields to object variable.
		 *
		 * @param array $content The content value.
		 */
		public function load_args_from_layout_content( $content ) {

			$this->content = trim( $content['content'] );

			parent::load_args_from_layout_content( $content );
		}

		/**
		 * Validate module content before template is loaded.
		 */
		public function validate_args() {
			return ! empty( $this->content );
		}
	}
}
