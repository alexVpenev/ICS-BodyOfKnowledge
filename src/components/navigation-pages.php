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
      <div class="navbar-links-wrapper">
        <ul>
          <li class="common"><a href="../../index.php">Home</a></li>
          <li class="common"><a href="../pages/introduction.php">Introduction</a></li>
          <li class="common"><a href="../pages/versionHistory.php">Version Control</a></li>

          <li class="section1"><a href="#">Web Application Security</a></li>

          <li class="subsection1"><a href="#">Introduction into IT Security</a></li>
          <li class="subsubsection1"><a href="../pages/basic-hacking-and-pentesting-process.php">Basic Hacking and Pentesting Process</a></li>
          <li class="subsubsection1"><a href="../pages/threat-and-risk-analysis-pt1-cia.php">Threat & Risk Analysis Part 1</a></li>

          <li class="subsection1"><a href="#">Web Application Attack and Defense</a></li>
          <li class="subsubsection1"><a href="../pages/installing-dvwa-and-juice-shop.php">Install Vulnerable Web App</a></li>
          <li class="subsubsection1"><a href="../pages/footprinting-reconnaissance-social-engineering.php">Footprinting, Reconnaissance and Social Engineering</a></li>

          <li class="subsection1"><a href="#">Web Site Attack and Defense</a></li>
          <li class="subsubsection1"><a href="../pages/path-traversal-file-inclusion-command-injection.php">Path Traversal, (remote) File inclusion and Command Injection</a></li>
          <li class="subsubsection1"><a href="../pages/web-application-firewall.php">Web Application Firewalls</a></li>
          <li class="subsubsection1"><a href="../pages/host-intrusion-detection-prevention.php">Host Intrusion Detection and Prevention (HIDS)</a></li>
          <li class="subsubsection1"><a href="../pages/xss-csrf.php">XSS & CSRF</a></li>


          <li class="subsection1"><a href="#">Web: Database Attack and Defense</a></li>
          <li class="subsubsection1"><a href="../pages/sql-injection.php">SQL Injection</a></li>





          
          <li class="section2"><a href="#">Network Security</a></li>

          <li class="subsection2"><a href="#">Network: Identification of Vulnerabilities</a></li>
          <li class="subsubsection2"><a href="../pages/network-scanning-enumeration-sniffing.php">Network Scanning and Enumeration (incl. Sniffing)</a></li>
          <li class="subsubsection2"><a href="../pages/howto-securely-host-with-secure-network-connections.php">How to securely host a website with Secure Network Connections (HTTPS/TLS/SSH)</a></li>

          
          <li class="subsection2"><a href="#">Network: Protect the Network</a></li>
          <li class="subsubsection2"><a href="../pages/law-ethics-responsible-disclosure-gdpr.php">Law & Ethics and Responsible Disclosure + GDPR</a></li>
          <li class="subsection1"><a href="#">Network Separation and Segmentation</a></li>

          
          <li class="subsection2"><a href="#">Network: Attack the Network</a></li>
          <li class="subsubsection2"><a href="../pages/vpn-secure-remote-access-management.php">VPN: How to manage a Web Shop with Secure Remote Access and Management by VPN</a></li>
          <li class="subsubsection2"><a href="#">Network Spoofing and Man in The Middle Attacks(MITM)</a></li>

          
          <li class="subsection2"><a href="#">Network: Monitor and Detect</a></li>
          <li class="subsubsection2"><a href="#">WiFi Hacking</a></li>
          <li class="subsubsection2"><a href="#">Network Inrusion Detection and Prevention(NIDS/IPS)</a></li>

        </ul>
      </div>
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