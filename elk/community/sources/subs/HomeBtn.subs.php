<?php

/**
 * Adds a home button.
 */
function add_home_menu(&$buttons, &$menu_count)
{
	global $txt, $boardurl;

	loadLanguage('HomeBtn');

	$parsed = parse_url($boardurl);

	$buttons = elk_array_insert($buttons, 'home', array(
		'base' => array(
			'title' => $txt['home_btn'],
			'href' => $parsed['scheme'] . '://' . $parsed['host'] . (!empty($parsed['port']) ? ':' . $parsed['port'] : '') . '/',
			'data-icon' => '&#xf05a;',
			'show' => true,
			'action_hook' => true,
		),
	));
}
/**
 * Sets the current action.
 */
function set_home_action(&$current_action)
{
	if (ELK === 'SSI')
		$current_action = 'base';
}
/**
 * Loads the related CSS file. 
 */
function load_home_css() 
{
	loadCSSFile(array('homebutton.css'), array('stale' => '?v=1.0.1'));
}