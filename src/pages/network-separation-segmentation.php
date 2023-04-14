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
        <h1>Network Separation and Segmentation</h1>
    </header>



    <div class="container">

        <p>
            In this topic I will be covering Network Separation and Segmentation. As always, I will start by going a little in depth about the subject and will end with
            examples/exercises and a conclusion. There is only one exercise given by Fontys, it consists of creating 2 Vlans on a private network, configuring firewalls
            and setting up an effective DMZ. I am planning to do the exercise two times, one in the way Fontys has given example with and one which I think is better and
            more effective.
        </p>

        <div class="image">
            <img src="../assets/vlans/intro.png" alt="intro">
        </div>


        <div class="subtheme">Why Network Segmentation?</div>


        <p>
            There are numerous ways in which a network can be compromised. Some of these methods have been covered in previous topics,
            while others will be covered in upcoming topics. The primary means by which a network can be breached is through the internet.
            An attacker can scan open ports on a network to identify vulnerabilities and exploit them. I previously discussed this issue in
            the context of Network Scanning. To address this problem, a firewall can be utilized to prevent attackers from gaining access to
            the network through the internet.
            </br></br>
            Another common way that networks are hacked is through the capture of wireless traffic, signals, and logins. If a router's model
            is used as its wifi name, an attacker can attempt to identify vulnerabilities in the router's model and exploit them. This topic
            will be explored in greater detail in a later topic.
            </br></br>
            The most frequent method of network hacking occurs from within the network itself. For example, if you purchase an IOT device
            like Amazon Alexa that downloads updates from unknown servers, a person with access to that server may gain full access to your
            network. This could be particularly dangerous if your network contains servers hosting your personal website, backup servers, phones,
            and other sensitive information. To address this issue, we can explore the concept of Network Segmentation, where different devices
            have their own spaces on the network. This way, if one device is compromised, the other devices on the network are not affected.
            This is what we call Network Segmentation.
        </p>



        <!-- <p>ORIGINAL
            So there are many ways a network can be hacked. I've covered some of the ways in previous topics, and will continue to cover the network hacks and how to protect
            them in following topics. The first main way is getting hacked through the internet. Someone might scan open ports on your network and try to find vulnerabilities
            and exploit them (I've covered that in Network Scanning). This is one of the things I will try to solve here, by having a firewall we can stop attackers that 
            are trying to gain access to us over the internet. Another common way networks often get hacked are capturing wireless traffic/signals/logons. If your router
            has its model as wifi name, a hacker will try to find any vulnerabilities in that model, and try to exploit them(this is a topic for another week). The most
            common way networks get hacked is within the network. Let me explain, imagine you bought an IOT device like Amazon Alexa that often downloaded updates from
            unkown to you servers. Now a person who has access to that server may get full access to your network. Imagine that you had a server with your personal website
            on your network, or back-up servers, phones etc. That is another thing, I am trying to fix in topic, what if the different devices had their own spaces on your
            network, and if one may fall, none of the other devices fall with it. This is called Network Segmentation.
        </p> -->

        <div class="subtheme">How do we segment our Networks and protect them from one another?</div>


        <p>
            Firewalls and Vlans can be utilized to enhance the security of a network. Vlans enable the separation of hosts on a network into private subnetworks,
            allowing for better organization and naming. For example, a network with the IP address range 192.168.1.0/24 can be separated into two Vlans,
            192.168.100.X and 192.168.200.Y. Servers can be placed on the X Vlan, while workspaces and IoT devices can be placed on the Y Vlan.
            </br></br>
            Firewalls play a crucial role in securing the communication between hosts on different Vlans. Without firewalls, hosts on different
            Vlans can communicate with each other, potentially resulting in security breaches. By implementing firewall rules, specific
            communication between different Vlans can be regulated. For instance, a DMZ network(demilitarized zone network) can be established. Businesses with a
            public website that customers use must use their web servers over the internet. Putting these servers out there means that they are
            putting their entire network at risk. So instead, they put them on a DMZ. It isolates any traffic between the DMZ and the private network.
        </p>


        <!-- <p> ORIGINAL
            We can utilize Firewalls and Vlans. Vlans are the separation of the hosts of the network that I talked about. It is not really something special on its own.
            It gives us a way to put hosts in private subnetworks and name them better. For example I can separate my network 192.168.1.0/24 into 192.168.100.X and 
            192.168.200.Y. Now I may decide to put any Server I own on the X Vlan and all my workspaces and IoT devices on the Y Vlan. Now this is where firewalls shine,
            without them hosts between different Vlans can keep communicating. But Firewalls allow us to place rules on these networks. For example, I may decide that I don't
            want my any devices to be able to touch my workstations and the other way around. In that case my workstations VLAN becomes a DMZ Network. A demilitarized zone
            perimeter network's goal is to allow hosts(i.e. my workstations) to access untrusted networks, such as the internet, while ensuring the private networks(i.e. my 
            server) to remain secure. 
        </p> -->

        <div class="subtheme">Exercise</div>


        <p>
            The exercise this week was to design and create a network with a multiple VLANS with proper firewalls and put our current working virtual machines in them.
            NB! I will focus on the network designs I've done for this assignment, rather than the process of setting the VLANS up, due to it being very straight forward.
            And the firewall rules! Here are the solutions I designed:
        </p>


        <div class="image">
            <img src="../assets/vlans/fontys-design.png" alt="intro">
            <a><i></br>This was the design solution provided by Fontys. It implements two pFSense firewalls and the second one is on the VLAN of the first one.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vlans/my-design.png" alt="intro">
            <a><i></br>And this is the solution I have designed for the network. I've created three network adapters in vSphere, and configured the interfaces and
                    firewall rules to each VLAN.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vlans/proof-f2.png" alt="intro">
            <img src="../assets/vlans/proof-my.png" alt="intro">
            <a><i>This stands here only for proof that I've implemented the two designs.
                </i></a>
        </div>

        <p>
            If I were to implement the design in the real world for a real company I would probably choose the fontys design. Using separate pFSense instances
            for different VLANs can offer better security, and having more more components means less points of failure. On the other hand my single pFSense solution
            with multiple VLANS would be more budget-friendly and easier to maintain. I have chosen to continue with the implementation of my design due to it being easier
            to change and configure. I will implement more tools and software for the remaining Network Security Bok topics, and constanly running multiple VMs of the same
            firewall will be quite confusing.
        </p>












    </div>




</body>

</html>