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
            The HIDS that I am going to install is called <b>Wazuh</b>.
        </p>

        <div class="subtheme">Installing a Host Intrusion Detection Software on a Client Machine</div>

        <p>
            Explain how to setup Client.
        </p>

        <div class="subtheme">Running Examples</div>



        <div class="image">
            <img src="../assets/hids/hids (1).jpg" alt="">
        </div>

        <div class="image">
            <img src="../assets/hids/hids (2).jpg" alt="">
        </div>

        <div class="image">
            <img src="../assets/hids/hids (3).jpg" alt="">
        </div>

        <div class="image">
            <img src="../assets/hids/hids (4).jpg" alt="">
        </div>

        <p>



        </p>






    </div>

</body>

</html>