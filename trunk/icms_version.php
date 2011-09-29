<?php
/**
 * $Id: xoops_version.php,v 1.36 2007/08/12 10:39:12 m0nty_ Exp $
 * Module: WF-Downloads
 * Version: v2.0.5a
 * Release Date: 26 july 2004
 * Author: WF-Sections
 * Licence: GNU
 */
if(!defined('XOOPS_ROOT_PATH')) {exit;}

$modversion['name'] = _MI_WFD_NAME;
$modversion['version'] = 3.2;
$modversion['releasedate'] = '2008-10-31';
$modversion['status'] = 'Final';
$modversion['description'] = _MI_WFD_DESC;
$modversion['author'] = 'The SmartFactory [www.smartfactory.ca]';
$modversion['credits'] = 'This module was originally based on Mydownloads, and refactored by Catzwolf and the WF-Projects team.<br />
	Then it became a project of The SmartFactory who continued the excellent work started by the WF-Projects team.';
$modversion['teammembers'] = 'Bender, David, FrankBlack, Xpider, M0nty, Mithrandir, Marcan, felix[fx2024], Sudhaker, Jegelstaff';
$modversion['help'] = 'wfdownloads.html';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = "images/icon_big.png";
$modversion['iconsmall'] = 'images/icon_small.png';
$modversion['iconbig'] = 'images/icon_big.png';
$modversion['dirname'] = 'wfdownloads';

/*
* added by Liquid. Based on code by Marcan
*/
$modversion['author_realname'] = 'The SmartFactory';
$modversion['author_website_url'] = 'http://www.smartfactory.ca';
$modversion['author_website_name'] = 'The SmartFactory';
$modversion['author_email'] = 'info@smartfactory.ca';
$modversion['demo_site_url'] = 'http://smartfactory.ca/modules/wfdownloads/';
$modversion['demo_site_name'] = 'SmartFactory.ca';
$modversion['support_site_url'] = 'http://smartfactory.ca/modules/newbb/viewforum.php?forum=12';
$modversion['support_site_name'] = 'SmartFactory.ca';
$modversion['submit_bug'] = 'http://dev.xoops.org/modules/xfmod/tracker/?group_id=1289&atid=1325';
$modversion['submit_feature'] = 'http://dev.xoops.org/modules/xfmod/tracker/?group_id=1289&atid=1328';

$modversion['warning'] = _MI_WFD_WARNINGTEXT;
$modversion['author_credits'] = _MI_WFD_AUTHOR_CREDITSTEXT;

$modversion['onUpdate'] = 'include/update.php';

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/wfdownloads.sql';

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = 'wfdownloads_broken';
$modversion['tables'][1] = 'wfdownloads_cat';
$modversion['tables'][2] = 'wfdownloads_downloads';
$modversion['tables'][3] = 'wfdownloads_mod';
$modversion['tables'][4] = 'wfdownloads_votedata';
$modversion['tables'][5] = 'wfdownloads_indexpage';
$modversion['tables'][6] = 'wfdownloads_reviews';
$modversion['tables'][7] = 'wfdownloads_mimetypes';
$modversion['tables'][8] = 'wfdownloads_meta';
$modversion['tables'][9] = 'wfdownloads_mirrors';
$modversion['tables'][10] = 'wfdownloads_ip_log';

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Blocks
$modversion['blocks'][1]['file'] = 'wfdownloads_top.php';
$modversion['blocks'][1]['name'] = _MI_WFD_BNAME1;
$modversion['blocks'][1]['description'] = _MI_WFD_BNAME1_DSC;
$modversion['blocks'][1]['show_func'] = 'b_wfdownloads_top_show';
$modversion['blocks'][1]['edit_func'] = 'b_wfdownloads_top_edit';
$modversion['blocks'][1]['options'] = 'published|10|19';
$modversion['blocks'][1]['template'] = 'wfdownloads_block_new.html';

$modversion['blocks'][2]['file'] = 'wfdownloads_top.php';
$modversion['blocks'][2]['name'] = _MI_WFD_BNAME2;
$modversion['blocks'][2]['description'] = _MI_WFD_BNAME2_DSC;
$modversion['blocks'][2]['show_func'] = 'b_wfdownloads_top_show';
$modversion['blocks'][2]['edit_func'] = 'b_wfdownloads_top_edit';
$modversion['blocks'][2]['options'] = 'hits|10|19';
$modversion['blocks'][2]['template'] = 'wfdownloads_block_top.html';

$modversion['blocks'][3]['file'] = 'wfdownloads_top_by_cat.php';
$modversion['blocks'][3]['name'] = _MI_WFD_BNAME3;
$modversion['blocks'][3]['description'] = _MI_WFD_BNAME3_DSC;
$modversion['blocks'][3]['show_func'] = 'b_wfdownloads_top_by_cat_show';
$modversion['blocks'][3]['edit_func'] = 'b_wfdownloads_top_by_cat_edit';
$modversion['blocks'][3]['options'] = 'hits|10|19';
$modversion['blocks'][3]['template'] = 'wfdownloads_block_top_by_cat.html';

// Menu
$modversion['hasMain'] = 1;

global $icmsModuleConfig, $icmsUser, $icmsModule;

$submissions = 0;
if(is_object($icmsModule) && $icmsModule->getVar('dirname') == $modversion['dirname'] && $icmsModule->getVar('isactive')) {
	if(is_object($icmsUser) && ($icmsModuleConfig['submissions'] == 2 || $icmsModuleConfig['submissions'] == 4)) {
		$groups = $icmsUser->getGroups();
		if(array_intersect($icmsModuleConfig['submitarts'], $groups)) {
			$submissions = 1;
		}
	} else {
		if($icmsModuleConfig['anonpost'] == 2 || $icmsModuleConfig['anonpost'] == 4) {
			$submissions = 1;
		}
	}
}

$i = 0;
if($submissions) {
	$i++;
	$modversion['sub'][$i]['name'] = _MI_WFD_SMNAME1;
	$category_suffix = (!empty($_GET['cid'])) ? "?cid=".(int) $_GET['cid'] : "";    //Added by Lankford on 2008/2/20
	$modversion['sub'][$i]['url'] = "submit.php$category_suffix";
}
$i++;
$modversion['sub'][$i]['name'] = _MI_WFD_SMNAME2;
$modversion['sub'][$i]['url'] = 'topten.php?list=hit';
$i++;
$modversion['sub'][$i]['name'] = _MI_WFD_SMNAME3;
$modversion['sub'][$i]['url'] = 'topten.php?list=rate';
unset($i);
// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'wfdownloads_search';
// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'lid';
$modversion['comments']['pageName'] = 'singlefile.php';
$modversion['comments']['extraParams'] = array('cid');
// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'wfdownloads_com_approve';
$modversion['comments']['callback']['update'] = 'wfdownloads_com_update';
// Templates

$i=1;
$modversion['templates'][$i]['file'] = 'wfdownloads_header.html';
$modversion['templates'][$i]['description'] = 'Header info';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_footer.html';
$modversion['templates'][$i]['description'] = 'Footer info';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_brokenfile.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_download.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_index.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_ratefile.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_singlefile.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_topten.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_viewcat.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_newlistindex.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_reviews.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_mirrors.html';
$modversion['templates'][$i]['description'] = '';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_admin_menu.html';
$modversion['templates'][$i]['description'] = '(Admin) Tabs bar for administration pages';
$i++;
$modversion['templates'][$i]['file'] = 'wfdownloads_disclaimer.html';
$modversion['templates'][$i]['description'] = '';

//Module config setting
$modversion['config'][] = array(
	'name' 		=> 'enablerss',
	'title' 		=> '_MI_WFD_ENABLERSS',
	'description' 	=> '_MI_WFD_ENABLERSSDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'popular',
	'title' 		=> '_MI_WFD_POPULAR',
	'description' 	=> '_MI_WFD_POPULARDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000),
	'default' 	=> 100);

$modversion['config'][] = array(
	'name' 		=> 'displayicons',
	'title' 		=> '_MI_WFD_ICONDISPLAY',
	'description' 	=> '_MI_WFD_DISPLAYICONDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('_MI_WFD_DISPLAYICON1' => 1, '_MI_WFD_DISPLAYICON2' => 2, '_MI_WFD_DISPLAYICON3' => 3),
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'perpage',
	'title' 		=> '_MI_WFD_PERPAGE',
	'description' 	=> '_MI_WFD_PERPAGEDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50),
	'default' 	=> 10);

$modversion['config'][] = array(
	'name' 		=> 'anonpost',
	'title' 		=> '_MI_WFD_ANONPOST',
	'description' 	=> '_MI_WFD_ANONPOSTDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('_MI_WFD_ANONPOST1' => 1, '_MI_WFD_ANONPOST2' => 2, '_MI_WFD_ANONPOST3' => 3, '_MI_WFD_ANONPOST4' => 4),
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'rev_anonpost',
	'title' 		=> '_MI_WFD_REVIEWANONPOST',
	'description' 	=> '_MI_WFD_REVIEWANONPOSTDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'autoapprove',
	'title' 		=> '_MI_WFD_AUTOAPPROVE',
	'description' 	=> '_MI_WFD_AUTOAPPROVEDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('_MI_WFD_AUTOAPPROVE1' => 1, '_MI_WFD_AUTOAPPROVE2' => 2, '_MI_WFD_AUTOAPPROVE3' => 3, '_MI_WFD_AUTOAPPROVE4' => 4),
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'rev_approve',
	'title' 		=> '_MI_WFD_REVIEWAPPROVE',
	'description' 	=> '_MI_WFD_REVIEWAPPROVEDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'submissions',
	'title' 		=> '_MI_WFD_ALLOWSUBMISS',
	'description' 	=> '_MI_WFD_ALLOWSUBMISSDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('_MI_WFD_ALLOWSUBMISS1' => 1, '_MI_WFD_ALLOWSUBMISS2' => 2, '_MI_WFD_ALLOWSUBMISS3' => 3, '_MI_WFD_ALLOWSUBMISS4' => 4),
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'submitarts',
	'title' 		=> '_MI_WFD_SUBMITART',
	'description' 	=> '_MI_WFD_SUBMITARTDSC',
	'formtype' 	=> 'group_multi',
	'valuetype' 	=> 'array',
	'default' 	=> '1');

$modversion['config'][] = array(
	'name' 		=> 'useruploads',
	'title' 		=> '_MI_WFD_ALLOWUPLOADS',
	'description' 	=> '_MI_WFD_ALLOWUPLOADSDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'useruploadsgroup',
	'title' 		=> '_MI_WFD_ALLOWUPLOADSGROUP',
	'description' 	=> '_MI_WFD_ALLOWUPLOADSGROUPDSC',
	'formtype' 	=> 'group_multi',
	'valuetype' 	=> 'array',
	'default' 	=> '1');

$modversion['config'][] = array(
	'name' 		=> 'screenshot',
	'title' 		=> '_MI_WFD_USESHOTS',
	'description' 	=> '_MI_WFD_USESHOTSDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'max_screenshot',
	'title' 		=> '_MI_WFD_MAXSHOTS',
	'description' 	=> '_MI_WFD_MAXSHOTSDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('1' => 1, '2' => 2, '3' => 3, '4' => 4),
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'shotwidth',
	'title' 		=> '_MI_WFD_SHOTWIDTH',
	'description' 	=> '_MI_WFD_SHOTWIDTHDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 140);

$modversion['config'][] = array(
	'name' 		=> 'shotheight',
	'title' 		=> '_MI_WFD_SHOTHEIGHT',
	'description' 	=> '_MI_WFD_SHOTHEIGHTDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 79);

$modversion['config'][] = array(
	'name' 		=> 'maximgwidth',
	'title' 		=> '_MI_WFD_IMGWIDTH',
	'description' 	=> '_MI_WFD_IMGWIDTHDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 600);

$modversion['config'][] = array(
	'name' 		=> 'maximgheight',
	'title' 		=> '_MI_WFD_IMGHEIGHT',
	'description' 	=> '_MI_WFD_IMGHEIGHTDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 600);

$modversion['config'][] = array(
	'name' 		=> 'usethumbs',
	'title' 		=> '_MI_WFD_USETHUMBS',
	'description' 	=> '_MI_WFD_USETHUMBSDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'updatethumbs',
	'title' 		=> '_MI_WFD_IMGUPDATE',
	'description' 	=> '_MI_WFD_IMGUPDATEDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'imagequality',
	'title' 		=> '_MI_WFD_QUALITY',
	'description' 	=> '_MI_WFD_QUALITYDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 100);

$modversion['config'][] = array(
	'name' 		=> 'keepaspect',
	'title' 		=> '_MI_WFD_KEEPASPECT',
	'description' 	=> '_MI_WFD_KEEPASPECTDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'screenshots',
	'title' 		=> '_MI_WFD_SCREENSHOTS',
	'description' 	=> '_MI_WFD_SCREENSHOTSDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'text',
	'default' 	=> 'modules/wfdownloads/images/screenshots');

$modversion['config'][] = array(
	'name' 		=> 'catimage',
	'title' 		=> '_MI_WFD_CATEGORYIMG',
	'description' 	=> '_MI_WFD_CATEGORYIMGDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'text',
	'default' 	=> 'modules/wfdownloads/images/category');

$modversion['config'][] = array(
	'name' 		=> 'cat_imgwidth',
	'title' 		=> '_MI_WFD_CAT_IMGWIDTH',
	'description' 	=> '_MI_WFD_CAT_IMGWIDTHDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 50);

$modversion['config'][] = array(
	'name' 		=> 'cat_imgheight',
	'title' 		=> '_MI_WFD_CAT_IMGHEIGHT',
	'description' 	=> '_MI_WFD_CAT_IMGHEIGHTDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 50);

$modversion['config'][] = array(
	'name' 		=> 'mainimagedir',
	'title' 		=> '_MI_WFD_MAINIMGDIR',
	'description' 	=> '_MI_WFD_MAINIMGDIRDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'text',
	'default' 	=> 'modules/wfdownloads/images');

$modversion['config'][] = array(
	'name' 		=> 'enable_mirrors',
	'title' 		=> '_MI_WFD_MIRROR_ENABLE',
	'description' 	=> '_MI_WFD_MIRROR_ENABLEDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'enable_onlinechk',
	'title' 		=> '_MI_WFD_MIRROR_ENABLEONCHK',
	'description' 	=> '_MI_WFD_MIRROR_ENABLEONCHKDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'download_minposts',
	'title' 		=> '_MI_WFD_DOWNLOADMINPOSTS',
	'description' 	=> '_MI_WFD_DOWNLOADMINPOSTSDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'upload_minposts',
	'title' 		=> '_MI_WFD_UPLOADMINPOSTS',
	'description' 	=> '_MI_WFD_UPLOADMINPOSTSDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'maxfilesize',
	'title' 		=> '_MI_WFD_MAXFILESIZE',
	'description' 	=> '_MI_WFD_MAXFILESIZEDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 200000);

$modversion['config'][] = array(
	'name' 		=> 'uploaddir',
	'title' 		=> '_MI_WFD_UPLOADDIR',
	'description' 	=> '_MI_WFD_UPLOADDIRDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'text',
	'default' 	=> XOOPS_ROOT_PATH.'/uploads');

$modversion['config'][] = array(
	'name' 		=> 'check_host',
	'title' 		=> '_MI_WFD_CHECKHOST',
	'description' 	=> '_MI_WFD_CHECKHOSTDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'referers',
	'title' 		=> '_MI_WFD_REFERERS',
	'description' 	=> '_MI_WFD_REFERERSDSC',
	'formtype' 	=> 'textarea',
	'valuetype' 	=> 'array');

$modversion['config'][] = array(
	'name' 		=> 'subcats',
	'title' 		=> '_MI_WFD_SUBCATS',
	'description' 	=> '_MI_WFD_SUBCATSDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'dateformat',
	'title' 		=> '_MI_WFD_DATEFORMAT',
	'description' 	=> '_MI_WFD_DATEFORMATDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'text',
	'default' 	=> 'D, d-M-Y');

$modversion['config'][] = array(
	'name' 		=> 'autosummary',
	'title' 		=> '_MI_WFD_AUTOSUMMARY',
	'description' 	=> '_MI_WFD_AUTOSUMMARYDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'autosumlength',
	'title' 		=> '_MI_WFD_AUTOSUMMARYLENGTH',
	'description' 	=> '_MI_WFD_AUTOSUMMARYLENGTHDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 200);

$modversion['config'][] = array(
	'name' 		=> 'showdisclaimer',
	'title' 		=> '_MI_WFD_SHOWDISCLAIMER',
	'description' 	=> '_MI_WFD_SHOWDISCLAIMERDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'disclaimer',
	'title' 		=> '_MI_WFD_DISCLAIMER',
	'description' 	=> '_MI_WFD_DISCLAIMERDSC',
	'formtype' 	=> 'textarea',
	'valuetype' 	=> 'text',
	'default' 	=> 'We have the right, but not the obligation to monitor and review submissions submitted by users in the forums.<br />
		We shall not be responsible for any of the content of these messages.<br />
		We further reserve the right, to delete, move or edit submissions that the we, in its exclusive discretion,
		deems abusive, defamatory, obscene or in violation of any Copyright or Trademark laws or otherwise objectionable.');

$modversion['config'][] = array(
	'name' 		=> 'showDowndisclaimer',
	'title' 		=> '_MI_WFD_SHOWDOWNDISCL',
	'description' 	=> '_MI_WFD_SHOWDOWNDISCLDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 0);

$modversion['config'][] = array(
	'name' 		=> 'downdisclaimer',
	'title' 		=> '_MI_WFD_DOWNDISCLAIMER',
	'description' 	=> '_MI_WFD_DOWNDISCLAIMERDSC',
	'formtype' 	=> 'textarea',
	'valuetype' 	=> 'text',
	'default' 	=> 'The file downloads on this site are provided as is without warranty either expressed or implied.<br />
		Downloaded files should be checked for possible virus infection using the most up-to-date detection and security packages.<br />
		If you have a question concerning a particular piece of software, feel free to contact the developer.<br />
		We refuse liability for any damage or loss resulting from the use or misuse of any software offered from this site for downloading.
		If you have any doubt at all about the safety and operation of software made available to you on this site, do not download it.<br /><br />
		Contact us if you have questions concerning this disclaimer.');

$modversion['config'][] = array(
	'name' 		=> 'platform',
	'title' 	=> '_MI_WFD_PLATFORM',
	'description' 	=> '_MI_WFD_PLATFORMDSC',
	'formtype' 	=> 'textarea',
	'valuetype' 	=> 'array',
	'default' 	=> 'None|Windows|Unix|Mac|Xoops 1.3|Xoops 2.0|Xoops 2.0.9|Xoops 2.0.10|Xoops 2.0.13|Xoops 2.2|ImpressCMS 1.0|ImpressCMS 1.1|Other');

$modversion['config'][] = array(
	'name' 		=> 'license',
	'title' 		=> '_MI_WFD_LICENSE',
	'description' 	=> '_MI_WFD_LICENSEDSC',
	'formtype' 	=> 'textarea',
	'valuetype' 	=> 'array',
	'default' 	=> 'None|Apache License (v. 1.1)|Apple Public Source License (v. 2.0)|Berkeley Database License
		|BSD License (Original)|Common Public License|FreeBSD Copyright (Modifizierte BSD-Lizenz)
		|GNU Emacs General Public License|GNU Free Documentation License (FDL) (v. 1.2)
		|GNU General Public License (GPL) (v. 1.0)|GNU General Public License (GPL) (v. 2.0)
		|GNU Lesser General Public License (LGPL) (v. 2.1)|GNU Library General Public License (LGPL) (v. 2.0)
		|Microsoft Shared Source License|Mozilla Public License (v. 1.1)|Open Software License (OSL) (v. 1.0)
		|Open Software License (OSL) (v. 1.1)|Open Software License (OSL) (v. 2.0)|Open Public License
		|Open RTLinux Patent License (v. 1.0)|PHP License (v. 3.0)|W3C Software Notice and License
		|Wide Open License (WOL)|X.Net License|X Window System License');

$modversion['config'][] = array(
	'name' 		=> 'limitations',
	'title' 		=> '_MI_WFD_LIMITS',
	'description' 	=> '_MI_WFD_LIMITSDSC',
	'formtype' 	=> 'textarea',
	'valuetype' 	=> 'array',
	'default' 	=> 'None|Trial|14 day limitation|None Save');

$modversion['config'][] = array(
	'name' 		=> 'versiontypes',
	'title' 		=> '_MI_WFD_VERSIONTYPES',
	'description' 	=> '_MI_WFD_VERSIONTYPESDSC',
	'formtype' 	=> 'textarea',
	'valuetype' 	=> 'array',
	'default' 	=> 'None|Alpha|Beta|RC|Final');

$modversion['config'][] = array(
	'name' 		=> 'admin_perpage',
	'title' 		=> '_MI_WFD_ADMINPAGE',
	'description' 	=> '_MI_WFD_ADMINPAGEDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'int',
	'options' 	=> array('5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50),
	'default' 	=> 10);

$qa = ' (A)';
$qd = ' (D)';

$modversion['config'][] = array(
	'name' 		=> 'filexorder',
	'title' 		=> '_MI_WFD_ARTICLESSORT',
	'description' 	=> '_MI_WFD_ARTICLESSORTDSC',
	'formtype' 	=> 'select',
	'valuetype' 	=> 'text',
	'options' 	=> array(
					_MI_WFD_TITLE.$qa => 'title ASC',
					_MI_WFD_TITLE.$qd => 'title DESC',
					_MI_WFD_SUBMITTED2.$qa => 'published ASC' ,
					_MI_WFD_SUBMITTED2.$qd => 'published DESC',
					_MI_WFD_RATING.$qa => 'rating ASC',
					_MI_WFD_RATING.$qd => 'rating DESC',
					_MI_WFD_POPULARITY.$qa => 'hits ASC',
					_MI_WFD_POPULARITY.$qd => 'hits DESC'),
	'default' 	=> 'title ASC');

$modversion['config'][] = array(
	'name' 		=> 'copyright',
	'title' 		=> '_MI_WFD_COPYRIGHT',
	'description' 	=> '_MI_WFD_COPYRIGHTDSC',
	'formtype' 	=> 'yesno',
	'valuetype' 	=> 'int',
	'default' 	=> 1);

$modversion['config'][] = array(
	'name' 		=> 'daysnew',
	'title' 		=> '_MI_WFD_DAYSNEW',
	'description' 	=> '_MI_WFD_DAYSNEWDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 10);

$modversion['config'][] = array(
	'name' 		=> 'daysupdated',
	'title' 		=> '_MI_WFD_DAYSUPDATED',
	'description' 	=> '_MI_WFD_DAYSUPDATEDDSC',
	'formtype' 	=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 	=> 10);

// Notification
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'wfdownloads_notify_iteminfo';

$modversion['notification']['category'][1]['name'] = 'global';
$modversion['notification']['category'][1]['title'] = _MI_WFD_GLOBAL_NOTIFY;
$modversion['notification']['category'][1]['description'] = _MI_WFD_GLOBAL_NOTIFYDSC;
$modversion['notification']['category'][1]['item_name'] = '';
$modversion['notification']['category'][1]['subscribe_from'] = array('index.php', 'viewcat.php', 'singlefile.php');

$modversion['notification']['category'][2]['name'] = 'category';
$modversion['notification']['category'][2]['title'] = _MI_WFD_CATEGORY_NOTIFY;
$modversion['notification']['category'][2]['description'] = _MI_WFD_CATEGORY_NOTIFYDSC;
$modversion['notification']['category'][2]['subscribe_from'] = array('viewcat.php', 'singlefile.php');
$modversion['notification']['category'][2]['item_name'] = 'cid';
$modversion['notification']['category'][2]['allow_bookmark'] = 1;

$modversion['notification']['category'][3]['name'] = 'file';
$modversion['notification']['category'][3]['title'] = _MI_WFD_FILE_NOTIFY;
$modversion['notification']['category'][3]['description'] = _MI_WFD_FILE_NOTIFYDSC;
$modversion['notification']['category'][3]['subscribe_from'] = 'singlefile.php';
$modversion['notification']['category'][3]['item_name'] = 'lid';
$modversion['notification']['category'][3]['allow_bookmark'] = 1;

$modversion['notification']['event'][1]['name'] = 'new_category';
$modversion['notification']['event'][1]['category'] = 'global';
$modversion['notification']['event'][1]['title'] = _MI_WFD_GLOBAL_NEWCATEGORY_NOTIFY;
$modversion['notification']['event'][1]['caption'] = _MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYCAP;
$modversion['notification']['event'][1]['description'] = _MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYDSC;
$modversion['notification']['event'][1]['mail_template'] = 'global_newcategory_notify';
$modversion['notification']['event'][1]['mail_subject'] = _MI_WFD_GLOBAL_NEWCATEGORY_NOTIFYSBJ;

$modversion['notification']['event'][2]['name'] = 'file_modify';
$modversion['notification']['event'][2]['category'] = 'global';
$modversion['notification']['event'][2]['admin_only'] = 1;
$modversion['notification']['event'][2]['title'] = _MI_WFD_GLOBAL_FILEMODIFY_NOTIFY;
$modversion['notification']['event'][2]['caption'] = _MI_WFD_GLOBAL_FILEMODIFY_NOTIFYCAP;
$modversion['notification']['event'][2]['description'] = _MI_WFD_GLOBAL_FILEMODIFY_NOTIFYDSC;
$modversion['notification']['event'][2]['mail_template'] = 'global_filemodify_notify';
$modversion['notification']['event'][2]['mail_subject'] = _MI_WFD_GLOBAL_FILEMODIFY_NOTIFYSBJ;

$modversion['notification']['event'][3]['name'] = 'file_broken';
$modversion['notification']['event'][3]['category'] = 'global';
$modversion['notification']['event'][3]['admin_only'] = 1;
$modversion['notification']['event'][3]['title'] = _MI_WFD_GLOBAL_FILEBROKEN_NOTIFY;
$modversion['notification']['event'][3]['caption'] = _MI_WFD_GLOBAL_FILEBROKEN_NOTIFYCAP;
$modversion['notification']['event'][3]['description'] = _MI_WFD_GLOBAL_FILEBROKEN_NOTIFYDSC;
$modversion['notification']['event'][3]['mail_template'] = 'global_filebroken_notify';
$modversion['notification']['event'][3]['mail_subject'] = _MI_WFD_GLOBAL_FILEBROKEN_NOTIFYSBJ;

$modversion['notification']['event'][4]['name'] = 'file_submit';
$modversion['notification']['event'][4]['category'] = 'global';
$modversion['notification']['event'][4]['admin_only'] = 1;
$modversion['notification']['event'][4]['title'] = _MI_WFD_GLOBAL_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][4]['caption'] = _MI_WFD_GLOBAL_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][4]['description'] = _MI_WFD_GLOBAL_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][4]['mail_template'] = 'global_filesubmit_notify';
$modversion['notification']['event'][4]['mail_subject'] = _MI_WFD_GLOBAL_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][5]['name'] = 'new_file';
$modversion['notification']['event'][5]['category'] = 'global';
$modversion['notification']['event'][5]['title'] = _MI_WFD_GLOBAL_NEWFILE_NOTIFY;
$modversion['notification']['event'][5]['caption'] = _MI_WFD_GLOBAL_NEWFILE_NOTIFYCAP;
$modversion['notification']['event'][5]['description'] = _MI_WFD_GLOBAL_NEWFILE_NOTIFYDSC;
$modversion['notification']['event'][5]['mail_template'] = 'global_newfile_notify';
$modversion['notification']['event'][5]['mail_subject'] = _MI_WFD_GLOBAL_NEWFILE_NOTIFYSBJ;

$modversion['notification']['event'][6]['name'] = 'file_submit';
$modversion['notification']['event'][6]['category'] = 'category';
$modversion['notification']['event'][6]['admin_only'] = 1;
$modversion['notification']['event'][6]['title'] = _MI_WFD_CATEGORY_FILESUBMIT_NOTIFY;
$modversion['notification']['event'][6]['caption'] = _MI_WFD_CATEGORY_FILESUBMIT_NOTIFYCAP;
$modversion['notification']['event'][6]['description'] = _MI_WFD_CATEGORY_FILESUBMIT_NOTIFYDSC;
$modversion['notification']['event'][6]['mail_template'] = 'category_filesubmit_notify';
$modversion['notification']['event'][6]['mail_subject'] = _MI_WFD_CATEGORY_FILESUBMIT_NOTIFYSBJ;

$modversion['notification']['event'][7]['name'] = 'new_file';
$modversion['notification']['event'][7]['category'] = 'category';
$modversion['notification']['event'][7]['title'] = _MI_WFD_CATEGORY_NEWFILE_NOTIFY;
$modversion['notification']['event'][7]['caption'] = _MI_WFD_CATEGORY_NEWFILE_NOTIFYCAP;
$modversion['notification']['event'][7]['description'] = _MI_WFD_CATEGORY_NEWFILE_NOTIFYDSC;
$modversion['notification']['event'][7]['mail_template'] = 'category_newfile_notify';
$modversion['notification']['event'][7]['mail_subject'] = _MI_WFD_CATEGORY_NEWFILE_NOTIFYSBJ;

$modversion['notification']['event'][8]['name'] = 'approve';
$modversion['notification']['event'][8]['category'] = 'file';
$modversion['notification']['event'][8]['invisible'] = 1;
$modversion['notification']['event'][8]['title'] = _MI_WFD_FILE_APPROVE_NOTIFY;
$modversion['notification']['event'][8]['caption'] = _MI_WFD_FILE_APPROVE_NOTIFYCAP;
$modversion['notification']['event'][8]['description'] = _MI_WFD_FILE_APPROVE_NOTIFYDSC;
$modversion['notification']['event'][8]['mail_template'] = 'file_approve_notify';
$modversion['notification']['event'][8]['mail_subject'] = _MI_WFD_FILE_APPROVE_NOTIFYSBJ;

/* Added by Lankford on 2007/3/21 */
$modversion['notification']['event'][9]['name'] = 'filemodified';
$modversion['notification']['event'][9]['category'] = 'file';
$modversion['notification']['event'][9]['title'] = _MI_WFD_FILE_FILEMODIFIED_NOTIFY;
$modversion['notification']['event'][9]['caption'] = _MI_WFD_FILE_FILEMODIFIED_NOTIFYCAP;
$modversion['notification']['event'][9]['description'] = _MI_WFD_FILE_FILEMODIFIED_NOTIFYDSC;
$modversion['notification']['event'][9]['mail_template'] = 'file_filemodified_notify';
$modversion['notification']['event'][9]['mail_subject'] = _MI_WFD_FILE_FILEMODIFIED_NOTIFYSBJ;

$modversion['notification']['event'][10]['name'] = 'filemodified';
$modversion['notification']['event'][10]['category'] = 'category';
$modversion['notification']['event'][10]['title'] = _MI_WFD_CATEGORY_FILEMODIFIED_NOTIFY;
$modversion['notification']['event'][10]['caption'] = _MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYCAP;
$modversion['notification']['event'][10]['description'] = _MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYDSC;
$modversion['notification']['event'][10]['mail_template'] = 'category_filemodified_notify';
$modversion['notification']['event'][10]['mail_subject'] = _MI_WFD_CATEGORY_FILEMODIFIED_NOTIFYSBJ;

$modversion['notification']['event'][11]['name'] = 'filemodified';
$modversion['notification']['event'][11]['category'] = 'global';
$modversion['notification']['event'][11]['title'] = _MI_WFD_GLOBAL_FILEMODIFIED_NOTIFY;
$modversion['notification']['event'][11]['caption'] = _MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYCAP;
$modversion['notification']['event'][11]['description'] = _MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYDSC;
$modversion['notification']['event'][11]['mail_template'] = 'global_filemodified_notify';
$modversion['notification']['event'][11]['mail_subject'] = _MI_WFD_GLOBAL_FILEMODIFIED_NOTIFYSBJ;
/* End add block */