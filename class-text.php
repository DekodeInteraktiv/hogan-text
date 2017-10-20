<?php

namespace Dekode\Hogan;

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

			$this->name = strtolower( substr( strrchr( __CLASS__, '\\' ), 1 ) );
			$this->label = __( 'Text', 'hogan-text' );
			$this->template = __DIR__ . '/assets/template.php';

			parent::__construct();
		}

		/**
		 * Field definitions for module.
		 */
		public function get_layout_definition() {

			return [
				'key' => $this->field_key, // hogan_module_text
				'name' => $this->name,
				'label' => $this->label,
				'display' => 'block',
				'sub_fields' => [
					[
						'type' => 'wysiwyg',
						'key' => $this->field_key . '_content', // hogan_module_text_content
						'name' => 'content',
						'delay' => true,
						'tabs' => apply_filters( 'hogan/module/text/content/tabs', 'all' ),
						'media_upload' => apply_filters( 'hogan/module/text/content/allow_media_upload', 1 ),
						'toolbar' => apply_filters( 'hogan/module/text/content/toolbar', 'hogan' ),
					],
				],
			];
		}

		/**
		 * Map fields to object variable.
		 *
		 * @param array $content The content value.
		 */
		public function load_args_from_layout_content( $content ) {

			$this->content = $content['content'];

			parent::load_args_from_layout_content( $content );
		}
	}
}
