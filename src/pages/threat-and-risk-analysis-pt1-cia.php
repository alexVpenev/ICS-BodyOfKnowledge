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
        <h1>Threat & Risk Analysis part 1</h1>
    </header>
    <div class="container">
        <p>In this topic I'm going to ignore the hackers and the type of hackers there exist, and I am going to focus on the different types of hacks
            bad individuals will try to carry out on systems. Afterwards I'm going to focus on how a cyber security expert can determine which parts
            of the systems he is maintaining can be compromised using the <b>CIA triad</b> and determine the probability and impact they can leave.</p>
        <div class="subtheme">Kinds of Security Threats</div>
        <p>
            As technology continues to advance, the threat of cyber attacks is becoming increasingly prevalent.
            Cyber attacks are malicious attempts by hackers to breach a system and obtain sensitive information or exploit the system for their benefit.
            In this document, we will discuss the various types of cyber threats that exist and how they can impact our systems.
        </p>

        <div class="bullet">
            <ul>
                <li><b>Malware (virus, trojan horse, worms, etc.)</b> Malware is a type of software that is designed to
                    infiltrate a system without the user's knowledge.
                    This can lead to the installation of malicious software or the stealing of sensitive information.
                </li>

                <li><b>Spam</b>: Spam is unsolicited email or messages that are sent in bulk to a large number of recipients.
                    It is often used as a method for distributing malware or phishing attacks.
                </li>

                <li><b>Phishing</b>: Phishing is a type of cyber attack that involves the use of fraudulent emails or
                    messages to trick users into giving up their personal information, such as usernames and passwords.
                </li>

                <li><b>Spear phishing</b>: Spear phishing is a more targeted version of phishing, where the attacker
                    specifically targets individuals or organizations with personalized messages that appear to be from a trusted source.
                </li>

                <li><b>Adware</b>: Adware is software that displays unwanted advertisements to users.
                    While it may not be inherently malicious, it can still be a nuisance and can lead to the installation of other unwanted software.
                </li>

                <li><b>Man-in-the-middle attack</b>: A man-in-the-middle attack occurs when a hacker intercepts communication
                    between two parties, allowing them to eavesdrop on conversations or steal sensitive information.
                </li>

                <li><b>Ransomware</b>: Ransomware is a type of malware that encrypts a user's files and demands a ransom payment in exchange for the decryption key.
                </li>

                <li><b>Denial of Service (DOS and DDOS)</b>: DOS and DDOS attacks are designed to overwhelm a system with traffic,
                    making it unusable for legitimate users.
                </li>

                <li><b>Advanced persistent threats</b>: Advanced persistent threats are a type of cyber attack that involves a
                    prolonged and targeted effort to breach a system, often by a well-funded and organized group.
                </li>

            </ul>

            <div class="subtheme">The CIA triad</div>


            <p>
                Now I'm going to cover a "matrix" that helps security proffesionals evaluate security risks to their data called the CIA triad.
                </br></br>
                The CIA triad is a concept in information security that helps organizations protect their sensitive data from various threats.
                It is composed of three principles: confidentiality, integrity, and availability. Here's a picture showing the triad and a short
                explaination of the principles:
            </p>

            <div class="image">
                <img src="../assets/threat-risk-analysis-pt1/cia-triad.png" alt="cia-triad">
            </div>

            <ul>
                <li><b>Confidentiality</b> refers to the protection of sensitive information from unauthorized access, disclosure, or theft.
                    This can be achieved through measures such as encryption and access controls.
                </li>

                <li><b>Integrity</b> is the assurance that data has not been tampered with or altered in any way.
                    Maintaining data integrity involves implementing processes such as data backups, checksums, and digital signatures.
                </li>

                <li><b>Availability</b> refers to ensuring that data is accessible to authorized users whenever they need it.
                    This can be achieved through the use of redundancy, failover systems, and disaster recovery planning.
                </li>
            </ul>

            <p>
                Maintaining the principles of the CIA triad is essential for organizations to protect their sensitive information from
                various threats. Failure to implement measures to maintain confidentiality, integrity, and availability can have serious
                consequences. For instance, if data integrity is compromised, for example by tampering, the accuracy and reliability of information
                can be called into question, leading to errors and poor decision making.
                </br></br>
                Furthermore, if confidential information is not protected properly, it can be exposed to unauthorized access or disclosure,
                leading to reputational damage, legal liability, and financial losses. Similarly, if data is not available when it is needed,
                operations can be disrupted, leading to loss of productivity and revenue.
                </br></br>
                In short, the consequences of not maintaining the principles of the CIA triad can be severe, making it imperative for
                organizations to implement measures to ensure the confidentiality, integrity, and availability of their sensitive information.
            </p>

            <div class="subtheme">Risk analysis</div>

            <p>
                IT risk analysis is a process of identifying and evaluating potential threats to an organization's information technology infrastructure,
                systems, and data. Defensive security controls are implemented to mitigate these risks and lower the likelihood of a security breach.
                Threats to an organization's IT infrastructure can come from various sources such as cybercriminals, script kiddies, user error, or natural calamities.
                </br></br>
                To determine the potential impact of these threats, a risk analysis is performed. A risk analysis helps in identifying
                the probability of the threat occurring and the potential impact it can have. The impact can be defined in terms of various
                factors such as costs, downtime, customer claims, fines, environmental damage, injuries, or even loss of human lives.
                </br></br>
                After determining the risk levels for various threats, appropriate security controls can be implemented. Security
                controls can be implemented at various levels such as physical, infrastructure, application, and organizational levels.
                Overall, IT risk analysis is a crucial step in ensuring the security and continuity of an organization's IT infrastructure.

            </p>

            <div class="subtheme">Exercise</div>

            <p>
                So to show how a potential risk analysis might look like, I decided to show one for a web application I did when I was in my 3rd
                semester. The web application was basically facebook market place. The seller creates an offer, and if someone(client) likes it, he can
                directly contact the seller, and they can discuss the transaction between themselves. The threads I have chosen to cover were the security threads
                marked as top 10 by OWASP. Here's the risk analysis I did in a cyber security workshop for that app last year:
            </p>

            <div class="image">
                <img src="../assets/threat-risk-analysis-pt1/risk-analysis.png" alt="risk-analysisd">
            </div>

            <div class="subtheme">Afterthoughts</div>

            <p>
                From malware and phishing attacks to more sophisticated attacks like advanced persistent threats, it's crucial for
                individuals and organizations to be aware of these threats and take necessary measures to protect their sensitive
                information. I find that the CIA triad, accompanied by risk analysis techniques, is a great way for a cybersecurity
                professional to organize and prioritize which aspects of their hardware/software they must focus on protecting.
                </br></br>
                Lastly, although I previously had a couple of risk analysis lectures and exercises at university,
                doing this document and extra reading on the subject gave me another perspective on the topic.
            </p>


        </div>

    </div>

</body>

</html>