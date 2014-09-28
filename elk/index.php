<?php
$ssi_layers = array('html', 'body');
$site_url = 'http://www.elkarte.net';

require_once('community/SSI.php');

$txt['what_elk'] = 'What is ElkArte?';
$txt['what_elk_answer'] = 'ElkArte is a powerful community software, which is based on the well known Simple Machines Forum.
<br /><br /> Many of our contributors are former SMF team members with several years of experience in developing forum software.';
$txt['elk_features'] = 'ElkArte Features:';
$txt['elk_features_answer'] = 'ElkArte is designed to provide you with all the features you need for a full featured community website. Some of our highlights:
<ul class="features">
	<li>Post by Email</li>
	<li>mentioning users inluding notifications</li>
	<li>Likes</li>
	<li>Drafts</li>
	<li>OpenID 2.0</li>
</ul>
<p>and all that cool stuff you may already know from the common social networking platforms. Test ElkArte yourself on the <a href="' . $site_url . '/community/">community forum.</a></p>';
$txt['elk_why'] = 'Why ElkArte?';
$txt['elk_why_answer'] = 'ElkArte is a completely free software, licensed as open source under BSD-3clause.
<br><br>Enjoy the benefits of Volunteers from around the world who spend time making ElkArte what it is today.';
$txt['elk_contrib'] = 'ElkArte Contributors';
$txt['elk_contrib_answer1'] = 'This is a list of the awesome people who have contributed to ElkArte on Github.';
$txt['elk_contrib_answer2'] = 'Many other people have also contributed by submitting patches, constructive discussions and support.';
$txt['elk_contrib_answer3'] = 'Thanks to each and everyone of you!';

$txt['elk_translators'] = 'ElkArte Language Translators';
$txt['elk_translators_answer1'] = 'This is a list of the awesome people who have contributed to ElkArte on Github.';

$txt['download_btn'] = 'Download ElkArte';
$txt['fork_btn'] = 'Fork ElkArte';
$txt['site_development'] = 'Development';
$txt['site_support'] = 'Support';
$txt['site_join'] = 'Join our support community.';
$txt['site_documentation'] = 'Wiki Documentation';
$txt['site_give_back'] = 'Give back and contribute on github.';
$txt['report_bugs'] = 'Report and resolve bugs';
$txt['recent_commits'] = 'Recent commits';

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

?>
		<div id="main">
			<div class="box software">
				<div class="what">
					<h3><?php echo $txt['what_elk']; ?></h3>
					<i class="fa fa-group fa-3x text-green"></i>
					<?php echo $txt['what_elk_answer']; ?>
				</div>
				<div class="features">
					<h3><?php echo $txt['elk_features']; ?></h3>
					<i class="fa fa-gear fa-fw fa-3x text-blue"></i>
					<?php echo $txt['elk_features_answer']; ?>
				</div>
				<div class="why">
					<h3><?php echo $txt['elk_why']; ?></h3>
					<i class="fa fa-question-circle fa-fw fa-3x text-red"></i>
					<?php echo $txt['elk_why_answer']; ?>
				</div>
				<div id="cont">
					<h3><?php echo $txt['elk_contrib']; ?></h3>
					<p><?php echo $txt['elk_contrib_answer1']; ?></p>
					<p id="contribs"></p>
					<p><?php echo $txt['elk_contrib_answer2']; ?></p>
					<p><?php echo $txt['elk_contrib_answer3']; ?></p>
				</div>
				<div id="trans">
					<h3><?php echo $txt['elk_translators']; ?></h3>
					<p><?php echo $txt['elk_translators_answer1']; ?></p>
					<p id="translators"><?php require_once("./tx_contrib.php"); ?></p>
				</div>
			</div>
			<div class="extended">
			<div class="buttons">
				<span class="button_submit btn">
					<i class="fa fa-download fa-fw"></i>
					<a class="button_submit btn" href="https://github.com/elkarte/Elkarte/releases/download/v1.0.0/ElkArte_v1_0_0_install.zip"><?php echo $txt['download_btn']; ?></a>
				</span>
				<span class="button_submit btn">
					<i class="fa fa-github fa-fw"></i>
					<a href="https://github.com/elkarte/Elkarte/fork"><?php echo $txt['fork_btn']; ?></a>
				</span>
			</div>
			<ul id="ext">
				<li class="column">
					<a href="https://github.com/elkarte/Elkarte"><i class="fa fa-code fa-3x"></i></a>
					<h4><?php echo $txt['site_development']; ?></h4>
					<a href="https://github.com/elkarte/Elkarte"><?php echo $txt['site_give_back']; ?></a>
					<a href="https://github.com/elkarte/Elkarte/issues"><?php echo $txt['report_bugs']; ?></a>
					<a href="<?php echo $site_url;?>/community/"><i class="fa fa-comment fa-3x"></i></a>
					<h4><?php echo $txt['site_support']; ?></h4>
					<a href="<?php echo $site_url;?>/community/"><?php echo $txt['site_join']; ?></a>
					<a href="https://github.com/elkarte/Elkarte/wiki"><?php echo $txt['site_documentation']; ?></a>
				</li>
				<li class="column">
					<i class="fa fa-github fa-3x"></i>
					<h4><?php echo $txt['recent_commits']; ?></h4>
					<div id="git_commits"></div>
				</li>
			</ul>
			</div>
		</div>
<?php ssi_shutdown(); ?>
