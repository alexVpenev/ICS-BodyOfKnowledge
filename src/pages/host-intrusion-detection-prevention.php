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
        <h1>Host Intrusion Detection and Prevention (HIDS)</h1>
    </header>

    <div class="container">
        <p>
            During this topic I will cover the Host Intrusion Detection. The first part of the page will be more informational, focusing on what HID is and how it works.
            The second part will be more practically oriented. I will show a "tutorial" on how to install a HID software on the server side and then how to connect it with a client.
            Finally I will do some test cases and give final impressions on the subject.
        </p>

        <div class="image">
            <img src="../assets/hids/hids-intro.png" alt="hids-intro">
        </div>

        <div class="subtheme">Intrusion Detection System</div>

        <p>
            An intrusion detection system (IDS) is a device or software application that monitors a network or systems for malicious
            activity or policy violations. The most common classifications are network intrusion detection systems (NIDS) and host-based
            intrusion detection systems (HIDS).
            </br></br>
            Typically, any detected suspicious activity or policy violation is typically reported either to an administrator or collected centrally
            using a security information and event management
            </br></br>
            Links to an external site. (SIEM) system. A SIEM system combines outputs from multiple sources, and uses alarm filtering techniques
            to distinguish malicious activity from false alarms.
            </br></br>
            Some IDS have the ability to respond to detected intrusions and block evil traffic or users. Systems with such response capabilities
            are typically referred to as an intrusion prevention system. NIDS and IPS are explained in a separate item.
        </p>

        <div class="subtheme">Host Intrusion Detection and Prevention</div>

        <p>
            Host Intrusion Detection (HID) is a security technology that is designed to monitor activity on a single host (such as a computer,
            server, or other networked device) in order to detect and respond to unauthorized or malicious activity. HID software typically
            monitors a range of system and application events, looking for signs of unusual or suspicious behavior.
            </br></br>
            Some common types of activity that HID software might monitor include:
        </p>

        <div class="bullet">
            <ul>
                <li><b>System file changes</b>: HID software can monitor system files for changes or modifications that might indicate the presence of malware or unauthorized access.
                </li>

                <li><b>Network activity</b>: HID software can monitor network activity on a host, looking for suspicious connections or unusual data transfers.
                </li>

                <li><b>Application activity</b>: HID software can monitor application activity on a host, looking for signs of abnormal behavior or unauthorized access.
                </li>

            </ul>
        </div>

        <p>
            When the HID software detects an event or behavior that matches a known threat or security policy violation,
            it can trigger an alert or take other automated action, such as blocking network traffic, terminating a process,
            or quarantining a file.
            </br></br>
            HID technology can be used as part of a comprehensive security strategy to protect against a range of
            threats, including malware, unauthorized access, and data breaches.
        </p>


        <div class="subtheme">Installing a Host Intrusion Detection Software</div>

        <p>
            The HIDS that I am going to install is called <b>Wazuh</b>. Wazuh is an open-source security detection, visibility, and compliance platform designed
            to help organizations monitor and protect their IT infrastructure. It includes capabilities such as host-based intrusion detection, log analysis,
            file integrity monitoring, and security analytics, all integrated into a single solution. It was recommended to us by the university lecturers.
            </br>
            Wazuh's documentation was excellent, providing comprehensive information on the installation and configuration of servers, dashboards,
            and nodes. However, the process of installation can be quite involved and may require significant troubleshooting. Due to the complexity involved,
            I will not be covering every step of the installation process, but will focus on the most important parts.
        </p>


        <div class="image">
            <img src="../assets/hids/wazuh-config.png" alt="">
            <a><i>
                    The first step of the proccess was to download the config that you see and configure all the nodes,servers and dashboard. I was only using it on a single
                    ubuntu image so that was an easy process. After configuring the .yml file, I ran a script that created a .tar installation file for me.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hids/hids (3).jpg" alt="">
            <a><i>
                    I continued with the installation process, there were at least 4 different installations for each of wazuh's aspects(node, servers and dashboard).
                    This is how the dashboard looked like after installing everything. Now I had to setup the actual clients.
                </i></a>
        </div>







        <div class="subtheme">Installing a Host Intrusion Detection Software on a Client Machine</div>

        <p>
            What followed was configuring a client for the server/dashboard I just installed. Thankfully this time the process was simplyfied by the dashboard tutorial.
            A command for an operation system of your choice(clients agent os) was created automatically. That command installs the wazuh agent and configures it to connect with the
            host automatically. Here's how the process looked like:
        </p>

        <div class="image">
            <img src="../assets/hids/wazuh-add-agent.png" alt="">
            <a><i>
                    This is the create new agent page. At the bottom of the picture you can see the command that installs the clients application and connects the machine to the
                    server we've configured.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/hids/hids (2).jpg" alt="">
            <a><i>
                    Here I had to additionally configure the client application. But here's an image of how the client's application looks like.
                    This was installed automatically with the command.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hids/client-page.png" alt="">
            <a><i>
                    This is how the client's machine page with stats and performances looks like after configuring the client.
                </i></a>
        </div>




        <div class="subtheme">Running Examples</div>

        <p>
            Now I will try some use cases to see if the client is configured correctly. Here you can also see how the system works.
        </p>

        <div class="image">
            <img src="../assets/hids/hids (1).jpg" alt="">
            <a><i>
                    Let's try with the most basic example. Here I entered a wrong password a couple of times on the client's log in page.
                </i></a>
        </div>



        <div class="image">
            <img src="../assets/hids/hids (4).jpg" alt="">
            <a><i>
                    In this page you can see the reaction of the dashboard. If you zoom in on the page, you can see there have been 2 authentication failures.
                    So it works!
                </i></a>
        </div>





        <div class="subtheme">Afterthoughts</div>

        <p>
            I have mixed feelings about using a Host-Intrusion System. While it is commonly installed on web servers, it can place a 
            significant burden on client resources. Given the sheer size of servers, the idea of using a HIDS to monitor the system 
            full-time seems overwhelming. I believe there should be an alternative to this approach, but I have not been able to gather 
            more information on the subject.
            </br></br>
            In my opinion, a more practical use of HIDS would be to install it on workers' workstations or laptops, where it can monitor 
            for suspicious activity or malware infections. However, I must acknowledge that installing HIDS, along with web application 
            and packet filter firewalls on a web server, would make for a robust and challenging system to breach. Despite the resource 
            requirements, I think HIDS can be a valuable tool for enhancing the security of an organization's IT infrastructure.


        </p>






    </div>

</body>

</html>