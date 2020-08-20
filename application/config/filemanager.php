<?php
/**
 *  RichFilemanager configuration file for Local storage.
 *
 *  @license     MIT License
 *  @author      Pavel Solomienko <https://github.com/servocoder/>
 *  @copyright   Authors
 */

$config['logger']['enabled'] = TRUE;
$config['logger']['file'] = APPPATH.'logs'.DIRECTORY_SEPARATOR.'filemanager';

$config['options']['serverRoot'] = TRUE;
$config['options']['fileRoot'] = FALSE;
$config['options']['fileRootSizeLimit'] = FALSE;
$config['options']['charsLatinOnly'] = FALSE;
// $config['options']['searchMode'] = \RFM\Repository\BaseStorage::SEARCH_MODE_START_WITH;

$config['security']['readOnly'] = FALSE;
$config['security']['normalizeFilename'] = TRUE;

$config['security']['extensions']['policy'] = 'ALLOW_LIST';
$config['security']['extensions']['ignoreCase'] = TRUE;
$config['security']['extensions']['restrictions'] = array(
	'', 'jpg', 'jpe', 'jpeg', 'gif', 'png', 'svg', 'txt', 'pdf', 'odp',
	'ods', 'odt', 'rtf', 'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'csv',
	'ogv', 'avi', 'mkv', 'mp4', 'webm', 'm4v', 'ogg', 'mp3', 'wav', 'zip', 'md'
);

$config['security']['patterns']['policy'] = 'DISALLOW_LIST';
$config['security']['patterns']['ignoreCase'] = TRUE;
$config['security']['patterns']['restrictions'] = array('*/.htaccess', '*/web.config', '*/.CDN_ACCESS_LOGS/*');

$config['security']['symlinks']['allowAll'] = FALSE;
$config['security']['symlinks']['allowPaths'] = array();

$config['upload']['fileSizeLimit'] = FALSE;
$config['upload']['overwrite'] = FALSE;
$config['upload']['paramName'] = 'upload';

$config['images']['main']['autoOrient'] = TRUE;
$config['images']['main']['maxWidth'] = 1280;
$config['images']['main']['maxHeight'] = 1024;

$config['images']['thumbnail']['enabled'] = TRUE;
$config['images']['thumbnail']['cache'] = TRUE;
$config['images']['thumbnail']['dir'] = '_thumbs/';
$config['images']['thumbnail']['crop'] = TRUE;
$config['images']['thumbnail']['maxWidth'] = 64;
$config['images']['thumbnail']['maxHeight'] = 64;

$config['mkdir_mode'] = 0755;