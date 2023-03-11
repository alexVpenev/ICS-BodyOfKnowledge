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
        <h1>Installing Vulnerable web app Juice Shop and DVWA</h1>
    </header>
    <div class="container">
        <p>
            The upcoming topic is distinct from the previous ones as it will entail a demonstration of the steps I have taken to install vulnerable web applications.
            As part of this specialization, I will be required to apply my knowledge. However, since I cannot do so in a real-world setting, I will need to install
            two web applications, namely DVWA (Damn Vulnerable Web Application) and Juice Shop. The primary objective behind the creation of these applications is
            to aid cybersecurity professionals in testing and developing their skills in a legal environment. Essentially, they serve as a practice environment,
            which will enable me to learn new concepts and effectively explain them in the subsequent topics of the BoK.
        </p>

        <div class="subtheme">Installing the DVWA</div>
        <p>
            After gaining access to the vSphere Client(An Online Virtual Machine Client) provided by fontys, I started with deploying a dvwa virtual machine from a template:
        </p>

        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/dvwa-template.png" alt="dvwa-template">
        </div>

        <p>
            Before finally being able to deploy it I just configured the hardware, so it has an extra gb of ram and connected it to the dhcp server in which I have
            been assigned the ports from <b>192.168.147.156</b> to <b>192.168.147.160</b>.
        </p>

        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/dvwa-hardware.png" alt="dvwa-hardware">
        </div>

        <p>
            The image was a simple ubuntu 18lts bionic running an apache2 server. I waited a for the image to run the apache2 server and then updated and fully upgraded the system.
        </p>
        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/dvwa-screenfetch.png" alt="dvwa-screenfetch">
        </div>
        <p>
            And finally, the most important part of the deployment is to check if the image can be accessed trough my kali machine.
        </p>
        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/dvwa-kali.png" alt="dvwa-kali">
        </div>
        <p>
            As you can see the installation was a success.
        </p>









        <div class="subtheme">Installing the Juice Shop</div>
        <p>
            Unfortunately, there was no template for the juice shop, so I figured I would create an ubuntu image on the same network, and host a docker container with the juice shop.
            Here's how I did it:
        </p>
        <p>First I had to install docker.</p>

        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/ubuntu-install.png" alt="ubuntu-install">
        </div>

        <p>Then I pulled and ran the image on port 80.</p>

        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/ubuntu-juice.png" alt="ubuntu-juice">
        </div>

        <p>Here's the containerized app running in ubuntu:</p>

        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/ubuntu-run-juice.png" alt="ubuntu-run-juice">
        </div>

        <p>And finally here's the image opened from kali on the same network:</p>
        <div class="image">
            <img src="../assets/installing-dvwa-juiceshop/ubuntu-kali.png" alt="ubuntu-kali">
        </div>


        <div class="subtheme">Afterthoughts</div>

        <p>
            The process of installing the two images was pretty simple. I've done these kinds of tasks many times before.
            I think the concept of these hacking "playgrounds" is really cool, and I'm glad that people create these
            open-source projects to help others learn about cybersecurity
        </p>








    </div>

    </div>













</body>

</html>