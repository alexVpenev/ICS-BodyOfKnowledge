<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="../components/navigation-pages.css">
</head>
<body>
<div class="navbar">
  <button class="navbar-toggle" onclick="toggleNav()">☰</button>
  <nav class="navbar-links">
    <ul>
      <li><a href="../../index.php">Home</a></li>
      <li><a href="../pages/introduction.php">Introduction</a></li>
      <li><a href="../pages/versionHistory.php">Version Control</a></li>
      <li><a href="#">Introduction into IT Security</a></li>
      <li class="subsection"><a href="../pages/basic-hacking-and-pentesting-process.php">Basic Hacking and Pentesting Process</a></li>
      <li class="subsection"><a href="../pages/threat-and-risk-analysis-pt1-cia.php">Threat & Risk Analysis Part 1</a></li>
      <li><a href="#">Web Application Attack and Defense</a></li>
      <li class="subsection"><a href="#">Install Vulnerable Web App</a></li>
      <li class="subsection"><a href="#">Footprinting, Reconnaissance and Social Engineering</a></li>
      <li><a href="#">Web Site Attack and Defense</a></li>
      <li class="subsection"><a href="#">Path Traversal, (remote) File inclusion and Command Injection</a></li>
    </ul>
  </nav>
</div>


<script>

function toggleNav() {
var navbar = document.querySelector('.navbar');
navbar.classList.toggle('hidden');

var navbarLinks = document.querySelector('.navbar-links');
navbarLinks.classList.toggle('hidden');
}

</script>
  
</body>
</html>