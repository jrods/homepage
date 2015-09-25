<?php

require('lib/Toml.php');

?>

<!DOCTYPE html>
<html lang="en-US">

<head>
	<title>Jared Smith's Home</title>

	<meta charset="UTF-8" />

	<link id="homepage-style" media="all" type="text/css" href="css/style.css" rel="stylesheet"></link>
	<link id="fonts" media="all" type="text/css" href="css/fonts.css" rel="stylesheet"></link>

	<script id="jquery" src="js/lib/jquery-2.1.4.min.js" type="application/javascript" async ></script>
	<script id="myscroll" src="js/lib/sticky-element-0.5.js" type="application/javascript" async ></script>

	<script id="app" src="js/app.js" type="text/javascript"></script>

</head>

<body>

	<div id="wrap" class="">

		<header>
			<h1 id="title">Jared <span style="color: #fff;font-weight: 400;">Smith</span></h1>
			<hr />
			<h2 id="subtitle">Homepage</h2>
		</header>

		<div id="nav">
			<div id="nav-wrap" class="container">
				<ul>
					<li><a href="#about">About</a>
						<ul class="sub">
							<li><a href="#contact">Contact</a></li>
							<li><a href="#education">Education</a></li>
							<li><a href="#skills">Skills</a></li>
							<li><a href="#languages">Programming</a></li>
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
									<li><a href="#homepage">Homepage</a></li>	
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

					<li style="color: #e4a424;">My homepage is still a work-in-progress, more info to come.
						<ul class="sub">
							<li><a href="https://github.com/jrods/homepage/issues">Github Issue Tracker</a></li>
						</ul>

					</li>
				</ul>

			</div>
		</div>

		<article id="main" class="">

			<section id="about" class="container">
				<h2>About Me</h2>

				<p id="intro">Welcome to my personal website. I am a Software Engineer with experience in web development, application development and other areas in software engineering. In June 2015, I completed the Computer Systems Technology program offered by Camosun College. I started programming with the CST program and developed my skills both in school and in my free time.</p>

				<p id="site-intro">Here on my website, you'll be able to view my contact info, skills, abilities, experiences and various projects that I've completed or projects that are in-progress. To visit any section, the top navigation bar will direct you to the correct location. <br />
				<br />
				If there are any problems with my homepage, please don't hesitate to tell me. You may submit an issue if you have a github account at the <a href="https://github.com/jrods/homepage/issues">homepage's issue tracker</a>. Or you may email me the details, <a href="#contact">email info is located here</a>. I will also accept any feedback on my website through the contact channels I've listed before or in the contact section.</p>

				<p>
				My interests include technology, computers, programming, music, video games, graphic design and automotive. I do have more interests, but the ones I listed are what I mostly spend my free time on. Since the CST program, my interest in programming has increased significantly. It's an activity I really enjoy doing. Programming gives me a sense to express creativity, thought process and control.<br />
				<br />
				My current strengths and knowledge with programming are Web Development, Graphic Design, Databases, Object-Oriented and Imparitive Programming. There are lots of areas that I wish to explore like Operating Systems, Language Design, Functional Programming, etc but I do find those areas quite intimidating at my current level. As I spend more time reading, experimenting and exploring new topics I have little or no knowledge in, it becomes a matter of applying myself to spend the time in learning those topics. I would love to learn everything I can, but there's so much knowledge out there, it can be difficult to focus on one topic for awhile. It's not a matter of getting bored with one topic and moving on, but since there's so much to learn, it can be overwhelming. In the long run, the knowledge I gain will be beneficial in my future endeavors.</p>

			</section>

			<section id="contact" class="container">
				<h2>Contact Info</h2>

				<p>Feel free to contact me at any of the links listed below. I'll try to get back to you right away.<br />
				<br />
				<b>E-mail</b> : jared smith jrod <span style="font-size:12px;">(replace spaces with dots, then add <b>@gmail.com</b> to the end)</span><br />
				<br />
				<span class="genericon genericon-github"></span>: <a href="https://github.com/jrods">@jrods</a>
				<span class="genericon genericon-twitter"></span>: <a href="https://twitter.com/j_rod_s">@j_rod_s</a>
				<span class="genericon genericon-linkedin-alt" style="color:#1784BB"></span>: <a href="https://ca.linkedin.com/pub/jared-smith/b2/36b/82">Jared Smith</a></p>
			</section>

			<section id="education" class="container">
				<h2>Education</h2>

				<h3>Camosun College: 2013 - 2015</h3>
				<h4>Computer Systems Techology</h4>

				<p><span style="font-size:20px;">Courses Completed:</span></p>
				<div id="courses">
				<?php
				$courses = Toml::parseFile('share/courses.toml');

				foreach($courses['courses'] as $key => $value) {
					echo "<p>$key: $value</p>";
				}
				?>
				</div>

			</section>

			<section id="skills" class="container">
				<h2>Skills</h2>

				<div class="horizontal">

					<div class="row">
						<div class="head">Programming</div>
						<p><b>CST Program</b>: This is where I started programming; I had no experience before I enrolled into the CST program. The first language I started using was <b>Python</b>. In second term of the program, I was introduced to Object-Oriented programming with <b>Java</b>. Along with Java, I was also taught <b>SQL, php, Visual Basic</b> and <b>C#</b>.<br />
						<br />
						In the third term, it was more in depth compared to the last term, but in my application networking course, I was taught <b>Erlang</b>. I found it quite interesting and enjoyible to use, once I got the hang of the different syntax and sementics of the language. During development of the Comp199 project, I started to learn <b>Javascript</b>. At this point, all the languages taught in the program were part of the course(s). Javascript would be the first language I would have to teach myself. Luckily, Javascript shares many common traits with the languages I have already experienced, making it straight forward for me to grasp.<br />
						<br />
						<b>Free Time</b>: Once I finished school, I wanted to take some time to learn a new programming language. For a while, I had my eyes on <b>Rust</b>. Some of the features that grabbed my attention were: memory safety, concurrency, strongly typed and supported by Mozilla. Once I started programming with Rust, the first roadblock I had was with the type system. It was mostly due to strings and being able to know what type of string you can use at certain points. I sort of understand it but I still need more time with the language. The second roadblock was the project structure. After looking around the web for some examples, I was able to figure out a simple project structure similar to what I have done in the past. I still find Rust an interesting language, but it will take some time to get in the mindset to coding in Rust. It's very different to what I'm use to, so for now I'll put it on the to-do list.<br />
						<br />
						Aftering exploring Rust, I decided to try another language that has less of a learning curve. I starting to look into <b>golang</b>, another fairly new language. Golang has some overlap in principles compared to Rust that caught my attention. Concurrency is one of golang's major features, along with being strongly typed (not as strong as Rust's type system). Golang has a similar ecosystem compared to Rust's cargo for third party libraries. I won't go into detail about my opinion of each ecosystems, mainly due to not having enough experience to share my critisms or praises. So far, I have enjoyed my time with golang. It's very similar to languages I already know, allowing me to easily pick it up. I will definitely spend more time with golang.</p>
					</div>

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
						<a href="#capstone">Capstone 2015</a>: Throughout our Capstone project, we created douments outlining every corner of the project. Our documentation covered Project Purpose, Business Requirements, Project Scope, Project Management Plan, System Architecture, Use Cases, Structured Walkthroughs with Peers outside the team, User Manual, Weekly Status Reports and a Final Report upon project completion.<br />
						<br />
						<a href="#comp199">Comp199</a>: This project didn't have as much documentation compared to the Capstone project. The documentation that we did included Weekly Status Reports, User Manual, Experiences, Improvements and a Final Report upon course completion.</p>
					</div>

				</div>
			</section>

			<section id="languages" class="container">
				<h2>Programming Languages</h2>
				
				<div class="">

					<ul>
						<li class="head">PHP</li>						
					</ul>

					<ul>
						<li class="head">Java</li>
					</ul>

					<ul>
						<li class="head">Javascript</li>
					</ul>

					<ul>
						<li class="head">Python</li>
					</ul>

					<ul>
						<li class="head">SQL</li>
					</ul>

					<ul>
						<li class="head">Git</li>
						<li>(Doesn't really belong here, but it's important to show that I have VCS experience)</li>
					</ul>					

					<ul>
						<li class="head">C#.NET</li>
					</ul>

					<ul>
						<li class="head">Erlang</li>
					</ul>

					<ul>
						<li class="head">C lang</li>
					</ul>

					<ul>
						<li class="head">VB.NET</li>
					</ul>

				</div>

			</section>

			<section id="software" class="container">
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
			</section>

			<section id="projects" class="container">
				<h2>Projects</h2>

				<div id="completed">
					<h3>Completed</h3>
					<div id="capstone" class="">
						<h4>Camosun Capstone 2015</h4>
						<h4>Gameboyz Website</h4>

						<p class="project-links"><a href="http://dagameboyz.com">Website Home</a><span style="padding-left: 18px;"></span><a href="https://github.com/Gameboyz/theme.git">Source Code</a></p>

						<p>In 2nd year at Camosun, I participated in the Capstone program. <a href="http://capstone.camosun.bc.ca">Our class website</a> and <a href="http://camosun.ca/news/press-releases/2015/june/capstone.html">press release</a> gives some more details about the program.</p>

						<p><img id="gb-front" class="float-right img-shadow-right" src="img/gameboyz-front.png" />Our 2015 Capstone Project is brought to you by <a href="http://youneeq.ca">Youneeq.ca</a> and the Gameboyz team. Throughout the 2nd year of the CST program, we built a brand new website for Youneeq to replace their old website, <a href="http://dagameboyz.ca">Gameboyz</a>. Youneeq gave our team full control and creative freedom to design and develop the website at our discretion, which we took full advantage of and are truly grateful for.<br />
						<br />
						So at this point, I'll stop copying and pasting from our documentation and do some real talk. I'll be going into details of what I did for the project, more so in the actual development of the project rather than the management part in this section.</p>

						<p><img id="gb-old" class="float-right img-shadow-right" src="img/old-gameboyz.png" />I'll begin with the design of the website, it will give me a chance to show some pretty pictures. The old website hasn't seen a face lift since it debuted in the 90's. It certainly shows it's from the era of having blue links everywhere. I even had to use the wayback machine to get a screenshot. No matter though, the sponsor and our team wanted to replace the old site entirely, with a new design and a new CMS. <br />
						<br />
						For the design, the sponsor wanted something in the vain of IGN and Gamespot. However, I don't much care for the design of those websites, they are too cluttered and clumpsy in many areas. I find Polygon.com a very well designed website in terms of usability and focus in content delivery. The sponsor agreed once I showed polygon to him and gave reasons why it would be a better idea to take inspiration from there. Once we agreed, the next step was to find a Wordpress theme we could use.</p>

						<p>The theme had to be free (as in freedom and free beer). It also needed a mobile view to help save work on that end of development. I eventually came across <a href="http://themezee.com/themes/momentous/">Momunetous Lite</a>. It's a theme utilizing the GPL and free of cost. The theme also had some good design cues that would set it apart from our inspiration. A mobile view was also included with the theme by using CSS media query. We found a great starting point and were ready to modify it to our liking.</p>

						<p><img id="gb-front-design" class="float-left img-shadow-left" src="img/front_page.png" />With the front page, there are two main components in the gallery. The first component is a section that displays the four newest articles posted on the site. Most publication websites have some sort of feature section near or at the top of the page. At first, I tried having white text with a strong drop shadow and the article's featured image as the background in the tile. The text was hard to read in front of vivid coloured images and was too hard to read. After figuring out how to make the text more prominent, I made a filter element to overlay on top of the background. This solution helped make the text more readable. It was also cross-browser compatitable by using a linear-gradient for the overlay.<br />
						<br />
						The second part of the gallery is the body section contains the rest of the articles available on the website. There's not much difference compared to the feature section, apart from being more narrow and using a fixed height for every tile. I wasn't able to add everything I wanted in the tile, such as displaying the number of comments the article had or display the article's type/category.<br />
						<br />
						The front page, while functional, doesn't have much variety. Additional work needs to be done before the website hits production. The sponsor agreed and said that it would be ideal to create an appealing website upon launch.</p>

						<p><img id="gb-news-design" class="float-left img-shadow-left" src="img/news_article.png" /><img id="gb-review-design" class="float-left img-shadow-left" src="img/review_article.png" />Moving on to articles, Wordpress doesn't have built-in functionality to use different layouts for different type of articles. After some research, our team figured we could implement it ourselves within the theme code base. The Wordpress documentation and google search were very helpful in finding the resources we needed. I found out that you can create additional panels in the Post interface in Wordpress (we had no WP experience before). It was straight forward in creating a custom panel that can embed additional HTML forms upon submitting an article.<br />
						<br />
						The next problem though was to find a way to store the additional info for each article that was submitted. Wordpress has a table in the database where we can store the info. I created a function to gather all the info from our custom panel on the post submit. I then encoded that data into JSON (sanitized of course) and stored it in the table as a key value pair.<br />
						<br />
						To retrieve that data when needed, I had to create an additional function that allowed that info to be accessed by Wordpress when the article is called by the system. It worked out perfectly. Any additions we wanted to make, just had to be adjusted in the panel form markup to be able to use the new feature(s).</p>

						<p>Overall, the project was considered a success. Our sponsor liked what we delivered and our team enjoyed working on it. After the symposium, the sponsor was interested in continuing with the project. Our team arranged a meeting to discuss the future of Gameboyz. We compiled a list of improvements from our experience with the project, along with items/issues we didn't get too during the capstone period. Once our team found out that further development on Gameboyz would be volunteer work; we lost interest in not continuing with the project. It would have been nice to recieve a monetary reward for the work we've done and future work on the project, but I digress. Instead, I'll use all the expierence I gained from the project to use for future endeavours.</p>

						<p>If you have any specific questions about the Gameboyz project, feel free to <a href="#contact">contact me</a> and I'll do my best to answer back.</p>

					</div>

					<div id="comp199" class="">
						<h4>Camosun Comp199 Project</h4>
						<h4>e-Commerce</h4>
						<p>Coming soon.</p>
					</div>
				</div>

				<div id="in-progress">
					<h3>In-progress</h3>
					<div id="homepage" class="">
						<h4>This Homepage</h4>
						<p>Coming soon.</p>
					</div>

					<div id="web-radio" class="">
						<h4>Web Radio</h4>
						<p>Coming soon (we will make all the monies).</p>
					</div>
				</div>

				<div id="experiments">
					<h3>Experiments/Practice</h3>
					<div id="3dgameengine" class="">
						<h4>3D Game Engine</h4>
						<h4>OpenGL/Java</h4>
						<p>Coming soon (will crush ue4).</p>
					</div>
				</div>

			</section>

		</article>

		<footer>
			<div class="container">
				<p>&copy; 2015 by Jared R. Smith</p>
			</div>
		</footer>

	</div>

</body>
</html>
