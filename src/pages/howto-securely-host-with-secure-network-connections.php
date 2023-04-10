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
        <h1>How to securely host a website with Secure Network Connections(HTTPS/TLS/SSH)</h1>
    </header>



    <div class="container">

        <p>
            In this topic I will be focusing on Secure Network Connections. I will try to go in depth into the technologies I will use, but
            mainly I will be focusing on showing practical examples. I will show the steps I took to secure a website with https and finally
            give my thoughts about the processes and the subject.
        </p>


        <div class="image">
            <img src="../assets/ssl/intro.png" alt="intro">
        </div>

        <div class="subtheme">HTTP and HTTPS</div>

        <p>
            As we already know, HTTP is a protocol that allows communication between a browser and a web server. Each request is independent
            of other requests/responses, and each HTTP request contains a method, header and body. Here's an example of an HTTP request:
            <b>GET localhost:80/hello Body:"{"name": "Ivailo"}"</b>
            </br>
            There could be a lot more additions to an http request, but these are the basic parts.
            </br></br>
            In the early stages of the internet, people(mainly military bases) were using http to communicate between each other. They quickly realised that
            this communication could be very easily intercepted and even people could be impersonated. At the same time three inventor named Ron Rivest, Adi Shamir and
            Leonard Adleman developed the RSA encryption. Although initially unsure of their creations practicality, it turned out that it has its use in secure verification
            and digital verification. Once a RSA connection has been established between two hosts, it will be very hard to decrypt the trafic. 
        </p>


        <div class="image">
            <img src="../assets/ssl/rsa.png" alt="rsa">
        </div>

        <p>
            The strength of the RSA encryption lies on the difficulty of factoring large prime numbers. Without going into too much detail, the process in simple terms 
            goes like this: <b>Let's say Alice and Bob want to communicate securely over the internet. Alice has a lock and a key. She sends the lock to Bob, he locks up
            a secret message and sends it back to her. Now she can use her key to unlock Bob's secret message. Now if Alice wants to send a secret message to Bob, they would
            reverse their roles in the example.
            </b>
        </p>

        <p>
            Although an oversimplification of the encryption process, this is essentially what happens. Now HTTPS is essentially HTTP, but it uses encryption to make the
            communication encrypted.
        </p>

        <div class="subtheme">SSH</div>

        <p>
            SSH(Secure Shell) is a network protocol that allows secure remote access to a computer or network. It uses the same RSA principle, I've described in above,
            to establish a connection between hosts. It is used by network administrators and developers to securely transfer files and data between systems. It is 
            widely regarded as secure and reliable way to access and manage remote systems. If a bad actor misses the oppurutnity to capture the estalishing of a connection
            it will be very hard to compromise the communication.
        </p>

        <div class="subtheme">Examples and Exercises</div>


        <div class="image">
            <img src="../assets/ssl/ssh-establish.png" alt="ssh">
            <img src="../assets/ssl/ssh.png" alt="ssh">
            <a><i>
                For the rest of the exercises I will be running the commands into MobaXTerm(an ssh client for Windows, which uses Putty).
                This is how establishing a connection looks like using SSH.
            </i></a>
        </div>


        <div class="image">
            <img src="../assets/ssl/no-ssl.png" alt="ssl">
            <a><i>
                I will now be making this apache2 page use ssl encryption. This is how the page looks without SSL.
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/ssl/1.png" alt="ssl">
            <a><i>
                In this step I am creating the ssl certificate for the new website.
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/ssl/2.png" alt="ssl">
            <img src="../assets/ssl/3.png" alt="ssl">
            <a><i>
                Here I created the config while setting the SSL Parameters to true. And in the second image I am creating a web page, which just has a H1.
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/ssl/4.png" alt="ssl">
            <img src="../assets/ssl/5.png" alt="ssl">
            <a><i>
                After restarting apache and a2ensite I successfuly ran the new website using HTTPS and SSL.
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/ssl/6.png" alt="ssl">
            <a><i>
                This is what the certificate looks like.
            </i></a>
        </div>


        <div class="subtheme">Afterthoughts</div>

        <p>
            Since I am coming from a Software Profile, I already knew how HTTP requests work and what they consist of. I have also had some experience with RSA encryption,
            even have done the math at some points. During the writing of this topic I learned what SSL certificates looked like and actually deployed an apache2 website
            that uses SSL. 
        </p> 





    </div>
</body>

</html>