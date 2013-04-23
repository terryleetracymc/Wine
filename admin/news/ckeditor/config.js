/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.language='zh-cn';
	config.font_names='宋体/宋体;黑体/黑体;仿宋/仿宋_GB2312;楷体/楷体_GB2312;隶书/隶书;幼圆/幼圆;微软雅黑/微软雅黑;'+ config.font_names;
	config.disableNativeSpellChecker=false;
	config.enterMode=3;
	config.toolbar=[
	   ['mydialog','Source','-','NewPage','Preview','-','Templates'],['timestamp'],
       ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
       ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
       ['Bold','Italic','Underline','Strike','-','Subscript','Superscript','Styles','Format','Font','FontSize',],
        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
        ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
        ['Link','Unlink','Anchor'],
       ['AddPic','Table','HorizontalRule','SpecialChar','PageBreak'],
        ['TextColor','BGColor','Image']
    ];
	config.filebrowserImageUploadUrl ='ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
};
