<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?=$pagetitle?> | Asperger's Network</title>
<link rel="StyleSheet" type="text/css" href="/an/css/main.css" media="all">
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36430927-1']);
  _gaq.push(['_setDomainName', 'aspergersnetwork.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body topmargin="0" leftmargin="0">
	<table width="100%" border=0 cellspacing=0 cellpadding=0>
		<tr>
			<td width=150 valign=top>
				<table border=0 align=center width=175 cellpadding=0 cellspacing=0 class=block>
					<tr>
						<td class=b_h>
							<table width="100%" border=0 cellspacing=0 cellpadding=0>
								<tr>
									<td class="b_h b_h_s">
										<a class="b_l_h" href="/"> asperger's network </a>
									</td>
								</tr>
								<tr style="padding-top:0px;">
									<td class="b_s_sh">news</td>
								</tr>
								<tr>
									<td>
										<ul class="b_s_m">
											<li><a href="./index.php">News Center</a></li>
											<li><a href="./n-archive.htm">News Archives</a></li>
											<?php if($_SESSION['username']){ ?>
											<li><a href="./n-submit.htm">Submit News</a></li>
											<?php } ?>

										</td>
									</ul>
								</tr>
								<tr>
									<td class="b_s_sh">forums</td>
								</tr>
								<tr>
									<td>
										<ul class="b_s_m">
											<li><a href="./f.htm">Forums</a></li>
											<?php if($_SESSION['username']){ ?>
											<li><a href="./f-f11.htm">Private Enquiries</a></li>
											<li><a href="./w-a5.htm">Community Rules</a></li>
											<?php } ?>
 										</ul>
									</td>
								</tr>
								<tr>
									<td class="b_s_sh">wiki</td>
								</tr>
								<tr>
									<td>
										<ul class="b_s_m">
										<li><a href="./w.htm">Wiki Index</a></li>
										<li><a href="./w-a4.htm">What is Asperger's?</a></li>
										<li><a href="./w-a1.htm">Forum FAQ</a></li>
										<li><a href="./w-a2.htm">Moderation FAQ</a></li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="b_s_sh">social</td>
								</tr>
								<tr>
									<td>
										<ul class="b_s_m">
										<li><a href="https://www.facebook.com/AspergersNetwork">Facebook</a></li>
										<li><a href="http://twitter.com/aspergersnetwrk">Twitter</a></li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="b_s_sh">users</td>
								</tr>
								<tr>
									<td>
										<ul class="b_s_m">
											<?php if(!$username) { ?>
											<li><a href="/login.php">Log In</a></li>
											<li><a href="/register.php">Register</a></li>
											<?php } else{ ?>
											<li><a href="/account">Edit My Account</a></li>
											<?php } ?>
										</ul>
									</td>
								</tr>
								<?php if($_SESSION['username']) { ?>
								<tr>
									<td class="b_s_sh">user details</td>
								</tr>
								<tr>
									<td>
										<ul class="b_s_m">
											
												User # <?php echo $uid ?><br>
												<?php echo $username ?><br>
												Warning: 0%<br>
												Group ID: <?php echo $gid ?>
										</ul>
									</td>
								</tr>
								<?php } ?>
								<?php if($gid >= 4) { ?>
								<tr>
									<td class="b_s_sh">staff</td>
								</tr>
								<tr>
									<td>
										<ul class="b_s_m">
											<li><a href="./mcp.htm">Mod Control Panel</a></li>
											<li><a href="./mcp-r.htm">Post Reports</a></li>
											<li><a href="./mcp-n.htm">News Submissions</a></li>
										</ul>
									</td>
								</tr>
								<?php } ?>
							</table>
						</td>
					</tr>
					<tr>
						<td class="b_s_sh">date and time</td>
					</tr>
					<tr>
					<td>
						<ul class="b_s_m">
							<script type="text/javascript">
  							var currentDate = new Date()
  							var day = currentDate.getDate()
  							var month = currentDate.getMonth() + 1
  							var year = currentDate.getFullYear()
  							var currentTime = new Date()
  							var hours = currentTime.getHours()
  							var minutes = currentTime.getMinutes()
  							var seconds = currentTime.getSeconds()
  							if (minutes < 10)
  							minutes = "0" + minutes
  							if (seconds < 10)
  							seconds = "0" + seconds
  							var suffix = "AM";
  							if (hours >= 12) {
  							suffix = "PM";
  							hours = hours - 12;
  							}
  							if (hours == 0) {
  							hours = 12;
  							}
  							document.write("<b>" + day + "/" + month + "/" + year + "<br>" + hours + ":" + minutes + ":" + seconds + suffix + "</b>")
  							</script>
						</ul>
					</td>
					</tr>
				</table>
				<br />
				<br />
			</td>
			<td width=6>&nbsp;</td>
			<td valign=top>
	<a name=top></a>
<table border=0 cellpadding=0 cellspacing=0 width="100%" class="block noround" id="f_tools">
	<tr>
		<td align=center class=b_hs width="20%"><a href="/f.htm" class=b_l_h>forums</a></td>
		<td align=center class=b_hs width="20%"><a href="" class=b_l_h>search</a></td>
		<td align=center class=b_hs width="20%"><a href="/account" class=b_l_h>My Account</a></td>
	<?php if(!$_SESSION['username']){ ?>
		<td align=center class=b_hs width="20%"><a href="/register.php" class=b_l_h>register</a></td>
		<td align=center class=b_hs width="20%"><a href="login.php" class=b_l_h style="text-transform:lowercase;">Log in</a></td>
	<?php } else{ ?>
		<td align=center class=b_hs width="20%"><a href="/user/?online" class=b_l_h>notable identities</a></td>
		<td align=center class=b_hs width="20%"><a href="logout.php" class=b_l_h style="text-transform:lowercase;">Log out</a></td>
	<?php } ?> 
		
	</tr>
</table>
<br />
<div id="content">