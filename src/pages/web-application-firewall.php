<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fontys Cyber Security</title>

    <?php
    include("../components/navigation-pages.php");
    ?>
    <link rel="stylesheet" href="template.css">
</head>

<body>

    <header>
        <h1>Web Application Firewall</h1>
    </header>
    <div class="container">

        <p>
            For this topic, I will begin by explaining what a firewall is and the various versions and types available.
            I will also discuss the unique features of a web application firewall. Lastly, I will demonstrate the process of installing
            and configuring a web application firewall and showcase its functionality.
        </p>

        <div class="subtheme">Packet Filter & Connection Tracking Firewall</div>

        <p>
            The initial and most fundamental type of firewall is the one that every system has. Over time, this firewall has undergone
            several generations. The first version of this firewall, also known as the packet filter firewall, was introduced in 1987.
            Its function is straightforward: it maintains a record of IP addresses and ports that can be permitted or denied for inbound or
            outbound traffic. When a request is made from a banned IP address or port, the system does not process it. To illustrate this process, here is a diagram:
        </p>

        <div class="image">
            <img src="../assets/web-application-security/packet-filter.png" alt="packet-filter">
        </div>


        <p>

            The second iteration of the layers 3-4 firewall came out in 1990 and was called Connection Tracking Firewall. This firewall operates in the same way that the first
            generation does, but it has one major difference. It keeps a log of all the "conversations"/packets between ip/ports. This allows the system maintainers to examine
            the overall exchange between the nodes, and in more advanced cases, automate blocking of requests from specific ips or blocking requests with the same layer 3-4 contents(preventing
            Dos and DDoS attacks). Here's an example of a connection tracking log:

        </p>

        <div class="image">
            <img src="../assets/web-application-security/connection-tracking.jpg" alt="connection-tracking">
        </div>

        <div class="subtheme">Web Application Firewall</div>

        <p>

            The second version of the firewall, known as the Connection Tracking Firewall, was introduced in 1990. It operates in a similar manner to the first generation,
            but with one crucial difference. It maintains a record of all the packets or "conversations" between IP addresses and ports. This feature enables system
            administrators to analyze the entire exchange between the nodes, and in more advanced scenarios, block requests from specific IP addresses or block requests
            with the same layer 3-4 content, which can prevent Denial of Service (DoS) and Distributed Denial of Service (DDoS) attacks. Here is an example of a Connection
            Tracking Firewall log:


            <!-- In addition, WAFs can also provide additional security features such as SSL/TLS offloading, content caching, and load balancing, making them a popular
            choice for organizations looking to secure their web applications. -->

        </p>

        <div class="image">
            <img src="../assets/web-application-security/waf-diagram.png" alt="connection-tracking">
        </div>

        <div class="subtheme">Installing a Web Application Firewall</div>

        <p>
            To assess the efficacy of the WAF, I created an extra virtual machine in vSphere by utilizing the dvwa2023 template provided by Fontys.
            Once the image was up and running, I installed the "libapache2-mod-security" library from the apt store. This library enables the Apache
            server to inspect incoming requests and compare them to a set of predefined rules, allowing it to block any requests that match the specified rules.
            After installing the library, I toggled the SecRuleEngine in the apache2 configuration as follows:
        </p>

        <div class="image">
            <img src="../assets/web-application-security/waf-secrulengine-toggle.png" alt="connection-tracking">
        </div>

        <p>
            Once the change was saved, I restarted the Apache2 server and verified that the DVWA was still accessible on my browser
            and Kali instance, which it was. Finally, I added some rules to the server by incorporating the OWASP Top 10 ruleset, which
            includes rules for the most frequent and generic attacks. Here is the README provided by OWASP Top 10:
        </p>

        <div class="image">
            <img src="../assets/web-application-security/waf-coreruleset.png" alt="connection-tracking">
        </div>

        <p>
            Here's a picture of the rule files extracted into the modsecurity folder on the server:
        </p>

        <div class="image">
            <img src="../assets/web-application-security/waf-rules-folder.png" alt="connection-tracking">
        </div>

        <p>
            Upon restarting the Apache2 server, the rules were successfully applied, and the DVWA website could be accessed from any location
            on the network. I then set the website's security level to a minimum and proceeded to test the WAF by attempting a command injection (;ls).
            The results of the test are as follows:
        </p>

        <div class="image">
            <img src="../assets/web-application-security/waf-command-injection.png" alt="connection-tracking">
        </div>
        <div class="image">
            <img src="../assets/web-application-security/waf-request-denied.png" alt="connection-tracking">
        </div>

        <p>Here's the error log of the WAF: </p>

        <div class="image">
            <img src="../assets/web-application-security/waf-error-log.png" alt="connection-tracking">
        </div>

        <div class="subtheme">Afterthoughts</div>

        <p>
            In conclusion, firewalls and web application firewalls are essential tools for protecting computer networks and web applications
            from cyber attacks. The different generations of firewalls, from the simple packet filter firewall to the more advanced layers 3-4 and
            7 firewalls, have evolved to keep pace with the ever-increasing complexity of modern networks. Web application firewalls, in particular,
            are crucial for safeguarding web applications from attacks that exploit vulnerabilities such as command injection and SQL injection.
            As demonstrated by my installation and testing of a WAF, these tools can be effective in preventing attacks and maintaining the security of computer systems.
        </p>







    </div>

</body>

</html>