<?php

/**
 * This file creates our home page for the ElkArte.net site
 *
 * @name      ElkArte Forum
 * @copyright ElkArte Forum contributors
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 */

$ssi_layers = array('html', 'body');
$context['page_title'] = 'ElkArte, Free and Open Source Community Forum Software';
$context['html_headers'] = '
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="home.css" />';

require_once('community/SSI.php');

echo '
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<h2>What is ElkArte?<i class="fa fa-group fa-2x text-green"></i></h2>
						<p class="lead">ElkArte is a modern, free, powerful community building forum software.  It is completely free to use and is licensed with an open source BSD-3 clause license.</p>
						<p>Initially based on the well known Simple Machines Forum (SMF), it began with an overhaul of the code in order to modernize, implement new features and make a forum software be relevant in a time of unprecedented social interaction.  It has grown to become a modern, feature rich forum package to meet the demands of today\'s discussion groups.</p>
						<p>Enjoy the benefits of Volunteers from around the world who spend time making ElkArte what it is today.</p>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-body">
						<h2>ElkArte Features:<i class="fa fa-gear fa-fw fa-2x text-blue"></i></h2>
						<p class="lead">ElkArte is designed to provide you with all the features you need for a full featured community forum and website right out of the box.</p><p>With an extensive default feature set, there is no need to make a lot of additions to get your site up and running.  Just some of our highlights include:</p>
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
				</div>

				<div class="panel panel-default">
					<div class="panel-body">
						<h2>Using another forum software?<i class="fa fa-question-circle fa-fw fa-2x text-red"></i></h2>
						<p class="lead">Switching to ElkArte is fast and easy!</p>
						<p>Simply install ElkArte using our quick Installer, then utilizing the <a href="//github.com/OpenImporter/openimporter"><strong>Open Importer Engine</strong></a> you can migrate to ElkArte from many other popular forums including SMF, phpBB, MyBB, vBulletin, XenForo, IPB and more.</p>
						<div class="text-center">
							<div class="btn-group">
								<a class="btn btn-warning btn-block" href="//github.com/OpenImporter/openimporter"><i class="fa fa-cubes fa-15x"></i> Open Importer</a>
							</div>
						</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-body">
						<h2>Even more features?<i class="fa fa-cloud-download fa-fw fa-2x text-blue"></i></h2>
						<p class="lead">ElkArte was built to be extensible</p>
						<p>You can add new features or give it your own custom look, with ease. With 100\'s of plugin hooks, adding new features or enhancing what is there, can be done without any involved cumbersome source edits.</p>
						<p>See the collections of <strong>Themes</strong> and <strong>Addons</strong> created by our awesome community.</p>
						<div class="text-center">
							<div class="btn-group">
								<a class="btn btn-info btn-block" href="http://themes.elkarte.net"><i class="fa fa-paint-brush fa-15x"></i> Themes</a>
							</div>
							<div class="btn-group">
								<a class="btn btn-info btn-block" href="http://addons.elkarte.net"><i class="fa fa-gears fa-15x"></i> Addons</a>
							</div>
						</div>
					</div>
				</div>

				<div class="panel well">
					<div class="panel-body">
						<h2>ElkArte Contributors!<i class="fa fa-cubes fa-fw fa-2x text-gold"></i></h2>
						<p>This is a list of generous people who have contributed to the <a href="https://github.com/elkarte/Elkarte/">ElkArte project hosted on <i class="fa fa-github fa-fw"></i>Github.</a></p>
						<p id="contribs"></p>
						<p id="trans">This is a list of the awesome language translators who have contributed to <a https://www.transifex.com/organization/elkarte/dashboard">ElkArte on <i class="fa fa-language fa-fw"></i>Transifex</a>, making it possible for people around the world to use ElkArte in their native langauges.
							<p id="translators">', require_once("./tx_contrib.php"), '</p>
						</p>
						<p>Many other people have also contributed by submitting patches, constructive discussions and support.</p>
						<p>Thanks to each and everyone of you!</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-1"></div>
						<div class="col-md-10">
							<a class="btn btn-success btn-lg btn-block" href="http://github.com/elkarte/Elkarte/releases/download/v1.0.3/ElkArte_v1-0-3_install.zip">
								<i class="fa fa-download fa-15x pull-left"></i>Download ElkArte
							</a>
							<a class="btn btn-info btn-lg btn-block" href="http://themes.elkarte.net">
								<i class="fa fa-paint-brush fa-15x pull-left"></i>Themes for ElkArte
							</a>
							<a class="btn btn-info btn-lg btn-block" href="http://addons.elkarte.net">
								<i class="fa fa-gears fa-15x pull-left"></i>Addons for ElkArte
							</a>
							<a class="btn btn-info btn-lg btn-block" href="https://github.com/elkarte/Elkarte/fork">
								<i class="fa fa-github fa-15x pull-left"></i>Fork ElkArte
							</a>
							<a href="https://plus.google.com/105539428142197633453" rel="publisher"></a>
						</div>
					<div class="col-md-1"></div>
				</div>
				<br />
				<div class="panel well hidden-xs">
					<ul id="ext">
						<li class="column">
							<h4><a href="//github.com/elkarte/Elkarte"><i class="fa fa-code fa-15x"></i> Development</a></h4>
							<ul class="ext">
								<li><a href="//github.com/elkarte/Elkarte"><i class="fa fa-check-square-o"></i> Give back and contribute on GitHub.</a></li>
								<li><a href="//github.com/elkarte/Elkarte/issues"><i class="fa fa-check-square-o"></i> Report and resolve bugs</a></li>
							</ul>
							<h4 class="toppad"><a href="http://www.elkarte.net/community/"><i class="fa fa-comment fa-15x"></i> Support</a></h4>
							<ul class="ext">
								<li><a href="http://www.elkarte.net/community/"><i class="fa fa-check-square-o"></i> Join our support community.</a></li>
								<li><a href="//github.com/elkarte/Elkarte/wiki"><i class="fa fa-check-square-o"></i> Wiki Documentation</a></li>
							</ul>
						</li>
						<li class="column toppad">
							<h4><i class="fa fa-github fa-15x"></i> Recent commits</h4>
							<div id="git_commits"></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>';

addInlineJavascript('
	$( document ).ready( function () {
		var pulls = "";
		$.ajax({
			url : "//api.github.com/repos/elkarte/Elkarte/commits?page=1&per_page=10",
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
			url : "//api.github.com/repos/elkarte/Elkarte/contributors?per_page=60",
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
	});', true);

ssi_shutdown();