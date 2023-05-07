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
        <h1>IT System Hardening + Common Vulnerabilities and Exposures (CVE's)</h1>
    </header>

    <div class="container">

        <p>
            This is the final page of this Body of Knowledge I am writing. This topic will be split into two smaller ones.
            I will be covering System Hardening and Common Vulnerabilities and Exposures. For each of them I will explain the subject,
            give some important details and do some exercises connected to them. Finally i will give my thoughts and share the commonalities
            between the subjects.
        </p>

        <div class="image">
            <img src="../assets/hardening-cve/intro-hardening.png" alt="intro">
        </div>

        <div class="subtheme">IT System Hardening</div>

        <p>
            Systems hardening is a collection of tools, techniques, and best practices to reduce vulnerability in technology
            applications, systems, infrastructure, firmware, and other areas. It is the process of securing an IT system by reducing
            its attack surface and minimizing its vulnerability to potential threats. Here are the key concepts:
        </p>

        <div class="bullet">
            <ul>
                <li><b>Attack surface</b>: This refers to the various points of entry or attack that exist in an IT system. The larger the attack surface, the greater the potential vulnerability.
                </li>

                <li><b>Vulnerabilities</b>: These are weaknesses or flaws in an IT system that can be exploited by attackers to gain unauthorized access, steal data, or cause other harm.
                </li>

                <li><b>Threats</b>: These are potential risks or dangers that could impact an IT system, including malware, viruses, hackers, and other malicious actors.actions.
                </li>

                <li><b>Security controls</b>: These are measures put in place to protect an IT system from potential threats. Examples include firewalls, antivirus software, access controls, and intrusion detection systems.
                </li>

                <li><b>Patching</b>: This is the process of updating or fixing vulnerabilities in software or systems. Regular patching is a critical part of IT system hardening.
                </li>

            </ul>
        </div>


        <div class="subtheme">How is my PC hardened?</div>

        <p>
            I am on a Windows 10 machine. I am installing every windows patch on the same day it comes out. Since it is a Windows machine
            it cannot be pinged on any network. All my ports in an ignored states. I've set up my outbound rules so that no installed application can access the internet without my permission. Everything I do for university is on my GitHub account (documents, pictures, code, etc.) so I don't lose progress and can access my work from any other computers. Everything important is on
            my personal external hard drives. So if my PC suddenly gets destroyed I won't lose anything, most of the pictures I take are on my phone and are in turn saved on iCloud. I have a separate browsers, one in which javascript is disabled for random scrolling, and firefox for essential work. All passwords for my accounts are 16 charachters alpha-numeric, and none are saved on my machine. When I use the internet I am constantly connected to my VPN. The Firewall of my TP-Link router is setup in such a way that devices can't contact each other. In essence, I would say yes, my computer is hardened. The only weak link left is me, someone could barge in to my room and torture me for my accounts, who knows?
        </p>


        <div class="subtheme">Setting up SSH two-factor authentication</div>

        <p>
            The exercise for this week is installing multi-factor authentication for ssh on my ubuntu vm. 2FA makes it much harder for an attacker to gain unauthorized access to a system. It reduces the likelihood of password cracking and mitigates the impact of database/password leaks. Now here's how I set it up on my vm:
        </p>


        <div class="image">
            <img src="../assets/hardening-cve/hard1-qr-to-app.png" alt="hardening">
            <a><i>First step was to install the google-authenticator package from the app store. Then when started, it requires first-time setup. It showed a qr code which I had to scan with my authentication app.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hardening-cve/hard2.PNG" alt="hardening">
            </br><a><i>Next step was to choose an authentication mobile application. I chose to use microsoft authentication since I already had it installed. It prompt me to
                    scan the qr code.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hardening-cve/hard3.PNG" alt="hardening">
            </br><a><i>After I scanned it I instantly started receiving codes.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hardening-cve/hard4-after-mobile-setup.png" alt="hardening">
            <a><i>Here I setup the rest of the first-time boot setup.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hardening-cve/hard5-configured-ssh.png" alt="hardening">
            </br><a><i>Then I configured the SSH configuration to require response authentication.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hardening-cve/hard6-configure-ssh-one-time-login.png" alt="hardening">
            <a><i>Then I had to configure the PAM config file, so that it uses the google authenticator.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/hardening-cve/hard7-worked-with-code.png" alt="hardening">
            </br><a><i>After restarting the ssh process, I tried to connect to the ubuntu image with MobaXterm. It prompted me for my password and then verification code.
                    Once I entered them, It worked.
                </i></a>
        </div>


        <hr style="height: 3px; background-color: #34444A;">


        <div class="subtheme">What are Common Vulnerabilities and Exposures?</div>

        <p>
            CVE is a database of publicly deisclosed computer security vulnerabilities and exposures that are assigned unique identifiers. It is critical
            to the cyber security ecosystem by providing a standardized way of identifying and tracking vulnerabilities and exposures. By using them, professionals
            in the IT industry can work together to improve the security of systems and applications and reduce the risk of cyber attacks. In simpler words:
            Simplifying the exchange of data on weak points, for example between manufacturers, and to enable clear identification.
        </p>

        <div class="image">
            <img src="../assets/hardening-cve/intro-cve.png" alt="intro">
        </div>

        <div class="subtheme">How do we use it in practice?</div>

        <p>
            Let's say I found a vulnerability in a vendor's device/software, what do I do? Here are the steps:
        </p>

        <div class="bullet">
            <ul>
                <li>First step would be to check if the vulnerability already has a CVE identifier. To do that I would search for keywords or description of the vulnerability.
                </li>

                <li>If it exists, I can use the identifier to report the vulnerability to the vendor. Then I can use the identifier + craft report and detailed description of what I found (i.e. impact, recomendations).
                </li>

                <li>But if it doesn't I submit everything on the CVE database, someone has to grade it and how critical it is. Then it is posted on the database, but only the
                    cve identifier and maybe the name of the CVE.
                </li>

                <li>Now after you have the identifier and the reports, you can contact the vendor and tell them about what you found. It is a common practice to give them at
                    least a month, before you fully disclose the CVE on the database. This is how the process usually ends.
                </li>

            </ul>
        </div>

        <div class="subtheme">How do we use it in practice?</div>

        <p>
            As an exercise I will show an already existing and disclosed CVE. Afterwards I will show how a vulnerability is calculated. Here's the explanation:
        </p>

        <div class="image">
            <img src="../assets/hardening-cve/cve1-choice-cve.png" alt="hardening">
        </div>

        <p>
            This is an example CVE I found with identifier CVE-2014-5669. It refers to a vulnerability in the 9gag android mobile application version 2.4.XX.
            It says that on that version, the application doesn't verify the SSL certificates. That could allow man-in-the-middle attacks to spoof servers, or other
            user's credentials or personal data. Now let's recalculate the impact that it could have on the app:
        </p>

        <div class="image">
            <img src="../assets/hardening-cve/cvss.png" alt="hardening">
            <a><i> CVSS is the algorithm a new vulnerability goes through when posted on the CVE database. Here's my calculation of the same CVE. I got the score of 5.5.
                    0.1 difference to the actual score.
                </i></a>
        </div>


        <div class="subtheme">Afterthoughts</div>

        <p>
            <b>Hardening</b> is a concept that I've partially covered in every single BoK topic up until now. It is very important to understand your systems and
            to know which parts are open to the world and which ones not. And of course shrink the area of attack as much as possible. Installing two-factor authentication
            is a great example of hardening and how you can protect/prevent attacks.

            </br></br>

            <b>CVEs</b> are an essential tool for identifying and tracking software/hardware vulnerabilities, which are critical to the overall cyber security field.
            It allows researchers and vendors to communicate effectively in a common language. I personally am very thankful to the people who hold these databases.
            However in a perfect world, CVE databases would be open to the public. That way there would be greater transparancy and accountability in the vulnerability
            management process. If CVE databases were managed by a more diverse group of stakeholders, such as an independent consortium of security experts, this could help to ensure that vulnerabilities are identified and addressed more quickly and efficiently, and that the interests of all stakeholders are taken into account.
            (I say that, because from what I've read vendors could remove their CVEs from the database). But that would be really farfetched. After all the main idea
            of CVEs is to have unique identifiers for vulnerabilities, it is not designed to be a complete and verified database of all known vulnerabilities in any product.
        </p>




</body>

</html>