<?php
$ssi_layers = array('html', 'body');
$context['page_title'] = 'ElkArte Community Software';
$context['html_headers'] .= '
<link rel="stylesheet" type="text/css" href="home.css" />
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.1/css/font-awesome.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
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
			});
		</script>';

require_once('elkarte/SSI.php');
?>
		<div id="main">
			<div class="box software">
				<div class="what">
					<h3>What is ElkArte?</h3>
					<i class="fa fa-group fa-3x text-green"></i>ElkArte is a powerful community software, which is based on the well known Simple Machines Forum.
					<br /><br /> Many of our contributors are former SMF team members with several years of experience in developing forum software.
				</div>
				<div class="features">
					<h3>ElkArte Features:</h3>
					<i class="fa fa-gear fa-fw fa-3x text-blue"></i>ElkArte is designed to provide you with all the features you need for a full featured community website. Some of our highlights:
					<ul class="features">
						<li>Post by Email</li>
						<li>mentioning users inluding notifications</li>
						<li>Likes</li>
						<li>Drafts</li>
						<li>OpenID 2.0</li>
					</ul>
					<p>and all that cool stuff you may already know from the common social networking platforms. Test ElkArte yourself on the <a href="http://www.elkarte.net/forum/">community forum.</a></p>
				</div>
				<div class="why">
					<h3>Why ElkArte?</h3>
					<i class="fa fa-question-circle fa-fw fa-3x text-red"></i>
					ElkArte is a completely free software, licensed as open source under BSD-3clause. <br><br>Enjoy the benefits of Volunteers from around the world who spend
					time making ElkArte what it is today.
				</div>
				<div id="cont">
					<h3>ElkArte Contributors</h3>
					<p>This is a list of the awesome people who have contributed to ElkArte on Github.</p>
					<p id="contribs"></p>
					<p>Many other people have also contributed by submitting patches, constructive discussions and support.</p>
					<p>Thanks to each and everyone of you!</p>
				</div>
			</div>
			<div class="extended">
			<div class="buttons">
				<span class="button_submit btn">
					<i class="fa fa-download fa-fw"></i><a href="https://github.com/elkarte/Elkarte/releases">Download ElkArte</a>
				</span>
				<span class="button_submit btn">
					<i class="fa fa-github fa-fw"></i> <a href="https://github.com/elkarte/Elkarte/fork">Fork ElkArte</a>
				</span>
			</div>
			<ul id="ext">	
				<li class="column">
					<a href="https://github.com/elkarte/Elkarte"><i class="fa fa-code fa-3x"></i></a>
					<h4>Development</h4>
					<a href="https://github.com/elkarte/Elkarte">Give back and contribute on github.</a>
					<a href="https://github.com/elkarte/Elkarte/issues">Report and resolve bugs</a>
					<a href="http://www.elkarte.net/forum/"><i class="fa fa-comment fa-3x"></i></a>
					<h4>Support</h4>
					<a href="http://www.elkarte.net/forum/">Join our support community.</a>
					<a href="https://github.com/elkarte/Elkarte/wiki">Wiki Documentation</a><
				</li>
				<li class="column">
					<i class="fa fa-github fa-3x"></i>
					<h4>Recent commits</h4>
					<div id="git_commits"></div>
				</li>
			</ul>
			</div>
		</div>
<?php ssi_shutdown(); ?>