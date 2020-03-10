<?php
/*
 *	Twitter tweets.
 */
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
?>
<div id="block-block-5">
	<a id="twitter-intent-follow-link" href="https://twitter.com/intent/user?screen_name=DavidHDewhurst" target="_blank">Follow @DavidHDewhurst</a>
	<div class="content">
		<script language="javascript" src="/<?php echo $theme_path; ?>/scripts/minitwitter/jquery.minitwitter.js" type="text/javascript"></script>
		<link href="/<?php echo $theme_path; ?>/scripts/minitwitter/jquery.minitwitter.css" media="all" rel="stylesheet" type="text/css"/>
		<div class="tweets">
			<div class="content_tweets"></div>
		</div>
		<script type="text/javascript">
			(function($){
				$(document).ready(function() {
					$(".content_tweets").miniTwitter({username: 'DavidHDewhurst', limit: 3});
				});
			})(jQuery);
		</script>
	</div>
</div>