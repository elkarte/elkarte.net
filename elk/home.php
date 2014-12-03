<?php
$ssi_layers = array('html', 'body');
$context['page_title'] = 'ElkArte, Free and Open Source Community Forum Software';
$context['html_headers'] = '
	<link rel="stylesheet" href="home.css" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" />';

require_once('community/SSI.php');

echo '
			<div id="main">
				<div class="box software">
					<div class="what">
						<h3>What is ElkArte?</h3>
						<i class="fa fa-group fa-3x text-green"></i>ElkArte is a modern, free, powerful community building forum software.  It is completely free and licensed with an open source BSD-3 clause license. 
						<br /><br />Initially based on the well known Simple Machines Forum (SMF), it began by an overall of the code in order to modernise, implement new features and make a forum software be relevant in a time of unprecedented social interaction.  It has grown to become a modern and feature rich forum package to meet the demands of today\'s forum user.
						<br /><br />Enjoy the benefits of Volunteers from around the world who spend time making ElkArte what it is today.
					</div>
					<div class="features">
						<h3>ElkArte Features:</h3>
						<i class="fa fa-gear fa-fw fa-3x text-blue"></i>ElkArte is designed to provide you with <strong>all the features</strong> you need for a full featured community forum and website <strong>right out of the box</strong>. Some of our highlights:
						<ul class="features">
							<li>@Mentioning users including notifications</li>
							<li>Likes for posts and topics</li>
							<li>Drafts, including auto save</li>
							<li>OpenID 2.0</li>
							<li>Two built in modern, responsive themes</li>
							<li>Integrated video embedding for youtube, vimeo and dailymotion</li>
							<li>Drag and drop ordering in the administration interface</li>
							<li>Drag and drop file attachments</li>
							<li>Improved Anti Spam measures</li>
							<li>Improved password hashing using industry standards</li>
							<li>Bad Behaviour built in</li>
							<li>Automatic combining and minifying of JavaScript and CSS</li>
							<li>Posting by Email</li>
							<li>Ajax previews and responses throughout the user interface</li>
							<li>Utilizes jQuery and Font Awesome</li>
							<li>...and much more!</li>
						</ul>
						<p>and all that cool stuff you may already know from the common social networking platforms. Try ElkArte yourself on our <a href="http://www.elkarte.net/community/">community forum.</a></p>
					</div>
					<div class="move">
						<h3>Using another forum software?</h3>
						<i class="fa fa-question-circle fa-fw fa-3x text-red"></i>
						Switching to ElkArte is fast and easy!  
						<br /><br />Simply install ElkArte using our quick Installer, then utilizing the <a href="https://github.com/OpenImporter/openimporter"><strong>Open Importer Engine</strong></a> you can migrate to ElkArte from many other popular forums including SMF, phpBB, MyBB, vBulletin, XenForo and more.
					</div>
					<div class="extend">
						<h3>Even more features?</h3>
						<i class="fa fa-cloud-download fa-fw fa-3x text-blue"></i>
						ElkArte was built to be extensible, so you can add new features or give it your own custom look, with
						ease. With 100\'s of plugin hooks, adding new features can be done without any involved source edits.
						<br /><br />
						See the collections of <a href="http://www.elkarte.net/community/index.php?board=16.0"><strong>Themes</strong></a> and <a href="http://www.elkarte.net/community/index.php?board=12.0"><strong>Addons</strong></a> created by our awesome community.
					</div>
					<div id="cont">
						<h3>ElkArte Contributors</h3>
						<i class="fa fa-cubes fa-fw fa-3x text-gold"></i>
						<p>This is a list of the generous people who have contributed to <a href="https://github.com/elkarte/Elkarte/">ElkArte on <i class="fa fa-github fa-fw"></i>Github.</a></p>
						<p id="contribs"></p>
						<p id="trans">This is a list of the awesome language translators who have contributed to <a https://www.transifex.com/organization/elkarte/dashboard">ElkArte on <i class="fa fa-language fa-fw"></i>Transifex</a>, making it possible for people around the world to use ElkArte
							<p id="translators">', require_once("./tx_contrib.php"), '</p>
						</p>
						<br />
						<p>Many other people have also contributed by submitting patches, constructive discussions and support.</p>
						<p>Thanks to each and everyone of you!</p>
					</div>
				</div>
				<div class="extended">
				<div class="buttons">
					<a class="button_submit btn" href="https://github.com/elkarte/Elkarte/releases/download/v1.0.1/ElkArte_v1-0-1_install.zip">
						<i class="fa fa-download fa-15x"></i> Download ElkArte
					</a>
					<a class="button_submit btn" href="https://github.com/elkarte/Elkarte/fork">
						<i class="fa fa-github fa-15x"></i> Fork ElkArte
					</a>
				</div>
				<ul id="ext">
					<li class="column">
						<a href="https://github.com/elkarte/Elkarte"><i class="fa fa-code fa-3x"></i></a>
						<h4>Development</h4>
						<a href="https://github.com/elkarte/Elkarte">Give back and contribute on GitHub.</a>
						<a href="https://github.com/elkarte/Elkarte/issues">Report and resolve bugs</a>
						<a href="http://www.elkarte.net/community/"><i class="fa fa-comment fa-3x"></i></a>
						<h4>Support</h4>
						<a href="http://www.elkarte.net/community/">Join our support community.</a>
						<a href="https://github.com/elkarte/Elkarte/wiki">Wiki Documentation</a>
					</li>
					<li class="column">
						<i class="fa fa-github fa-3x"></i>
						<h4>Recent commits</h4>
						<div id="git_commits"></div>
					</li>
				</ul>
				</div>
			</div>';

addInlineJavascript('
	$( document ).ready( function () {
		var pulls = "";
		$.ajax({
			url : "https://api.github.com/repos/elkarte/Elkarte/commits?page=1&per_page=10",
			dataType : "jsonp",
				success : function ( returndata ) {
				$.each( returndata.data, function ( i, item ) {
					pulls += \'<span>\' +
					\'<a href="\' + this.html_url + \'">\' + this.commit.message.substr(0,40) + \'...</a>\' +
					\'</span>\';
				});
				$( \'#git_commits\' ).append( pulls );
				}
		});	

		var contribs = "";
		$.ajax({
			url : "https://api.github.com/repos/elkarte/Elkarte/contributors",
			dataType : "jsonp",
				success : function ( returndata ) {
				$.each( returndata.data, function ( i, item ) {
					contribs += \'<span>\' +
					\'<a href="\' + this.html_url + \'"><img style="width: 25px; height: 25px;" src="\' + this.avatar_url + \'" alt="\' + this.login + \'"/></a>\' +
					\'</span>\';
				});
				$( \'#contribs\' ).append( contribs );
				}
		});
	});',true);

ssi_shutdown(); 
