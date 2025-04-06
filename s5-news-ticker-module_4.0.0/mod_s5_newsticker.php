<?php
/**
@version 1.0: mod_S5_newsticker
Author: Shape 5 - Professional Template Community
Copyright 2008
Available for download at www.shape5.com
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
require_once dirname(__FILE__).'/helper.php';

$list = modNewsTickerHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));


$pretext		= $params->get( 'pretext', '' );
$tween_time		= $params->get( 'tween_time', '' );
$height		        = $params->get( 'height', '' );
$width   		= $params->get( 'width', '' );

$text1line		= $params->get( 'text1line', '' );
$text2line		= $params->get( 'text2line', '' );
$text3line		= $params->get( 'text3line', '' );
$text4line		= $params->get( 'text4line', '' );
$text5line		= $params->get( 'text5line', '' );
$text6line		= $params->get( 'text6line', '' );
$text7line		= $params->get( 'text7line', '' );
$text8line		= $params->get( 'text8line', '' );
$text9line		= $params->get( 'text9line', '' );
$text10line		= $params->get( 'text10line', '' );
$display_time  	= $params->get( 'display_time', '' );
$s5_jsmoos5		= $params->get( 'xml_s5_jsmoos5', '' );
$s5_mooarrows	= $params->get( 'xml_s5_mooarrows', '' );
$s5_ntmethod	= $params->get( 'xml_s5_ntmethod', '' );
$s5_nt_introtextlength	= $params->get( 'xml_s5_nt_introtextlength', '' );
$s5_ntarrows = $params->get( 'xml_s5_ntarrows', '' );
$s5_ntautorotate = $params->get( 'xml_s5_ntautorotate', '' );
$s5_nt_rotatespeed = $params->get( 'xml_s5_nt_rotatespeed', '' );



$tween_time = $tween_time*1000;
$display_time = $display_time*1000;


$s5_newsticker_tween = $tween_time;
$s5_newsticker_display = $display_time;

$url = JURI::root();

require JModuleHelper::getLayoutPath('mod_s5_newsticker', $params->get('layout', 'default'));

?>
