<?php
include 'lib/browser_ua.php';

$ua = $_SERVER['HTTP_USER_AGENT'];

$sticky = in_array(browser_ua($ua), ['Firefox','Safari']);

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Jared Smith's Home</title>

	<meta charset="UTF-8" />

	<link id="homepage-style" media="all" type="text/css" href="css/style.css" rel="stylesheet"></link>

	<script id="jquery" src="js/lib/jquery-2.1.4.min.js" type="application/javascript"></script>
	
<?php if( !$sticky ) { ?>	    

	<script id="scrolltofixed" src="js/lib/jquery-scrolltofixed-min.js" type="application/javascript"></script>

	<script>
	$(document).ready( function() {
		$('#nav').scrollToFixed();
	});
	</script>

<?php } ?>

	<script id="app" src="js/app.js" type="text/javascript"></script>

</head>
	
<body>

	<div id="wrap" class="">

		<div id="header" class="">
			<h1 id="title">Jared <span style="font-weight: 400">Smith</span></h1>
			<hr />
			<h2 id="subtitle">Homepage</h2>
		</div>

		<div id="nav" class="<?php if($sticky) echo 'sticky' ?>">
			<div id="nav-wrap" class="container">
				
				<ul>
					<li><a href="#about">About</a>
						<ul class="sub">
							<li><a href="#skills">Skills</a></li>
						</ul>
					</li>
					<li><a href="#projects">Projects</a>
						
						<ul class="sub slideup">
							<li><a href="#completed">Completed</a>
								<ul class="subsub">
									<li><a href="#capstone">Capstone</a></li>
									<li><a href="#comp199">Comp199</a></li>
								</ul>
								
								<li><a href="#in-progress">In-Progress</a>
									<ul class="subsub">
										<li><a href="#web-radio">Web Radio</a>
											<ul class="subsub">
												<li><a href="#web-radio-client">Client</a></li>
												<li><a href="#web-radio-server">Server</a></li>
												<li><a href="#web-radio-view">Listener</a></li>
											</ul>
										</li>
									</ul>
								</li>
							</li>
						</ul>

					</li>


					<li><a href="#contact">Contact</a></li>
				</ul>

			</div>
		</div>

		<div id="main" class="">

			<div id="about" class="container">
				<h2>About Me</h2>

				<p>Welcome to my personal website. I am a Software Engineer with experience in web development. I've completed the Computer Systems Technology program offered by Camosun College in 2015. I started with programming with the CST program and developed my programming skills both in school and in my free time.</p>

				<p>Here on my website, you'll be able to view my contact info and various projects that I've completed or projects that are in-progress. To visit any section, the top navigation bar will direct you to the correct location.</p>
			</div>

			<div id="projects" class="container">
				<h2>Projects</h2>

				<div id="completed">
					<h3>Completed</h3>
					<div id="capstone" class="">
						<h4>Camosun Capstone 2015</h4>
						<h4>Gameboyz Website</h4>

						<p>In 2nd year at Camosun, I participated in the Capstone program. <a href="http://capstone.camosun.bc.ca">Our class website</a> and <a href="http://camosun.ca/news/press-releases/2015/june/capstone.html">press release</a> give some more details about the program.</p>

						<p>Our 2015 Capstone Project is brought to you by <a href="http://youneeq.ca">Youneeq.ca</a> and the Gameboyz team. Through out the 2nd year of the CST program, we built a brand new website for Youneeq to replace their old website, <a href="http://dagameboyz.ca">Gameboyz</a>. Youneeq gave our team full control and creative freedom to design and develop the website at our discretion, which we took full advantage of and are truly grateful for.</p>
					</div>

					<div id="comp199" class="">
						<h4>Camosun Comp199 Project</h4>
						<h4>e-Commerce</h4>
					</div>
				</div>

				<div id="in-progress">
					<h3>In-progress</h3>
					<div id="web-radio" class="">
						<p>we will make all the monies</p>
					</div>
				</div>

			</div>

			<div id="skills" class="container">
				<h2>Skills</h2>
				<p>ma 420 skillz</p>
			</div>

			<div id="contact" class="container">
				<h2>Contact Info</h2>
				<p>jrod69@hotmail.com</p>
			</div>

		</div>

		<div id="footer" class="">
		</div>		

	</div>	

</body>	
</html>
