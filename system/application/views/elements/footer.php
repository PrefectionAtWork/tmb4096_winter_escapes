	<div id="terms">
		<p><?php echo $terms . " " . $workorder."_".$author_initials."_".$publish_date; ?></p>	
	</div>
</div> <!-- #wrapper -->

	<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/main_r_v2.inc"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/footer_ext.inc"; ?>
	<?php include $_SERVER['DOCUMENT_ROOT'] . "/include/right_v2.inc"; ?>
	
<!-- jquery library include in header for 'tooltipster' to work. -->
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/init.js'; ?>"></script>
<!-- include jquery for UI affects -->
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/responsiveslides.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/hoverIntent.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url(), 'assets/'.$assets_prefix.'js/superfish.js'; ?>"></script>
	
</body>
</html>