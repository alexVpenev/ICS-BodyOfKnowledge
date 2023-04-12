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
        <h1>Law & Ethics and Responsible Disclosure + GDPR</h1>
    </header>



    <div class="container">


        <!-- <div class="subtheme">Law vs Ethics</div> -->

        <div class="image">
            <img src="../assets/ethics/law-vs-ethics.png" alt="intro">
        </div>

        <p>
            As Cyber Security Professionals our job is to protect the Confidentiality, Integrity and the Availability of systems and data, that we are constructing,
            maintaining or penetrating. That means that more often than not, we will typically have access to these systems and data beyond what others would have.
            We have the guidelines of the law, but it only tells us what is permissable and what is not, but just because things are legal or illegal, it doesn't necessarily
            mean that what we do is right or wrong. This is where Ethics come into play.
            </br></br>
            Ethical considerations go beyond what is simply legal or illegal. We, as Professional and as People, must consider the potential impact of our actions and descisions
            on individuals, organizations and society as a whole. Fact: All of the highly regarded cyber security certifications have a code of ethics. If this code
            is broken by the holders of the certificates, they will be taken away. The key takeaways of the codes are: first, always follow the law, always make sure that
            you stay on the right side of it, even if the client asks us to do. Secondly, act honorably, do not sacrifice your own principles to serve someone else. And
            finally call out if you see something that is incorrect/illegal.
            </br></br>
            The key thing to take away from all of this is "Just because you can, doesn't mean you should!".
        </p>



        <div class="subtheme">Responsible Disclosure</div>

        <p>
            First I want to start with explaining what Responsible Disclosure is. Responsible Disclosure refers to the process of reporting security
            vulnerabilities in software, hardware or other computer systems to their respective vendors or owners. The idea behind responsible disclosure
            is to give the responsible parties an opportunity to fix the problem before it can be exploited by attackers or malicious actors. This way, it helps
            to protect the security and privacy of users of the affected software or system by preventing attackers from exploiting the vulnerability before it can be fixed.
            </br></br>
            There are many examples where the security researchers that disclose found vulnerabilities are rewarded by the government/company. Examples: The Dutch government
            rewards everyone who finds a vulnerability. Sony for example has a platform for found vulnerabilities in their Play Station consoles. When an exploitable
            vulnerability is found by a security analyst, he can post a document describing the vulnerability on the website, and he will be rewarded 10 000 dollars.
        </p>



        <div class="subtheme">Examples of Cyber Crime</div>

        <div class="image">
            <img src="../assets/ethics/ex-nap.png" alt="intro">
        </div>

        <p>
            On 15th of July 2019, a massive data breach of the National Revenue Agency (NRA) of Bulgaria was revealed.
            The hacker responsible for the breach sent an email to major Bulgarian media outlets, detailing the scope of the attack.
            The leaked data amounted to 57 folders with .csv fetailing the names and national identification numbers of some 5 million
            Bulgarian citizens, as well as records of revenues, tax and social security payments, debts, online betting data and company
            activities dating back as early as 2007. According to some researchers, nearly every adult in the country had their personal
            data compromised.
            </br></br>
            The Events: On 15 July, an anonymous hacker emailed Bulgarian media outlets with the data stolen from SQL databases.
            The data was stolen using SQL injection and randomly collected from the server. In his email, he called the government
            "retarded" and its computer security "parodic". On the following day, the NRA confirmed the authenticity of the data.
            </br></br>
            A white hat hacker has been reporting serious vulnerabilities in the Bulgarian Commission for Personal Data Protection.
            According to outlets, he has been "begging" for a fix of these issues for three years. But the commision did not take any action
            to protect the data.
            </br></br>
            I am truly sad about the state of which the government's cyber secirity is in to this day. Me, my family and everyone I know
            has fallen victim to this absurd data breach. Successive governments have spent 1.15 billion euros on e-governement projects
            since 2002, producing no results. A government report in 2018, indicated a very low level of cybersecurity at government
            eneties, citing a lack of qualified IT employees and noncompetetive salaries compared to the private sector. As they say, that
            is what corruption does: You steal 60 million and inflict damage to the country equal to 600 million.
        </p>

        <div class="image">
            <img src="../assets/ethics/ex-china.png" alt="intro">
        </div>

        <p>
            Shanghai National Police Database was leaked. A hacker by the acronym of ChainaDan publicly sold it on the Internet
            at the price of 10 Bitcoins. Here is the post the hacker made in a breach forum:
        </p>

        <div class="image">
            <img src="../assets/ethics/chinadan.png" alt="intro">
        </div>

        <p>
            The data contained the police records of over 1 billion people. Data Details: Name, Address, Birthplace, National ID Number,
            Mobile Numbers, All Crime/Case details and "Confidence raiting" of the people with police records(This may be apart of the social
            credit system China has for their citizens). The data amounted to 23 Terrabytes. According to reports, the data was continuously
            downloaded over the course of 14 months, supposedly not to trip any red wires. Reports say that there was only a single login to
            the database, no MFA or whitelisted IPs. Supposedly the credentials were found in a git repository, that included the enviroments file.
        </p>

        <div class="image">
            <img src="../assets/ethics/breach-example.png" alt="intro">
        </div>

        <div class="image">
            <img src="../assets/ethics/breach-example.png" alt="intro">
            <img src="../assets/ethics/shang-credentials.png" alt="intro">
        </div>

        <div class="subtheme">GDPR</div>

        <p>
            GDPR stands for General Data Protection Regulation. It is a regulation implemented by the European Union (EU) in May 2018 
            to protect the personal data and privacy of EU citizens.
            </br></br>
            The GDPR applies to any organization that handles personal data of EU citizens, regardless of weather the organization is
            based in the EU or not. It applies to any personal data that can be used to identify an individual. The violation of the GDPR
            establishes penalties to organizations that violate its provisions. The fines vary, either 4% of the organization's global revenue 
            or 20 million euros, whichever is greater. Thankfully this regulation is taken very seriously by organizations, and has led them
            to heavily invest in measures to ensure complience with the GDPR.
            </br></br>
            Under the GDPR, individuals have the right to know what personal data is being collected about them, how it is being used, 
            and the right to access and correct that data. Organizations are required to obtain explicit consent from individuals before 
            collecting and using their personal data, and they must take appropriate measures to protect that data from unauthorized 
            access, use, or disclosure.
            </br>
            For an example I requested all information/data that Netflix has collected from me. It took them 2 days to send me back that data, 
            but here is what I received:
        </p>

        <div class="image">
            <img src="../assets/ethics/netflix.png" alt="intro">
        </div>

        <p>
            After going trough all the data, I got surprised about how much they are actually collecting. It included things that I would
            have never thought of. Every device type and its IP address that has logged into the account, everything that a profile has watched and searched for,
            every session's duration, time and IP, the clickstream of every profile(did the user find what he watched or actually searched for it), every netflix game
            the user has played and the times when he played it. This is a paid service after all, I can only imagine what other free platforms collect. 
        </p>

        <div class="subtheme">Afterthoughts</div>

        <p>
            The Law & Ethics part of this topic, I've already known and agree with. It doesn't even only tie in to cyber security. A man should know
            what is right or wrong, and act honorably even if the law says it or not. I was already familiar with Responsible Disclosure, I have been following
            the PlayStation's vulnerabilities for a long time. I truly respect the organizations that actually compensate the people that find these vulnerabilities and
            disclose them to their respectful owners/vendors. I think every company should focus on rewarding these people's knowledge and skills, because they are
            actually protecting the customers in the end, and I am confident that if organizations focus on giving out greater rewards, there will be actually less hacks which in
            return will cause way less losses. As for the GDPR, I absolutely agree with it, I don't even think it is enough. Collected information about the preferences of
            the users should be limited in my opinion. Targeted ads have gone too far and we can go back a bit. Overall I learned a lot writing this topic.
        </p>




    </div>
</body>

</html>