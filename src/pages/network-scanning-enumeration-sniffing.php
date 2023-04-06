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
        <h1>Network Scanning and Enumeration (incl. Sniffing)</h1>
    </header>



    <div class="container">

        <p>This is the first topic I'll cover out of the Network Security theme. Here I will begin by covering the concept of what Network Scanning is,
            I will try to go more in depth into the topic and the technology that surrounds it. I will also describe the scanning process of a network,
            and finally show some examples of how scanning works along with some final thoughts.
        </p>

        <div class="image">
            <img src="../assets/network-scanning/intro.png" alt="scanning-intro">
        </div>


        <div class="subtheme">Networks, Hosts, Devices and CKC Reconnaissance</div>

        <p>Since this is the first topic of the Network Security theme, I wanted to delve into the basics of what a network is, before heading
            into the topic of Scanning and Ennumeration. What we call a network is actually just a collection of devices that can communicate
            between eachother. Hosts essentially are devices that are in a network(either private or public) and they all have unique
            identifiers(what we call ip address). For Example, 192.168.0.1 is a common private IP addres used for a router, while 192.168.0.2
            could be a device like a laptop, phone, smart watches etc. The server on which this website is hosted(a AWS Cloud Server) has the
            public IP address 143.42.53.121.
            </br></br>
            Another vital part of networks that I will cover more extensivly in the following BoK topics are the hardware and software
            components, these are routers, switches and firewalls. In simple terms routers are hosts that connect the outside network and a private one.
            The devices connected to the router have different addresses given out by the router, and the router is responsible for routing data between different
            devices. Switches are used to connect multiple devices within a network. Finally we have softwares, firewall is a type of software that filters
            incoming and outgoing traffic.
            </br></br>
            Finally the last important aspect of a network security is understanding the different ports that are used by network hosts and devices.
            Ports are used to enable different types of network communications. For example HTTP traffic used for web browsing(as you can see this php website uses port 2999)
            typically uses port 80, HTTPS traffic(same as HTTP traffic, but uses RSA encyption) uses port 443. Other common ports are 21(FTP), 22(SSH) and
            23(Telnet).

        </p>

        <div class="subtheme">Network Scanning and Enumeration</div>

        <p>The process of Netwrok scanning is essentially finding and identifying active hosts and open ports on a network.
            Network enumeration builds upon scanning, by gathering <b>information</b> about the hosts and services they are running i.e
            the operating system of the host, and the services on ports.
            </br></br>
            Network scanning and enumeration is a process from the 'Reconnaissance' phase from the CKC that allows all actors to obtain data
            and information on their targeted systems. By establishing a connection to perform different scans and queries utilising bultiple tools,
            the actors are able to learn about all of the exposed ports, connections, hosts, firewalls, system data...etc.
            </br></br>
            There are several tools and technologies that can be used for network scanning and enumeration, such as Nmap, a popular
            open-source network mapping tool, and Metasploit, a penetration testing framework that includes a variety of scanning
            and enumeration modules.
            </br></br>
            In the following examples, I will show different scanning and enumeration techniques in more detail, and will give an explainations
            on how they can be used to identify vulnerabilities and improve security.
        </p>

        <div class="subtheme">Examples and Exercises</div>

        <p>

        </p>
        <!-- 
        <div class="subtheme">Afterthoughts</div>

        <p>

        </p> -->

    </div>

</body>

</html>