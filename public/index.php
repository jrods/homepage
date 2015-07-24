<?php

include 'lib/browser_ua.php';

/* old solution
if( isset($_SERVER['HTTP_USER_AGENT']) ) {
	$ua = $_SERVER['HTTP_USER_AGENT'];
}

//$ua = false;

if ( $ua ) {
	$sticky = in_array(browser_ua($ua), ['Firefox','Safari']);
} else {
	$sticky = false;
}
*/

if ( isset($_SERVER['HTTP_USER_AGENT']) ) 
	$browser = getBrowser();

if ( $browser['name'] == 'Apple Safari' && in_array($browser['version'], ['6.1','7.0','8.0','8.0.7']))
	$sticky = true;
elseif ( $browser['name'] == 'Mozilla Firefox' && floatval($browser['version']) > 33.0 )
	$sticky = true;
elseif ( $browser['name'] == 'Midori' && in_array($browser['version'], ['0.4','0.4.1','0.5']) )
	$sticky = true;
else
	$sticky = false;

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Jared Smith's Home</title>

	<meta charset="UTF-8" />

	<link id="homepage-style" media="all" type="text/css" href="css/style.css" rel="stylesheet"></link>
	<link id="fonts" media="all" type="text/css" href="css/fonts.css" rel="stylesheet"></link>

	<script async id="jquery" src="js/lib/jquery-2.1.4.min.js" type="application/javascript"></script>
	
<?php if( !$sticky ) { ?>	    

	<script async id="scrolltofixed" src="js/lib/jquery-scrolltofixed-min.js" type="application/javascript"></script>

	<script>
	$(document).ready( function() {
		$('#nav').scrollToFixed();
	});
	</script>

<?php } ?>

	<script async id="app" src="js/app.js" type="text/javascript"></script>

</head>
	
<body>

	<div id="wrap" class="">

		<div id="header" class="">
			<h1 id="title">Jared <span style="color: #fff;font-weight: 400;">Smith</span></h1>
			<hr />
			<h2 id="subtitle">Homepage</h2>
		</div>

		<div id="nav" class="<?php if($sticky) echo 'sticky' ?>">
			<div id="nav-wrap" class="container">				
				<ul>
					<li><a href="#about">About</a>
						<ul class="sub">
							<li><a href="#contact">Contact</a></li>
							<li><a href="#skills">Skills</a></li>
							<li><a href="#software">Software</a></li>
						</ul>
					</li>
					
					<li><a href="#projects">Projects</a>						
						<ul class="sub slideup">
							<li><a href="#completed">Completed</a>
								<ul class="subsub">
									<li><a href="#capstone">Capstone</a></li>
									<li><a href="#comp199">Comp199</a></li>
								</ul>
							</li>
								
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

							<li><a href="#experiments">Experiments</a>
								<ul class="subsub">
									<li><a href="#3dgameengine">3D Game Engine</a></li>
								</ul>
							</li>													
						</ul>
					</li>

					<li style="color: #e4a424;">My homepage is still a work-in-progress, more info to come.</li>
				</ul>

			</div>
		</div>

		<div id="main" class="">

			<div id="about" class="container">
				<h2>About Me</h2>

				<p id="intro">Welcome to my personal website. I am a Software Engineer with experience in web development, application development and other areas in software engineering. In June 2015, I completed the Computer Systems Technology program offered by Camosun College. I started programming with the CST program and developed my skills both in school and in my free time.</p>

				<p id="site-intro">Here on my website, you'll be able to view my contact info, skills, abilities, experiences and various projects that I've completed or projects that are in-progress. To visit any section, the top navigation bar will direct you to the correct location. <br />
				<br />
				If there is any problem with my homepage, please don't hesitate to tell me. You may submit an issue if you have a github account: <a href="https://github.com/jrods/homepage/issues">homepage's issue tracker.</a> Or you may email me the details, <a href="#contact">email info located here.</a> I will also accept any feedback on my website through the contact channels I've listed before or in the contact section.</p>

				<p id="summary">To give a summary about myself, I'm a reserved, quite individual. My interests include technology, computers, programming, music, video games, graphic design and automotive. I do have more interests, but the ones I listed are what I mostly spend my free time on. Since the CST program, my interest in programming has increased. It's an activity I really enjoy doing. Programming gives me a sense to express creativity, thought process and control.<br />
				<br />
				My current strengths and knowledge with programming are Web Development, Graphic Design, Databases, Object-Oriented and Imparitive Programming. There are lots of areas that I wish to explore like Operating Systems, language design, functional programming, etc but I do find those areas quite intimidating at my current level. As I spend more time reading, experimenting and exploring the topics I have no knowledge in, it becomes a matter of applying myself to spend the time in learning those topics. It can be a struggle for me because I'm so interested in many other fields that it can be hard to focus on just one topic for awhile. Being able to stick with it till I have a good understanding would benifit me in the long run. It's not a matter of getting bored with one topic and moving one but that there's so much to learn, it's overwhelming.</p>

			</div>

			<div id="contact" class="container">
				<h2>Contact Info</h2>
				
				<p>Feel free to contact me at any of the links listed below. I'll try to get back to you right away.<br />
				<br />											
				<b>E-mail</b> : jared smith jrod <span style="font-size:12px;">(replace spaces with dots, then add <b>@gmail.com</b> to the end)</span><br />
				<br />					
				<span class="genericon genericon-github"></span>: <a href="https://github.com/jrods">@jrods</a>
				<span class="genericon genericon-twitter"></span>: <a href="https://twitter.com/j_rod_s">@j_rod_s</a>
				<span class="genericon genericon-linkedin-alt" style="color:#1784BB"></span>: <a href="https://ca.linkedin.com/pub/jared-smith/b2/36b/82">Jared Smith</a></p>
			</div>

			<div id="skills" class="container">
				<h2>Skills</h2>
				
				<div class="horizontal">					
					<div class="row">
						<div class="head">Project Management</div>
						<p><a href="#capstone">Capstone 2015</a>: I was responsible for directing the Gameboyz project by determining what features were in-scope and out-of-scope, timeframe of feature implementation, scheduling weekly meetings and managing the Version Control System.<br />
						<br />
						<a href="#comp199">Comp199</a>: This was the first project I managed. It wasn't meant for any use in production. Looking back at the project, there were many aspects I could have done better, but you have to start somewhere. There are more details in the completed project section. I was responsible for website features and team management.</p>
					</div>					

					<div class="row">
						<div class="head">Team Management</div>
						<p><a href="#capstone">Capstone 2015</a>: Along with managing the project, I also managed the team members. I would divide work up based on an individual feature and assigned that feature to a team member. I also made sure communication was happening within the team and would keep everyone up-to-date.<br />
						<br />
						<a href="#comp199">Comp199</a>: With this project, it became a very extreme programming approach to development. There wasn't much structure for assigning work to other team members, as we just worked on whatever part of the project that needed to be done. It was a new experience for me when it came to managing a project, compared to previous school projects I had done (this project was before Capstone).</p>
					</div>					

					<div class="row">
						<div class="head">Documentation</div>
						<p><b>CST Program</b>: In the second year of the CST Program, documentation is a major part of the curriculum. Comp 230 is the Design and System Analysis course that teaches techniquies in system analysis, design and specification of a project. Engl 170 is a course that teaches about technical writting. Engl 273 and Comp 297, 298, 299 are all in conjunction with the Capstone project.<br />
						<br />
						<a href="#capstone">Capstone 2015</a>: Throughout our Capstone project, we have created douments outlining every corner of the project. Our documentation covers Project Purpose, Business Requirements, Project Scope, Project Management Plan, System Architecture, Use Cases, Structured Walkthroughs with Peers outside the team, User Manual, Weekly Status Reports and a Final Report on project completion. There are more areas our documentation covers on the project that I haven't listed.<br />
						<br />						
						<a href="#comp199">Comp199</a>: This project didn't have as much documentation compared to the Capstone project. The documentation that we did includes Weekly Status Reports, User Manual, Experiences, Improvements and a Final Report on course completion.</p>
					</div>

					<div class="row">
						<div class="head">Programming</div>
						<p>CST Program:<br />
						<br />
						Free Time:</p>
					</div>
				</div>
			</div>

			<div id="software" class="container">
				<h2>Software/Frameworks/Tools</h2>
				
				<div class="vertical five-col">
					<ul>
						<li class="head">IDEs/Text Editors</li>
						<li>Emacs</li>
						<li>Sublime Text</li>
						<li>Intellij IDEA</li>
						<li>Eclipse</li>
						<li>Netbeans</li>
					</ul>
					
					<ul>
						<li class="head">Operating Systems</li>
						<li>GNU/Linux</li>
						<li>Apple Mac OS X</li>
						<li>Microsoft Windows</li>
						<li>FreeBSD</li>
					</ul>

					<ul>
						<li class="head">Content Management System</li>
						<li>Wordpress</li>
					</ul>

					<ul>
						<li class="head">Databases</li>
						<li>Oracle</li>
						<li>MySQL</li>
						<li>PostgreSQL</li>
						<li>MS SQL</li>
					</ul>

					<ul>
						<li class="head">Project Management</li>	
						<li>Microsoft Project</li>
						<li>Microsoft Visio</li>
						<li>OpenProj</li>
					</ul>

					<ul>
						<li class="head">Misc</li>	
						<li>Git/GitHub</li>
						<li>Nginx</li>
						<li>Apache Web</li>
					</ul>					
				</div>
			</div>

			<div id="projects" class="container">
				<h2>Projects</h2>

				<div id="completed">
					<h3>Completed</h3>
					<div id="capstone" class="">						
						<h4>Camosun Capstone 2015</h4>
						<h4>Gameboyz Website</h4>

						<p class="project-links"><a href="http://dagameboyz.com">Website Home</a><span style="padding-left: 18px;"></span><a href="https://github.com/Gameboyz/theme.git">Source Code</a></p>

						<p>In 2nd year at Camosun, I participated in the Capstone program. <a href="http://capstone.camosun.bc.ca">Our class website</a> and <a href="http://camosun.ca/news/press-releases/2015/june/capstone.html">press release</a> give some more details about the program.</p>

						<p><img id="gb-front" src="img/gameboyz-front.png" />Our 2015 Capstone Project is brought to you by <a href="http://youneeq.ca">Youneeq.ca</a> and the Gameboyz team. Throughout the 2nd year of the CST program, we built a brand new website for Youneeq to replace their old website, <a href="http://dagameboyz.ca">Gameboyz</a>. Youneeq gave our team full control and creative freedom to design and develop the website at our discretion, which we took full advantage of and are truly grateful for.</p>

					</div>

					<div id="comp199" class="">
						<h4>Camosun Comp199 Project</h4>
						<h4>e-Commerce</h4>
						<p></p>
					</div>
				</div>

				<div id="in-progress">
					<h3>In-progress</h3>
					<div id="web-radio" class="">
						<h4>Web Radio</h4>
						<p>we will make all the monies</p>
					</div>
				</div>

				<div id="experiments">
					<h3>Experiments/Practice</h3>
					<div id="3dgameengine" class="">
						<h4>3D Game Engine</h4>
						<h4>OpenGL/Java</h4>
						<p>will crush ue4</p>
					</div>
				</div>

			</div>

		</div>

		<div id="footer" class="">
		</div>		

	</div>	

</body>	
</html>
