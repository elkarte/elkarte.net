<?php

/**
 * This file makes a call to transifex API to get the list of
 * language contributors
 *
 * @name      ElkArte Forum
 * @copyright ElkArte Forum contributors
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 */

// Basics
require_once('community/SSI.php');

// Include the file containing the Curl_Fetch_Webdata class.
require_once(SOURCEDIR . '/CurlFetchWebdata.class.php');

// Credentials, a username and password that can access transifx is required
$project_name = 'elkarte';
$username = '';
$password = '';
// But we store the real ones in another file so that they are not accidentaly
// pushed online through git
require_once('secure/tx_credentials.php');

// Some name
$file_name = 'translators.txt';

// Update this once a day
$creation = file_exists(dirname(__FILE__) . '/' . $file_name) ? filemtime(dirname(__FILE__) . '/' . $file_name) - (time() - 60 * 60 * 24) : 0;
if ($creation <= 0)
{
	// Transifex requires that we send in basic authorization with the request
	$fetch_data = new Curl_Fetch_Webdata(array(
		CURLOPT_USERPWD => $username . ':' . $password,
		CURLOPT_HTTPAUTH => 1,
		CURLAUTH_BASIC => 1
	));

	// The API will return the coordinators, translators and reviewers
	$url = 'https://www.transifex.com/api/2/project/' . $project_name . '/languages/';
	$fetch_data->get_url_data($url);

	$result = json_decode($fetch_data->result('body'));
	$translators = array();

	if ($result)
	{
		// Lets just munge them together under a single type
		foreach ($result as $lang)
		{
			$translators = array_merge($translators, $lang->coordinators);
			$translators = array_merge($translators, $lang->translators);
			$translators = array_merge($translators, $lang->reviewers);
		}
	}

	// You only get listed once, not matter how many hats you may wear
	$translators = array_unique(array_filter($translators));

	// Build the output
	$translators_html = '';
	foreach ($translators as $translator)
		$translators_html[] = '<span><a href="https://www.transifex.com/accounts/profile/' . $translator . '">' . $translator . '</a></span>';

	$translators_html = implode(', ', $translators_html);

	// Save this as a file 
	file_put_contents(dirname(__FILE__) . '/' . $file_name, $translators_html);
}
else
	$translators_html = file_get_contents(dirname(__FILE__) . '/' . $file_name);

return $translators_html;