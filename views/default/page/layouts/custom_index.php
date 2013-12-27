<?php
/**
 * Elgg custom index layout
 * 
 * You can edit the layout of this page with your own layout and style. 
 * Whatever you put in this view will appear on the front page of your site.
 * 
 */

$mod_params = array('class' => 'elgg-module-highlight');

?>

<div class="custom-index elgg-main elgg-grid clearfix">
<div class="et-mod-ule-message">
<?php if (elgg_is_logged_in()) {
	$top_box = "<h2>" . elgg_echo("welcome") . " ";
	$top_box .= elgg_get_logged_in_user_entity()->name;
	$top_box .= "</h2>";
	echo elgg_view_module('featured',  '', $top_box.$vars['startpagemember'], $mod_params);
} else {
	echo elgg_view_module('featured',  '', $vars['startpageguest'], $mod_params);
}
?> 

</div>
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm prl">

<?php
// left column

// Top box for login or welcome message
if (!elgg_is_logged_in()) {
	echo elgg_view_module('featured',  '', $vars['login'], $mod_params);
}

// a view for plugins to extend
echo elgg_view("index/lefthandside");
?>

<?php

// groups
if (elgg_is_active_plugin('groups')) {
	echo elgg_view_module('featured',  elgg_echo("custom:groups"), $vars['groups'], $mod_params);
}

// files
if (elgg_is_active_plugin('file')) {
	echo elgg_view_module('featured',  elgg_echo("custom:files"), $vars['files'], $mod_params);
}


?>

		</div>
	</div>
	<div class="elgg-col elgg-col-1of2">
		<div class="elgg-inner pvm">




<?php

// a view for plugins to extend
echo elgg_view("index/righthandside");

// members
echo elgg_view_module('featured',  elgg_echo("custom:members"), $vars['members'], $mod_params);

// files
if (elgg_is_active_plugin('event_manager')) {
	echo elgg_view_module('featured',  elgg_echo("custom:event_manager"), $vars['event_manager'], $mod_params);
}

// blogs
if (elgg_is_active_plugin('blog')) {
	echo elgg_view_module('featured',  elgg_echo("custom:blogs"), $vars['blogs'], $mod_params);
}
// bookmarks
if (elgg_is_active_plugin('bookmarks')) {
	echo elgg_view_module('featured',  elgg_echo("custom:bookmarks"), $vars['bookmarks'], $mod_params);
}
?>
		</div>
	</div>
</div>