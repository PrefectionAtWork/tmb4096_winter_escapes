<?php header('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title><?php echo $promotion_name; ?> - Presented By Travel Impressions</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<meta name="robots" content="all">
<meta name="description" content="Travel Impressions - <?php echo $headline . ' - ' . $subheadline; ?>">

<meta tour="og:title" content="<?php echo $headline; ?>">
<meta tour="og:type" content="website">
<meta tour="og:description" content="<?php echo $subheadline; ?>">
<meta tour="og:url" content="http://www.travimp.com/promo/<?php echo $workorder_full; ?>/">
<meta tour="og:image" content="http://www.travimp.com/images/enews/<?php echo $workorder_full; ?>_142x142.jpg">
<meta tour="og:site_name" content="Travel Impressions">

<!--[if IE 6]>
<script language="javascript" type="text/javascript" src="/js/iebgfix.js"></script>
<script language="javascript" type="text/javascript" src="/js/sfhover.js"></script>
 <![endif]-->

<link rel="stylesheet" href="/css/default.css" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/responsiveslides.css'; ?>" type="text/css">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/megafish.css'; ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/tooltipster.css'; ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/style.css'; ?>" type="text/css">

<!--[if lte IE 9]>
    <link rel="stylesheet" href="<?php echo base_url(), 'assets/'.$assets_prefix.'css/old-ie.css'; ?>" type="text/css">
<![endif]-->

<!--[if lte IE 7]>
<style>
	#main #regions #nav ul li {
		display: inline;
		margin: 0;
	}
</style>
<![endif]-->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
	// <IE9 console log bug fix
	// http://stackoverflow.com/questions/10961430/ie9-not-running-javascript-onload
	if(!window.console){
		console={};
		console.log = function(){};
	}
</script>
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/jquery.tooltipster.min.js'; ?>"></script>	

</head>
<body>

<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/left_v2.inc"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/header_v2_blank.inc"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/nav_v2.inc"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/main_l_v2.inc"; ?>

<div id="wrapper">