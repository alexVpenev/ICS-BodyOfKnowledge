<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fontys Cyber Security</title>
    <?php
    include("../components/navigation-pages.php");
    ?>
    <link rel="stylesheet" href="template.css">
</head>

<body>
    <header>
        <h1>Network Intrusion Detection and Prevention (NIDS/IPS)</h1>
    </header>

    <div class="container">

        <p>
            In this topic I will cover Network Intrusion Detection and Prevention. In a previous topic I talked about Host IDS/IPS in which I described its
            basics, and the software which can be used to execute that type of functionality. So to start this topic I will bring back what I've written
            and I will end with showing and explaining how I setup a Network IDS and IPS.
        </p>


        <div class="image">
            <img src="../assets/nids/intro.png" alt="intro">
        </div>

        <div class="subtheme">Intrusion Detection and Prevention System</div>

        <p>
            <b>An intrusion detection system (IDS)</b> is a device or software application that monitors a network or systems for malicious
            activity or policy violations. The most common classifications are network intrusion detection systems (NIDS) and host-based
            intrusion detection systems (HIDS).
            </br></br>
            Typically, any detected suspicious activity or policy violation is typically reported either to an administrator or collected centrally
            using a security information and event management. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques
            to distinguish malicious activity from false alarms.
            </br></br>
            <b>An intrusion prevention system (IPS)</b> essentially builds upon the functionality of an IDS. It adds the ability to respond to detected intrusions
            and block evil traffic or users.
        </p>



        <div class="subtheme">Network Intrusion Detection and Prevention</div>

        <p>
            A Network Intrusion Detection System (NIDS) is a security technology that is designed to monitor activity on a network in order
            to detect and respond to unauthorized or malicious activity. NIDS software typically monitors network traffic, looking for signs
            of unusual or suspicious behavior.
            </br></br>
            Some common types of activity that NIDS software might monitor include:
        </p>

        <div class="bullet">
            <ul>
                <li><b>Network traffic patterns</b>: NIDS software can monitor network traffic patterns, looking for traffic that is abnormal or suspicious. Examples: large amounts of traffic, traffic with unusual destinations, and traffic that violates network policies.
                </li>

                <li><b>Protocol analysis</b>: NIDS software can monitor network protocols, looking for anomalies or unusual behavior. For example, it might detect attempts to exploit vulnerabilities in a protocol or attempts to bypass security measures.
                </li>

                <li><b>Known attack signatures</b>: NIDS software can be configured to detect specific attack signatures that are known to be associated with certain types of attacks. For example, it might detect a specific pattern of network traffic that is associated with DDOS.
                </li>

            </ul>
        </div>

        <p>
            When the NIDS software detects an event or behavior that matches a known threat or security policy violation, it can trigger an alert OR take other automated action (nids softwares with such automated actions are refferred to as NIPS), such as blocking network traffic, terminating a process, or quarantining a file.
            </br></br>
            NIDS technology can be used as part of a comprehensive security strategy to protect against a range of threats, including malware, unauthorized access, and data breaches.
        </p>

        <div class="subtheme">NIDS vs HIDS</div>

        <p>
            Since I already covered HIDS, I decided to make a comparison between the two. Here are the key differences:
        <div class="bullet">
            <ul>
                <li>Encryption limits the possibilities of NIDS. Meaning that NIDS is not capable of determening if actual hosts/servers are attacked, just networks.
                </li>

                <li>NIDS cannot monitor operations inside the host.
                </li>

                <li>HIDS takes up the performance out of the hosts it is installed on. NIDS doesn't have such problem since it works with the networks firewalls and network
                    dedicated servers.
                </li>

                <li><b>Essentially HIDS monitors internal behavior and NIDS external one.</b>
                </li>

            </ul>
        </div>
        </p>


        <div class="subtheme">Installing a Network Intrusion Detection Software</div>

        <p>
            The NIDS that I am going to install is called <b>Suricata</b>. It is an open-source nids, designed to monitor network traffic and
            detect suspicious activities using a set of pre-defined rules. It was recommended by my teachers and for an exercise, I will install
            it on my network with my vms that I have setup in previous topics. For pre-defined rules I will use the ones from Snort. <b>Snort</b> is
            another NIDS that uses similar rule-based approach as Surricata. Suricata is compatible with Snort rules specifically. It is a common
            used practice to use the combination between the two, because suricata has greater functionality and the snort rule library are very extensive
            and well crafted. Here's the process I went throgh to install the nids and test it:
        </p>


        <div class="image">
            <img src="../assets/nids/1-installed-suricata-succ.png" alt="nids">
            <a><i>The first step was to install Suricata from the Package installer in pFsense.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/nids/2-added-interfaces-to-suricata.png" alt="nids">
            <a><i>After installing it, I had to add my existing vlans as Suricata interfaces.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/nids/3-checked-install-snort-rules.png" alt="nids">
            <a><i>During the configuration of my VLANS I had to setup and install SNORT rules. I created an account from snort.com and added my information here.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/nids/4-installed-snort.png" alt="nids">
            <a><i>Then I had to install the Snort rules.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/nids/5-added-all-rules-to-all-vlans.png" alt="nids">
            <a><i>Finally I had to choose which snort rules to apply to both the vlans. I chose all of them for the sake of testing its functionality.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/nids/6-bothvlans-are-running-successfully.png" alt="nids">
            <a><i>Finally I ran Suricata on both interfaces and it ran successfully.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/nids/7-tested-with-custom-rule.png" alt="nids">
            <a><i>Here are some alerts I got while using a complete nmap port scan.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/nids/8-custom-rule.png  " alt="nids">
            <a><i>This is a custom rule I made. It sends an alert each time www.google.com is accessed.
                </i></a>
        </div>


        <div class="subtheme">Afterthoughts</div>

        <p>
            NIDS doesn't require to be run on every device on a network, unlike HIDS. So it doesn't take its toll on resources. Of course it is very resource intensive
            on the servers that it is installed on(connected to the network), but that is understandable. It has its flaws, it can impact a networks performance (latency, 
            bandwidth), it can't process encrypted traffic, so it probably must be accompanied by other security software(HIDS), it is complex and the rules can be hard to setup and the final big
            drawback for me is the false positives, meaning showing alerts when nothing special is really happening, that may not be such a big problem in itself, but if
            it is setup to do some automated tasks on alert, it can become quite a problem. In essence it is a very powerfull tool that must be used, especially for big 
            networks, but the rules have to be implemented in a very smart way, so you don't get overwhelmed. 
        </p>


</body>

</html>