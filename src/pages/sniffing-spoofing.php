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
        <h1>Network Spoofing and Man in The Middle Attacks(MITM)</h1>
    </header>

    <div class="container">

        <p>
            In this topic I will be covering Network Sniffing and Spoofing. It will be a practical only topic, without going into
            detail about the basics (i.e. traffic and the OSI model), since everything has already been explained in previous topics.
            First I will start with what Sniffing and Spoofing is, then I will go into the practical side of things, and finally talk
            about how it can be prevented.
        </p>


        <div class="image">
            <img src="../assets/sniffing/intro.png" alt="intro">
        </div>

        <div class="subtheme">Sniffing and Spoofing</div>

        <p>
            <b>Sniffing</b> is a technique that refers to the real-time interception, capture or monitor of packets between two hosts/devices
            on a network or out of a network. It essentially is eavesdropping on private communication. It is most often used in wireless communication
            since the traffic is broadcasted to all devices. On its own sniffing can't do harm, but it can give out lots of information like
            passwords, emails, messages etc.
            </br></br>
            <b>Spoofing</b> builds upon sniffing. Once captured, packets can be repeated or modified by a bad actor and then sent to one of the hosts,
            essentially impersonating one of the hosts. Here is a list of the most common types of spoofing and an example for each one:
        </p>

        <div class="bullet">
            <ul>
                <li><b>Generic Spoofing</b> - capturing the authentication packets between an user and an api and then repeating them to get access to the user's account.
                </li>

                <li><b>DNS Spoofing</b> - 'poisoning' an user's dns so it will redirect him to a malicious website every time he tries to access a specific link.
                </li>

                <li><b>Website Spoofing</b> - creating an identical copy of a website and using it to steal credentials of users who don't know that it is fake.
                </li>

                <li><b>ARP Spoofing</b> - It refers to ARP (address resolution protocol). It essentially is replacing the router with a bad actor, so all trafic goes
                    through the hacker. Here's an image:
                </li>

                <div class="image">
                    <img src="../assets/sniffing/arp-spoofing.png" alt="intro">
                </div>


                <li><b>IP Spoofing</b> - changing your IP, so the bad actor's identity stays hidden. A common use for it is DDoS attacks.
                </li>



            </ul>
        </div>

        <div class="subtheme">Exercises</div>

        <p>
            To demonstrate how capturing packets works and data is transferred in general, here's a blueprint of how data is transferred
            with packets going through different services I made from a project I did last semester:
        </p>

        <div class="image">
            <img src="../assets/sniffing/1-exercise.png" alt="intro">
        </div>

        <p>
            Now here are some examples of packet sniffing:
        </p>

        <div class="image">
            <img src="../assets/sniffing/sniff-juice-login.png" alt="vpn">
        </div>


        <div class="image">
            <img src="../assets/sniffing/sniff-juiceshop-captured-login.png" alt="vpn">
            <a><i>This is how the POST request authorization packet looks like. The JuiceShop has no traffic encryption, so we can see his credentials for this login request.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/sniffing/sniff-abv-login.png" alt="vpn">
        </div>

        <div class="image">
            <img src="../assets/sniffing/sniff-abv-encrypted.png" alt="vpn">
            <a><i>Now this is a website with proper encryption. As you can see even if we capture the login request, it will be very hard to find the credentials.
                </i></a>
        </div>


        <div class="subtheme">Now here's a practical example of arp spoofing:</div>

        <div class="image">
            <img src="../assets/sniffing/arp-ettercap.png" alt="vpn">
            </br><a><i>First we start a specialised application for man in the middle attacks called Ettercap.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sniffing/arp-scan-for-hosts-option.png" alt="vpn">
            </br><a><i>Next step is scanning for hosts using the application options.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sniffing/arp-tartget-2.png" alt="vpn">
            <a><i>At the time, my kali machine was on the vSphere dhcp server, so I got a list of every running vm on the network.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sniffing/arp-targets-setup.png" alt="vpn">
            <a><i>I found my ubuntu vm which was running on .59, and set up ettercap as man in the middle between the gateway (.1) and the ubuntu vm (.59).
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sniffing/arp-poison-targets.png" alt="vpn">
            </br><a><i>After setting up my targets, I used the ARP poisoning tool inside ettercap.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sniffing/arp-ubuntu-vuln-website-request.png" alt="vpn">
            <a><i>After I got the ARP poisoning setup, I tested logging in on an unencrypted website on the ubuntu machine.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sniffing/arp-captured-packets-credentials.png" alt="vpn">
            <a><i>As you can see I managed to capture the login POST requests sent by the ubuntu machine.
                </i></a>
        </div>




        <div class="subtheme">Afterthoughts</div>

        <p>
            I have covered packet capturing multiple times in the previous topics, mainly for the application security topic while using BurpSuite, since
            the app requires intercepting packets and modifying them. Sniffing was essentially an extension of that, but instead of capturing your own packets,
            you capture other people's packets on a network, which is a very powerfull tool in espionage. Spoofing was something that I have never tried before.
            I am stunned by how easy it was to ARP poison packets between hosts. It really showed me how if your not on a network you trust you can't be safe.
            I will keep looking into spoofing even after finishing this topic and will research ways of how to protect networks against it. Also encryption is very
            important!!
        </p>





</body>

</html>