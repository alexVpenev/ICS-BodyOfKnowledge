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
            In this topic I will first focus on what is a firewall, what are the different versions/types of firewalls, what is special about the web application firewall.
            And finally I am going to show how I installed and set up a WAF(Web Application Firewall), and show its functionality.
        </p>

        <div class="subtheme">Packet Filter & Connection Tracking Firewall</div>

        <p>
            This is the first and most basic type of firewall that everyone has on their system. There were a couple of generations of that firewall. The first iteration of the firewall,
            also called the packet filter firewall came out in 1987. It's use was simple. It keeps a list of ip addresses and ports which can be allowed or blocked on inbound or outbound.
            Any request that comes out of a ip/port that is banned, is not processed by the system. Here's a diagram of how that works:
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

            A web application firewall (WAF) is a type of firewall that is specifically designed to protect web applications from various types of attacks,
            such as cross-site scripting (XSS), SQL injection, and other web-based attacks. Unlike packet filter and connection tracking firewalls, which operate
            at the network layer, a WAF operates at the application layer of the OSI model. It works by inspecting incoming HTTP traffic and applying a set of
            predefined rules to detect and block malicious traffic. This allows WAFs to identify and block attacks that other firewalls may not be able to detect.
            Here's a diagram showing how some requests processed as malicious are not blocked by the WAF:
            
            
            <!-- In addition, WAFs can also provide additional security features such as SSL/TLS offloading, content caching, and load balancing, making them a popular
            choice for organizations looking to secure their web applications. -->

        </p>

        <div class="image">
            <img src="../assets/web-application-security/waf-diagram.png" alt="connection-tracking">
        </div>

        <div class="subtheme">Installing a Web Application Firewall</div>

        <p>
            To test the functionality of the WAF for myself, and compare it an instance where a firewall is not in place, I have decided to create an additional
            virtual machine in vSphere from the dvwa2023 template provided by fontys.
        </p>



    </div>

</body>

</html>