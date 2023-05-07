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
        <h1>IT Basic Monitoring (availability) + IT Security Monitoring (integrity and confidentiality)</h1>
    </header>

    <div class="container">

        <p>
            This topic will be a combination of two. I will be covering Basic Monitoring and Security Monitoring, both types are
            covering different parts of the CIA triad, more on those parts later. I will explain each type of monitoring and do the
            exercises separately. Then I will make a comparison between the two and finally give my thoughts on the subjects.
        </p>


        <div class="image">
            <img src="../assets/monitoring/intro.png" alt="intro">
        </div>

        <div class="subtheme">Basic Monitoring (availability)</div>

        <p>
            Basic monitoring is aimed at the Availability concept out of the CIA. It tries to keep information/traffic/hardware consistently
            and readily accessible. As we know, a reliable network is key to an operational business, if not operational all the time, it could
            bring big losses on a company, especially if that's their buissness model. Back in the days, companies hired system admins to watch
            their systems 24/7 every day, but nowadays people use monitoring.
            </br></br>
            Basic monitoring is essentially software that checks the vitals of the system it is installed on. In other words, if the software
            is installed on multiple systems, someone with an admin access to the software can have a constant look at the vitals of those systems
            (i.e. cpu usage/ network stats, etc). And in addition he will be instantly notified(get alerted) if a server is down or underperforming.
        </p>

        <div class="subtheme">Exercises - Basic Monitoring</div>

        <p>
            So the exercise for this topic is installing a basic monitoring software on my vSphere network. For the choice of casic monitoring tool,
            I will be installing Nagios XI. It was the software shown to us in our lectures. So what is Nagios XI? It is a non-free enterprise
            level availability software. It is very commonly used by companies and is very flexible in terms of device availability. Here's
            the process which I went through to install it and some tests:
        </p>

        <div class="image">
            <img src="../assets/monitoring/1-installed-and-configured-ips.png" alt="monitoring">
            <a><i>I started with installing the nagios xi template cent os template given in vSphere. I set it up on my VLAN A, and the dhcp configured it instantly.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/monitoring/2-accessible-from-vlana.png" alt="monitoring">
            <a><i>Tried accessing it from my VLAN B kali machine. It worked, this is the first page that I got.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/monitoring/3-configured-account-and-installed-correctly.png" alt="monitoring">
            <a><i>I had to configure my account information and install Nagios XI web client. This is the running website.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/monitoring/4-configured-my-host(pfsense).png" alt="monitoring">
            <a><i>To get to this page, I used the auto configure tool in the app. It automatically found my pFsense firewall and set it up on its own.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/monitoring/6-pfsense-stats.png" alt="monitoring">
            <img src="../assets/monitoring/5-some-pfsense-stats.png" alt="monitoring">
            <a><i>Here are some pFsense stats.
                </i></a>
        </div>








        <hr style="height: 3px; background-color: #34444A;">

        <div class="subtheme">Security Monitoring (integrity and confidentiality)</div>

        <p>
            Security monitoring is aimed at the Integrity and Confidentiality concepts out of the CIA. It is designed to detect and respond to potential security breaches in real-time, providing an additional layer of protection to basic monitoring. Its main functionality is intrusion detection. Here are the ways the techniques it uses:
        </p>

        <div class="bullet">
            <ul>
                <li><b>Signature-based detection</b> involves scanning for known patterns of attacks or malicious code that have been identified and documented in a database.
                </li>

                <li><b>Anomaly-based detection</b> uses statistical models to identify unusual activity that falls outside of normal patterns of behavior.
                </li>

                <li><b>Behavior-based detection</b> involves monitoring user behavior and analyzing it to identify potentially malicious actions.
                </li>

            </ul>
        </div>

        <p>
            In practice it offers the same type of information to the users as basic monitoring.Once an intrusion has been detected, advanced monitoring will typically trigger an alert or notification to a security team. The team can then take immediate action to mitigate the threat, such as isolating affected systems or blocking malicious traffic.
        </p>



        <div class="subtheme">Exercises - Security Monitoring</div>

        <p>
            The exercise for security monitoring was to install a security monitoring tool on my vSphere network, just as the previous exercise. I will be installing Zeek.
            It is an open-source software that is widely used for network security monitoring. It provides real-time analysis of network traffic and is highly flexible and customizable. Here are the steps I took to install it and test it.
        </p>



        <div class="image">
            <img src="../assets/monitoring/z1-ssh-into-zeek-server.png" alt="monitoring">
            </br><a><i>First step was to create a new VM (ubuntu-server-20) on my network. After creating it I ssh it so I could paste commands into the vm.
                    This is the terminal.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/monitoring/z2-zeek-install.png" alt="monitoring">
            <a><i>The second step was installing zeek. I had to add the zeek packages to my package manager download links.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/monitoring/z3-zeek-config.png" alt="monitoring">
            <a><i>During the installation I had to choose how I would like to get alerts(by email). I chose no configuration to ease up the process.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/monitoring/z4-zeekctl-cfg-change-config.png" alt="monitoring">
            <a><i>After the zeek installation, I had to change some config files. The first one was to remove all mail alerting.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/monitoring/z5-zeek-interface-setup.png" alt="monitoring">
            </br><a><i>I had to change setup the network adapter I want Zeek to use. In my case ens160.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/monitoring/z6-zeek-running-successfully.png" alt="monitoring">
            <a><i>This is the Zeek command line. I didn't get it to work first time, there was a lot a small errors I had to fix, but in the end as you can see it works.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/monitoring/z7-cattting conn.log.png" alt="monitoring">
            <a><i>This is the connection log file.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/monitoring/z8-catting ntp log.png" alt="monitoring">
            <a><i>And this the the ntp log file.
                </i></a>
        </div>


        <hr style="height: 3px; background-color: #34444A;">


        <div class="subtheme">Basic vs Security Monitoring</div>

        <p>
            Both basic and security monitoring are indispensable tools for system and security administrators. While both types of tools offer similar alerting capabilities for administrators, they each cover distinct aspects of the system. Basic monitoring tracks whether the system is experiencing downtime or underperforming, while security monitoring scans for potential infiltration or security breaches. In fact all security monitoring tools have the functionality of basic monitoring, simply because it must assess a system's resources to detect any exploitation. So in practice security monitoring is just a tool that is used for both. 
        </p>



        <div class="subtheme">Afterthoughts</div>

        <p>
            Before writing his topic, I already had experience with basic monitoring. I had some instances in which I installed Grafana with Telegraph to keep track
            of the resources for certain systems, and I even did it manually on my own. So the topic was nothing new to me. I understand it and it is absolutely essential
            to have a way to see how systems are doing, especially when you have a lot of them or your entire buisness model is based around them.
            </br></br>
            As for security monitoring, I never had experience with that. I couldn't fully comprehend how it detects certain actions in systems. But I got to
            install, configure and test the tools, so I think it was a very usefull topic to write. From what I've read about it, it seems that it is absolutely essential
            for security professionals to know how to use it. So I must spend more time reading about it and testing the software in my own time.
        </p>


</body>

</html>