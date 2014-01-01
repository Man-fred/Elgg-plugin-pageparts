<?php
/**
 * Edit form body for external pages
 * 
 * @uses $vars['type']
 * 
 */
//grab the required data
$pageparts = unserialize(datalist_get('pageparts'));
$pages1 = elgg_get_entities_from_access_id(array(
	'type' => 'object',
	'subtype' => 'page',
	'access_id' => 2));
$pages = elgg_get_entities(array(
	'type' => 'object',
	'subtype' => 'page',
		));
$pageselect = array('' => elgg_echo('pageparts:blank'));
foreach ($pages as $page) {
	$pageselect[$page->guid] = $page->title . ' (' . get_readable_access_level($page->access_id) . ')';
}
?>
<div>
	<fieldset class="elgg-fieldset">
		<legend><?php echo elgg_echo('pageparts:legend:pages') ?></legend>
		<div><?php echo elgg_echo('pageparts:description:pages') ?><br />
			<ul class="elgg-list elgg-list-simple">
				<li class="custom_menuitem">
					<label for="about"><?php echo elgg_echo("pageparts:about"); ?></label>
					<?php
					echo elgg_view('input/select', array(
						'name' => 'about',
						'value' => $pageparts['about'],
						'options_values' => $pageselect));
					?>
				</li>	
				<li class="custom_menuitem">
					<label for="terms"><?php echo elgg_echo("pageparts:terms"); ?></label>
					<?php
					echo elgg_view('input/select', array(
						'name' => 'terms',
						'value' => $pageparts['terms'],
						'options_values' => $pageselect));
					?>
				</li>
				<li class="custom_menuitem">
					<label for="terms"><?php echo elgg_echo("pageparts:privacy"); ?></label>
					<?php
					echo elgg_view('input/select', array(
						'name' => 'privacy',
						'value' => $pageparts['privacy'],
						'options_values' => $pageselect));
					?>
				</li>
				<li class="custom_menuitem">
					<label for="contact"><?php echo elgg_echo("pageparts:terms"); ?></label>
					<?php
					echo elgg_view('input/select', array(
						'name' => 'contact',
						'value' => $pageparts['contact'],
						'options_values' => $pageselect));
					?>
				</li>
			</ul>
		</div>
	</fieldset>
	<fieldset class="elgg-fieldset">
		<legend><?php echo elgg_echo('pageparts:legend:welcome') ?></legend>
		<div><?php echo elgg_echo('pageparts:description:welcome_guests') ?><br />
			<label for="welcome_guests"><?php echo elgg_echo("pageparts:welcome_guests"); ?></label>
			<?php
			echo elgg_view('input/select', array(
				'name' => 'welcome_guests',
				'value' => $pageparts['welcome_guests'],
				'options_values' => $pageselect));
			?>
		</div>
		<div><?php echo elgg_echo('pageparts:description:welcome_members') ?><br />
			<label for="welcome_members"><?php echo elgg_echo("pageparts:welcome_members"); ?></label>
			<?php
			echo elgg_view('input/select', array(
				'name' => 'welcome_members',
				'value' => $pageparts['welcome_members'],
				'options_values' => $pageselect));
			?>
		</div>
	</fieldset>
</div>
<div class="elgg-foot">
	<?php echo elgg_view('input/submit'); ?>
</div>