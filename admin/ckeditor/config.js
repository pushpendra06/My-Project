/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
CKEDITOR.editorConfig = function( config ) {
  config.extraPlugins = 'imageuploader';
};
CKEDITOR.editorConfig = function( config ) {
config.extraPlugins = 'fontawesome';
config.contentsCss = 'Plugins/fontawesome/css/font-awesome.css';
config.allowedContent = true; 
};