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
        <h1>Footprinting, Reconnaissance and Social Engineering</h1>
    </header>
    <div class="container">

        <p>
            In this topic, I will take a closer look at the first step of the Cyber Kill Chain, which is none other than Footprinting Reconnaissance
            and Social Engineering. From my experience, this phase is arguably the most crucial step in any hacking attempt, as it sets the stage for
            the rest of the process. I'll begin by explaining what IT Reconnaissance is all about, exploring its different forms, and show some
            examples to give you a better sense of its practical implications.
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/intro.jpg" alt="intro">
        </div>


        <div class="subtheme">Footprinting, Reconnaissance and Social Engineering</div>

        <p>
            To launch a cyber security attack, the first crucial step is gathering information about the intended victim. This process requires a
            significant amount of time to plan and research the target of interest, whether it be an individual, organization or facility, in order
            to identify potential vulnerabilities. This initial step can be broken down into two stages: passive and active.
            <br><br>
            The <b>Passive</b> stage involves scouring public information sources such as emails, domains, job listings, social media accounts, and telephone numbers
            to learn more about the target. Another tactic involves examining data breaches to locate additional information on the target, such as passwords,
            addresses, and documents. This stage may also involve social engineering, where the attacker attempts to contact employees, engage in small talk and
            extract sensitive information. While technically legal, this stage is considered unethical due to the exploitation of public information.
            <br><br>
            The second stage of the reconnaissance process is the <b>Active</b> stage, where the attacker begins to interact with the victim. After collecting as much
            information as possible during the passive stage, the attacker moves on to active reconnaissance. This stage involves probing the network or system
            for open ports and services, utilizing technical tools like nmap, port scanning, banner grabbing and vulnerability scanners. The ultimate objective
            of this phase is to locate a weakness in the target's security.
        </p>

        <div class="subtheme">The Process</div>

        <p>
            First, a hacker would start gathering information on the targets website. Things that a hacker would look for are e-mails and names. This information could come in
            handy if the hacker was planning to attempt social engineering against the company. For this example I've chosen to do reconnaissance for the high school I studied in.
            Here's their website(gre-rakovski.com):
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-website.png" alt="gre-website">
        </div>

        <p>
            Next the hacker would get the IP address of the website. I used a website that looks up ips by a domain.
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-ip.png" alt="gre-website">
        </div>

        <p>
            Next the hacker would Ping the server to see if it is up and running. There's no point in trying to hack an offline server. If all packets go trough then the server is up.
            Here's a screenshot:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-ping.png" alt="gre-website">
        </div>

        <p>
            Next a hacker would do a Whois lookup on the company website. This usually yealds huge amount of information about the company. You usually get company emails,
            address names, date information, name servers and more. In my case most of the information I've gathered was "REDACTED FOR PRIVACY". But that shouldn't stop me of
            following the next steps. Here's the output:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-whois.png" alt="gre-website">
        </div>

        <p>
            A hacker would try harnessing more information about the the company, by using external resources. I will use theHarvester with combination of IntelX, let's see
            what I will find:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-harvester.png" alt="gre-harvester">
        </div>

        <p>
            I found two of my teachers emails in that list, but let's keep going. What can we find in the IntelX search engine?:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-search-res.png" alt="gre-harvester">
        </div>

        <p>
            I am quite amazed at what I could find. Scrolling down through the results, most of the information was leaked. There were stuff like subsidiaries,
            exceel files with email addresses, search history and passwords of browsers/computers. Thankfully to access all of that information, you'll need an intelx license.
            Here's one of the outputs.
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-intel1.png" alt="gre-harvester">
        </div>

        <p>
            Another search that a hacker would do is check if the site has a robots.txt file. This files displays all of the directories and pages on the website that they wish to
            keep anonymous from search engine spiders. Occasionally you might come across some valuable information that was meant to be kept private in that file. Here's the output:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-robots.png" alt="gre-harvester">
        </div>

        <p>
            Some additional things that I found are: There are 3 user accounts that upload posts on the websites. The account names are nico, nkondeva and admin. Here are screenshots
            of other interesthings that I found:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-exp-1.png" alt="gre-exp-1r">
        </div>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/gre-exp-2.png" alt="gre-exp-1r">
        </div>

        

        <div class="subtheme">Exercises</div>

        <p>
            I will cover the exercises, that are given by uni, which I couldn't cover in the previous example. Here's the output for tracerouting the fontys.nl website:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/exer-traceroute.png" alt="gre-exp-1r">
        </div>

        <p>
            Find out which DNS and e-mail servers are used by Fontys and FHICT:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/exer-dns.png" alt="gre-exp-1r">
        </div>

        <p>
            Find out how the frontpage of nu.nl looked like 10 years ago:
        </p>

        <div class="image">
            <img src="../assets/footprinting-recon-social-eng/exer-wayback.png" alt="gre-exp-1r">
        </div>

        <div class="subtheme">Aftertoughts</div>

        <p>
            After doing recon on the high school I studied at, I understand the importance of this step. I couldn't believe some of the stuff I found, and I think
            I could even exploit some of the stuff I found. And that is scary considering the beginner level of knowledge I have. And I haven't even scanned
            any ports, vulnerabilities, services or software/os versions, because it didn't feel right, on top of that it is illegal and unethical. Honestly, I don't like what I found.
            However, after delving into this topic, I have come to appreciate the importance of the Footprinting stage in the Cyber Kill Chain more than ever before.
        </p>




        


    </div>

</body>

</html>