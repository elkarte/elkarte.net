<?php
$ssi_layers = array('html', 'body');
$context['page_title'] = 'ElkArte Community Software';
$context['html_headers'] = '
	<link rel="stylesheet" href="home.css" />
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" />';

require_once('community/SSI.php');

echo '
			<div id="main">
				<div class="box software">
					<div class="what">
						<h3>What is ElkArte?</h3>
						<i class="fa fa-group fa-3x text-green"></i>ElkArte is a powerful community building software, which is based on the well known Simple Machines Forum.
						<br /><br />Many of our contributors are former SMF team members with several years of experience in developing forum software.
					</div>
					<div class="features">
						<h3>ElkArte Features:</h3>
						<i class="fa fa-gear fa-fw fa-3x text-blue"></i>ElkArte is designed to provide you with all the features you need for a full featured community website. Some of our highlights:
						<ul class="features">
							<li>Posting by Email</li>
							<li>Mentioning users including notifications</li>
							<li>Likes</li>
							<li>Drafts</li>
							<li>OpenID 2.0</li>
							<li>Drag and drop options in the admin interface</li>
							<li>Improved Anti Spam measures</li>
						</ul>
						<p>and all that cool stuff you may already know from the common social networking platforms. Test ElkArte yourself on the <a href="http://www.elkarte.net/community/">community forum.</a></p>
					</div>
					<div class="why">
						<h3>Why ElkArte?</h3>
						<i class="fa fa-question-circle fa-fw fa-3x text-red"></i>
						ElkArte is a completely free software, licensed as open source under BSD-3 clause. <br><br>Enjoy the benefits of Volunteers from around the world who spend
						time making ElkArte what it is today.
					</div>
					<div id="cont">
						<h3>ElkArte Contributors</h3>
						<p>This is a list of the awesome people who have contributed to <a href="https://github.com/elkarte/Elkarte/">ElkArte on <i class="fa fa-github fa-fw"></i>Github.</a></p>
						<p id="contribs"></p>
						<p>Many other people have also contributed by submitting patches, constructive discussions and support.</p>
						<p>Thanks to each and everyone of you!</p>
					</div>
					<div id="trans">
						<h3>ElkArte Language Translators</h3>
						<p>This is a list of all the awesome <a href="https://www.transifex.com/organization/elkarte/dashboard"><i class="fa fa-language"></i> Language Translators</a> who make it possible for people around the world to use ElkArte.</p>
						<p id="translators">', require_once("./tx_contrib.php"), '</p>
					</div>
				</div>
				<div class="extended">
				<div class="buttons">
					<a class="button_submit btn" href="https://github.com/elkarte/Elkarte/releases/tag/v1.0.0-beta.2">
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