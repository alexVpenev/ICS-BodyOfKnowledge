<!DOCTYPE html>
<html>

<head>
	<title>Fontys Cyber Security</title>
	<?php
	include("../components/navigation-pages.php");
	?>
	<link rel="stylesheet" href="template.css">

</head>

<body>
	<header>
		<h1>Introduction</h1>
	</header>
	<div class="container">
		<p>Throughout my Cyber Security specialization at Fontys ICT, I will develop proficiency in both offensive and defensive techniques for IT systems.
			Over the first 10 weeks of the semester, I will have the opportunity to apply these techniques and demonstrate my
			knowledge in this Body of knowledge by completing assigned tasks. This document aims to systematically capture the topics and subjects that I will cover
			and gain practical experience with.
		</p>
		<div class="image">
			<img src="../assets/introduction-cybersecurity.png" alt="Cyber Security">
		</div>
		<div class="subtheme">Learning Outcomes</div>
		<p>
			The purpose of this document is to provide evidence of my learning across the various themes covered in the semester.
			These themes can be condensed into five core learning outcomes.
			By detailing my learning progress for each theme, I will demonstrate my ability to achieve these outcomes:
		</p>

		<div class="bullet">
			<ul>
				<li><b>Ethical Hacking</b> - I will demonstrate my ability to assess IT system security through the use of penetration testing,
					a vulnerability assessment that covers all layers of an IT environment.</li>

				<li><b>Risk Consulting</b> - I will showcase my ability to analyze security threats and provide expert business analysis using common risk analysis methods.
					I will also advise clients on improving the security of their IT environment.</li>

				<li><b>Security Engineering</b> - I will illustrate my ability to design secure IT infrastructures while considering potential security risks.</li>

				<li><b>Security Analysis</b> - I will exhibit my capability to comprehend and respond to security incidents in an efficient and methodical manner.</li>

				<li><b>Professional Development</b> - I will demonstrate my growth as a professional cyber security specialist
					by completing authentic IT tasks that showcase both the process and the results.</li>
			</ul>
		</div>
		<div class="subtheme">Format & Structure</div>
		<p>
			I have chosen to present this <b>Body of Knowledge</b> in website format, as it allows me greater flexibility in terms of designing and structuring my content,
			incorporating images and examples. One key advantage of this format is the ability to create an interactive involvement for the reader. 
			While it may not be feasible to showcase every vulnerability in this format, I will try to include as many as possible. As an example, consider the following:
		</p>
		<form method='post'>
			<input type="text" placeholder="Type here:" name="btn" id="btn" />
			<input type="submit" id="mes" name="mes"><br /><br />
		</form>


		<?php
		if (isset($_POST['mes'])) {
			$var1 = $_POST['btn']; // create variables of your form elements
			$var2 = $_POST['mes'];
		} else {
			$var1 = 'This displays the value entered in the input field, after pressing the Submit Query button!';
			$var2 = "Default input";
		}



		echo $var1

		?>
		<p>Now try entering the following:                &lt;h3&gt;This is a test!&lt;/h3&gt;</p>
		<p><b>This is a great example of script injection, and shows how I can use examples to display vulnerabilities.</b></p>
	</div>
</body>

</html>