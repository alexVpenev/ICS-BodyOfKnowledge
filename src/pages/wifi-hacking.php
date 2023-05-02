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
        <h1>WiFi Hacking</h1>
    </header>

    <div class="container">

        <p>
            For this topic, instead of a lecture we had a special practical. Our teachers had setup six different Wifi routers in our classroom, and us the students
            had to try and crack each one. They were named HACKME_CozyCat, HACKME_MegabeastWL, HACKME_SpiderHack, HACKME_FontysICT, HACKME_MrRobot and HACKME_EvilCorp. 
            Each one harder than the last one. As usual for a BoK topic, I will go in-depth into what a wifi router is, how it works and how it can be cracked. Then I will
            go over the individual cracks I did in class.
        </p>


        <div class="image">
            <img src="../assets/wifi-hacking/intro.png" alt="intro">
        </div>


        <div class="subtheme">WiFi</div>

        <p>
            What we usually call a home wifi router essentially is a switch, router and a wireless hub in one package. It has its own dhcp server, firewall, dns etc.



            
        </p>

        <div class="image">
            <img src="../assets/wifi-hacking/router.png" alt="router">
        </div>


        <p>
            Now for a device to establish a wireless connection with a Wifi, first it needs to get the Wifi routers SSID. The device's wireless card sends out an empty
            probe request frame on every wireless channel. If a wifi router captures that request it will send out a probe response frame that includes information about
            the network(SSID, Signal Strength and Security type) on the channel it operates on. This is usually what happens before you get a list of surrounding wifi routers.
            Now what follows is, the user finds the SSID of the router he wants to connect to, enters a password and establishes a connection with the router(joins the network). 
            In more detail, the process of joining the network depends on the type of router/network. In most cases when the network works with (WPA/WPA2), the client
            sends out a request that it wants to authenticate, the client and the router exchange EAPOL frames so that connection establishment is secure, and then
            client logs in with an authentication frame. Finally the router allows the client's device to join the network and gives him an IP address. 
        </p>


        <div class="subtheme">Cracking WiFi Networks</div>

        <p>
            So now, I will show and explain the process of joining/forcing your way on to a network. First step is to get a wireless network adapter that allows
            capturing and analyzing wireless network traffic. Most wlan cards inside computers don't support that 'monitor mode' feature. They use what is called
            'managed mode', which is essentially a way of locking users using firmware from using their hardware to capture traffic, although the hardware 100% supports
            it. Anyway, usually you would have to get an external wireless card that supports it. I rented one called <b>Netgear WNA1100</b>, a model that came out in
            2010 with the Atheros AR9271. The newer netgear wireless adapters do not support monitor mode. Here's what it looks like:
        </p>

        <div class="image">
            <img src="../assets/wifi-hacking/netgear.png" alt="wifi">
        </div>

        <p>
            So after acquiring such an adapter. You put it into monitor mode and start dumping all of the trafic it captures from any source and on any channel.
            The goal of doing this is to get the mac adress of the router you're trying to crack and more importantly try and capture the EAPOL frames. Ones you actually
            acquire those packets, you can bruteforce the password offline with a speed of 20 000 passwords per second(for a semi-modern GPU). Now here's the step by step:
        </p>

        <div class="image">
            <img src="../assets/wifi-hacking/1-setup-monitor-mode.png" alt="wifi">
            <br><a><i>I am running kali-linux natively on my laptop, so the distribution instantly recognised and setup the adapter. 
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/wifi-hacking/2-captured-cozycat-packet.png" alt="wifi">
            <a><i>This is kind of a side step, before I actually ran any specific tools for wifi cracking, I tried capturing traffic on the netgear using wireshark.
                Here you can see the MAC address of the HACKME_CozyCat.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/wifi-hacking/3-aerodump-all-macs.png" alt="wifi">
            <a><i>Here I put the netgear adapter into monitor mode, and just monitored in real time any SSIDs that include the word HACKME using the airodump command.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/wifi-hacking/4-megabeast.png" alt="wifi">
            <a><i>Using the airodump command I started listening and saving only for HACKME_MegabeastWL trafic. I waited for someone to authenticate to the network, and
                voila, I captured EAPOL traffic.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/wifi-hacking/4.1-megabeast-captured-files.png" alt="wifi">
            <a><i>Here are the files that I captured.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/wifi-hacking/5.0-passwords-file.png" alt="wifi">
            <a><i>To start cracking, you need one of two thing. Either a list of potential passwords like the one kali comes with 'rockyou.txt' or a way/algorithm
                that prompts new random password and incrementaly increases and gives out a password each time. 
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/wifi-hacking/5-megabeast-aircrack.png" alt="wifi">
            <a><i>Now using the aircrack-ng tool I bruteforced the HACKME_Megabeast. The password was Zanzibar.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/wifi-hacking/6-cozycat-aircrack.png" alt="wifi">
            <a><i>And here I cracked the password for the HACKME_CozyCat. Password was hellokitty. 
                </i></a>
        </div>


        <div class="subtheme">Different methods</div>

        <p>
            So what I showed was a standart dictionary attack using EAPOL frames. Other options are using the aireplay pentesting tool to deautorize a number of users
            connected to the network. Once deauthenticated devices will try to reconnect to the network, hence allowing you to capture the EAPOL traffic. Another common
            way of getting passwords is called the Evil Twin attack. I have not tried this one, but what you want to do essentially is creating a 'decoy' of the router,
            figuring out some way to cancel out the original routers traffic and then wait for someone to login into the 'decoy router' with the original wifi's password.
            There are many more tools and ways that exist.
        </p>
        
        <div class="subtheme">Afterthoughts</div>

        <p>
            This topic is very broad and I was simply not able to understand everything about it. For someone to be able to crack any wifi router, they would have to know
            everything about routers, hardware and traffic and I was simply not able to cover it in this topic. On the plus side I got to practice hacking
            real routers during the practical lecture I was given in university. I worked with classmates to crack and figure out how to crack wifi's in general and with
            a little more practice I hope I will utilize the knowledge I learned for the pentest I will be doing at the end of this semester. Finally it opened my eyes
            on how easily old routers can be cracked, and the importance of strong passwords.
        </p>

    </div>

</body>

</html>