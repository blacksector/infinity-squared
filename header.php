<!DOCTYPE html>
<?php
// Start YOURLS engine
require_once( dirname(__FILE__).'/includes/load-yourls.php' );

// Ask for Infinity Squared settings
include( dirname(__FILE__).'/public/config.php' );
class ISQ { public static $general = array(), $links = array(), $social = array(), $recaptcha = array(); }

// Load translations
function isq_load_textdomain() {
    yourls_load_custom_textdomain( 'isq_translation', $site . '/public/languages' );
    $site = YOURLS_SITE;
}
isq_load_textdomain();

// Load reCAPTCHA
require_once( dirname(__FILE__).'/public/recaptchalib.php');
?>

<html>
<head>
<title><?php echo ISQ::$general['name']; ?></title> <!-- Site title defined in theme settings -->
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="shortcut icon" href="<?php echo YOURLS_SITE; ?>/images/favicon.gif" /> <!-- Default favicon -->

<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold,bolditalic"><!-- Ubuntu from Google Web Fonts -->
<link rel="stylesheet" href="<?php echo YOURLS_SITE; ?>/public/style.css" /><!-- Theme CSS -->

<link rel="stylesheet" href="<?php echo YOURLS_SITE; ?>/public/bootstrap.min.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<?php if (!empty(ISQ::$social['plus'])) { ?>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: "en-GB"}
</script>
<?php } ?>
<script type="text/javascript"><!-- reCAPTCHA -->
var RecaptchaOptions = {
	theme : 'white'
};
</script>
<?php if (!empty(ISQ::$general['clipboard'])) { ?>
<script type="text/javascript" src="js/jquery.zclip.min.js"></script>
<script>
$(document).ready(function(){
    $('button#long-copy').zclip({
        path:'js/ZeroClipboard.swf',
        copy:function(){return $('input#long-copy').val();},
        afterCopy: function() {
        	$("button#long-copy").html('<?php yourls_e( 'Copied!', 'isq_translation'); ?>');
        }
    });
    $('button#short-copy').zclip({
        path:'js/ZeroClipboard.swf',
        copy:function(){return $('input#short-copy').val();},
        afterCopy: function() {
        	$("button#short-copy").html('<?php yourls_e( 'Copied!', 'isq_translation'); ?>');
        }
    });
    $('button#stats-copy').zclip({
        path:'js/ZeroClipboard.swf',
        copy:function(){return $('input#stats-copy').val();},
        afterCopy: function() {
        	$("button#stats-copy").html('<?php yourls_e( 'Copied!', 'isq_translation'); ?>');
        }
    });
});
</script>
<?php } ?>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo YOURLS_SITE; ?>"><?php echo ISQ::$general['name']; ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	  
	<?php  
	if (ISQ::$links['url_1']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_1']; ?>"><?php echo ISQ::$links['name_1']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_2']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_2']; ?>"><?php echo ISQ::$links['name_2']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_3']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_3']; ?>"><?php echo ISQ::$links['name_3']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_4']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_4']; ?>"><?php echo ISQ::$links['name_4']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_5']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_5']; ?>"><?php echo ISQ::$links['name_5']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_6']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_6']; ?>"><?php echo ISQ::$links['name_6']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_7']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_7']; ?>"><?php echo ISQ::$links['name_7']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_8']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_8']; ?>"><?php echo ISQ::$links['name_8']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_9']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_9']; ?>"><?php echo ISQ::$links['name_9']; ?></a></li>
	<?php } ?>
	<?php  
	if (ISQ::$links['url_10']) {
	?>
	<li><a href="<?php echo ISQ::$links['url_10']; ?>"><?php echo ISQ::$links['name_10']; ?></a></li>
	<?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="paragraph">
