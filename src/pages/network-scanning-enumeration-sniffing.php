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
            The scanning targets of the following examples were performed on the server this website is hosted on and the ubuntu
            image on vSphere on which I am hosting the Juice Shop. The target IPs are 143.42.53.121 and 192.168.185.71. Here are
            some examples of different port scanning techniques:
        </p>

        <p>
            <i>The three-way handshake</i> is a tcp protocol that involves three packets. The process goes like this:
            First the client, that wants to connect to a certain server, sends out a TCP SYN packet. Then the server
            responds with a SYN-ACK packet, and finally the client sends out an ACK(acknowledge) packet. After the "handshake",
            a TCP connection is established and data can be exchanged.
        </p>

        

        <div class="image">
            <img src="../assets/network-scanning/scan-sS.png" alt="hids-intro">
            <a><i>-sS scan uses the three-way handshake. It sends out SYN packets to a server's ports and awaits SYN-ACK responses.
                But it doesn't establish a connection! This technique is the default for many scanners, because it is quick and safe.
                It is very hard to detect due to it not actually establishing a connection.
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/network-scanning/scan-sT.png" alt="hids-intro">
            <a><i>-sT does the same thing as the -sS scan, but it establishes a connection with the server. This is usually used when
                the -sS option is unavailable. But it has some advantages, it can detect open, closed and filtered ports, whereas the -sS can
                detect only open and closed ports. The chance of detecting this scan is greater.
            </i></a>
        </div>

        <p>
            <i>The UDP protocol</i> is almost the same as TCP protocol. It is faster, but less reliable.
            When a TCP packet is sent, the server will ask the client if he received the packet, and if it doesn't recieve a responce, it will
            send the packet again. But a UDP connection will not ask for a confirmation, it will continue to send packets, even if the client
            didn't recieve any. This is useful in video streaming and multiplayer gaming.
            </br>
            Example: If a multiplayer game uses TCP and a packet is lost and then resent again, the player will be shown things 
            that have already happened while the other players will be up to date. There is no use for TCP in that case. 
        </p>
        
        <div class="image">
            <img src="../assets/network-scanning/scan-sU.png" alt="hids-intro">
            <a><i>-sU scans for UDP ports/services. It sends out a UDP packet and awaits a response, if there is no response
                it may mean that the port is either closed or filtered. It is slow, UDP packets are rarely sent back, leaving NMAP to time out
                that is why I stopped the scan in the picture. Also UDP packets are mostly blocked by firewalls and other security measures.
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/network-scanning/scan-sA.png" alt="hids-intro">
            <a><i>-sA scan sends out ACK packets(the final packet of the 3-way handshake) and checks to see if a port is closed.
                This scan is mostly used to determine wether a firewall is blocking pacets or understand the firewall's ruleset.
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/network-scanning/scan-regular.png" alt="hids-intro">
            <img src="../assets/network-scanning/scan-pP.png" alt="hids-intro">
            <a><i>When a port is not specified, nmap only sends packets to the most common ports. That is why in the first scan of the server this
                website is hosted on, port 2999 does not appear. I used the -p - command at the end to check for every port.
            </i></a>
        </div>


        <div class="image">
            <img src="../assets/network-scanning/scan-O.png" alt="hids-intro">
            <a><i>This scan allows me to determine the OS version of the server. It guessed with 91% that the linux version I am running is 2.6.X
                but in reality it is 5.19.0. It would be way more accurate if I had more services running on the server. And if a hacker would try
                to overtake a server, he would search for OS exploits.
            </i></a>
        </div>

        
        <div class="image">
            <img src="../assets/network-scanning/sniffing.png" alt="hids-intro">
            <a><i>This is a slide out of the final presentation I did for a mobile application. The slide shows how the packets are sent between the different services, 
                and returned back to the user.
            </i></a>
        </div>






        <div class="subtheme">Afterthoughts</div>

        <p>
            After doing this topic I have a better idea of how network scanning works, I have read a lot about the fundamentals
            of networks and packet transmission protocols. Network Scanning is essential for identifying vuonerabilities and improving security
            of a network. And it is crucial for network administrators to understand the different scanning and enumeration techniques in order to
            protect their networks. Overall, I found this BoK subject to be very helpful as it allowed me to employ a range of scan types and broaden my knowledge.
        </p> 

    </div>

</body>

</html>