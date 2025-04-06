<?php
/**
@version 1.0: mod_S5_newsticker
Author: Shape 5 - Professional Template Community
Copyright 2008
Available for download at www.shape5.com
*/

// no direct access
defined('_JEXEC') or die;



if ($s5_ntmethod == "article") {

$s5ntm_url = JURI::root().'modules/mod_s5_newsticker/';
$doc =& JFactory::getDocument();


$doc->addCustomTag('<script src="'.$s5ntm_url.'js/jquery.min.1.8.3.js" type="text/javascript"></script>');
$doc->addCustomTag('<script src="'.$s5ntm_url.'js/responsiveslides.min.js" type="text/javascript"></script>');
$doc->addCustomTag('<script src="'.$s5ntm_url.'js/jquery-noconflict.js" type="text/javascript"></script>');
$doc->addCustomTag('<link rel="stylesheet" href="'.$s5ntm_url.'css/style.css" type="text/css" />');
if ($s5_ntarrows == "yes") {  
	$doc->addCustomTag('<style>#s5_newsticker_slides.rslides {margin-left: 53px;}</style>');
}
}
?>
<?php if ($s5_ntmethod == "article") {  ?>

   <script type="text/javascript">
    // You can also use "$(window).load(function() {"
    jQuery(function () {
      jQuery("#s5_newsticker_slides").responsiveSlides({
        speed: 500,
		timeout: <?php echo $s5_nt_rotatespeed; ?>, 
		<?php if ($s5_ntarrows == "yes") { ?>
		nav: true,
		<?php } ?>
		<?php if ($s5_ntautorotate == "yes") { ?>
		auto: true,
		<?php } else { ?>
		auto: false,
		<?php } ?>
        pager: true,
      });
    });
  </script>
  

<div id="s5textrotatecls_otr" style="position:relative;display:block;width:<?php echo $width ?>;height:<?php echo $height ?>; overflow:hidden;">

	<ul class="s5_newsticker_mc_<?php echo $moduleclass_sfx; ?>" id="s5_newsticker_slides">
	<?php foreach ($list as $item) :  ?>
		<li>
			<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?>: <?php echo mb_strimwidth($item->introtext, 0, $s5_nt_introtextlength, "..."); ?></a>
		</li>
	<?php endforeach; ?>
	</ul>
	<div style="clear:both;"></div>

</div>
<?php } else { ?>





<?php if ($pretext != "") { ?>
<div style="float:left;margin-right:10px;">
<?php echo $pretext ?>
</div>
<?php } ?>


<?php
$br = strtolower($_SERVER['HTTP_USER_AGENT']);
$browser = "other";

if(strrpos($br,"msie 6") > 1) {
$iss_ie6 = "yes";} 
else {$iss_ie6 = "no";}

if(strrpos($br,"msie 7") > 1) {
$iss_ie7 = "yes";} 
else {$iss_ie7 = "no";}

?>
	
	

<?php

echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_newsticker_tween = ".$s5_newsticker_tween.";</script>
	<script language=\"javascript\" type=\"text/javascript\" >var s5_newsticker_display = ".$s5_newsticker_display.";</script>";
	?>

<?php if ($iss_ie7 != "yes") { ?>		
<?php if($s5_jsmoos5 == "moo") { ?>
<script type="text/javascript">//<![CDATA[
document.write('<link href="<?php echo $url ?>/modules/mod_s5_newsticker/s5_newsticker/style.css" rel="stylesheet" type="text/css" media="screen" />');
//]]></script>

		<script type="text/javascript" src="<?php echo $url ?>modules/mod_s5_newsticker/s5_newsticker/mtshcore.js"></script>
		<script type="text/javascript" src="<?php echo $url ?>modules/mod_s5_newsticker/s5_newsticker/icarousel.js"></script>


		<script type="text/javascript">
	
window.addEvent("domready", function() {
	//new Accordion($$(".accordion_toggler"), $$(".accordion_content"));

	dp.SyntaxHighlighter.HighlightAll("usage");

	new iCarousel("s5textrotatecls_otr", {
		idPrevious: "s5textrotate_previous",  
        idNext: "s5textrotate_next", 
		idToggle: "example_1_toggle",
		item: {klass: "s5textrotatecls"},
		animation: {
			type: "fade",
			duration: 500,
			interval: 1000,
			transition: Fx.Transitions.linear,
			rotate: {
				type: "auto",
					
			}
		},
			


	});
});
	
		</script>


<?php } ?>
<?php } ?>

<?php if ($iss_ie7 != "yes") { ?>	
<?php if($s5_jsmoos5 == "moo") { ?>
<?php if($s5_mooarrows == "mooon") { ?>
<div id="s5_textrotatebuttons">
<a href="#" id="s5textrotate_previous"></a> 
<a href="#" id="s5textrotate_next"></a>	
</div>
<?php } ?>	
<?php } ?>	
<?php } ?>
		
<div style="">
<div id="s5textrotatecls_otr" style="position:relative;display:block;width:<?php echo $width ?>;height:<?php echo $height ?>; overflow:hidden;">
<?php if ($text1line != "") { ?>
<div id="text1" class="s5textrotatecls" style="padding:0px;<?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?> <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text1line != "") { ?>
<?php echo $text1line ?>
<?php } ?>
</div>
<?php } ?>

<?php if ($text2line != "") { ?>
<div id="text2" class="s5textrotatecls" style="padding:0px;<?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	 <?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?> <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text2line != "") { ?>
<?php echo $text2line ?>
<?php } ?>
</div>
<?php } ?>

<?php if ($text3line != "") { ?>
<div id="text3" class="s5textrotatecls" style="padding:0px; <?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?><?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text3line != "") { ?>
<?php echo $text3line ?>
<?php } ?>
</div>
<?php } ?>

<?php if ($text4line != "") { ?>
<div id="text4" class="s5textrotatecls" style="padding:0px;<?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?> <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text4line != "") { ?>
<?php echo $text4line ?>
<?php } ?>
</div>
<?php } ?>



<?php if ($text5line != "") { ?>
<div id="text5" class="s5textrotatecls" style="padding:0px; <?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?><?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden; ">
<?php if ($text5line != "") { ?>
<?php echo $text5line ?>
<?php } ?>
</div>
<?php } ?>



<?php if ($text6line!= "") { ?>
<div id="text6" class="s5textrotatecls" style="padding:0px;<?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?><?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text6line != "") { ?>
<?php echo $text6line ?>
<?php } ?>
</div>
<?php } ?>



<?php if ($text7line != "") { ?>
<div id="text7" class="s5textrotatecls" style="padding:0px; <?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?><?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text7line != "") { ?>
<?php echo $text7line ?>
<?php } ?>
</div>
<?php } ?>



<?php if ($text8line != "") { ?>
<div id="text8" class="s5textrotatecls" style="padding:0px; <?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?> <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text8line != "") { ?>
<?php echo $text8line ?>
<?php } ?>
</div>
<?php } ?>


<?php if ($text9line != "") { ?>
<div id="text9" class="s5textrotatecls" style="padding:0px; <?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?><?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text9line != "") { ?>
<?php echo $text9line ?>
<?php } ?>
</div>
<?php } ?>


<?php if ($text10line != "") { ?>
<div id="text10" class="s5textrotatecls" style="padding:0px; <?php if($s5_jsmoos5 == "moo") { ?>display:block;left:0;position:absolute;<?php } ?>	<?php if($s5_jsmoos5 == "s5") { ?>display:none;  opacity:.0;<?php } ?> <?php if ($iss_ie6 == "yes") { ?>filter: alpha(opacity=0); -moz-opacity: 0;<?php } ?> width:<?php echo $width ?>; overflow:hidden;">
<?php if ($text10line != "") { ?>
<?php echo $text10line ?>
<?php } ?>
</div>
<?php } ?>
</div>
</div>


<?php if($s5_jsmoos5 == "s5") { ?>
<script language="javascript" type="text/javascript" src="modules/mod_s5_newsticker/s5_newsticker/fader.js"></script>
<script language="javascript" type="text/javascript" src="modules/mod_s5_newsticker/s5_newsticker/timing.js"></script>
<?php } ?>


<?php if ($iss_ie7 == "yes" && $s5_jsmoos5 == "moo") { ?>	
<script language="javascript" type="text/javascript" src="modules/mod_s5_newsticker/s5_newsticker/fader.js"></script>
<script language="javascript" type="text/javascript" src="modules/mod_s5_newsticker/s5_newsticker/timing.js"></script>
<?php } ?>


<?php } ?>