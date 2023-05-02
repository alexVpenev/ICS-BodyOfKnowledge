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
            To demonstrate how capturing packets works and data is transferred in general, here's a diagram I made from a project I did last semester:
        </p>

        <div class="image">
            <img src="../assets/sniffing/1-exercise.png" alt="intro">
        </div>


</body>

</html>