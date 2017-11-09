# WYSIWYG Text Module for [Hogan](https://github.com/dekodeinteraktiv/hogan-core)

## Installation
Install the module using Composer `composer require dekodeinteraktiv/hogan-text` or simply by downloading this repository and placing it in `wp-content/plugins`

## Usage
…

## Available filters
- `hogan/module/text/template` for overriding the default template file.
- `hogan/module/text/wrapper_tag` for outer HTML wrapper tag, default `<section>`
- `hogan/module/text/wrapper_classes` for outer HTML wrapper CSS classes.
- `hogan/module/text/inner_wrapper_classes` for inner HTML `<div>` wrapper classes.

### Content field
- `hogan/module/text/content/tabs` for TinyMCE editor tabs, default all.
- `hogan/module/text/content/allow_media_upload` for allowing TinyMCE editor media upload, default 1.
- `hogan/module/text/content/toolbar` for TinyMCE editor toolbar, default hogan.
