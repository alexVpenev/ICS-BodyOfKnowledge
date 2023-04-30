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
        <h1>VPN: How to manage a Web Shop with Secure Remote Access and Management by VPN</h1>
    </header>



    <div class="container">

        <p>
            This will be a more practically aligned topic. As usual, I will start with going a bit in depth about the topic.
            Then, since I already have a VPN setup on the server this website is hosted on, I will show the benefits and
            functionalities that it offers. And finally I will show the steps of the process of configuring a VPN using
            pFsense in vSphere.
        </p>

        <div class="image">
            <img src="../assets/vpn/intro.png" alt="intro">
        </div>

        <div class="subtheme">What is a VPN</div>

        <p>
            VPN stands for Virtual Private Network. It enrypts internet trafic between configured for it devices, as if they
            were physically connected with a cable. The trafic still goes over the internet and can be sniffed trough tools like
            wireshark, but it encypted and one can hardly make sense of it.
            </br></br>
            The VPN has 2 parts, the VPN Client (usually installed on a remote device) creates a secure and encrypted tunnel to the VPN server. The VPN Server should be located on a network that is safe and can be safely managed, because any traffic that passes through the VPN server is decrypted and forwarded to its intended destination. This means that the security of the VPN connection depends not only on the VPN client, but also on the security of the VPN server and the network it is located on. It is important to ensure that the VPN server is properly configured and secured to prevent unauthorized access or attacks.
        </p>


        <div class="subtheme">Running VPN</div>

        <p>
            As I mentioned in the intro, I already have an OpenVPN Server running on the same Server this website is hosted on.
            I use it for general surfing on public networks. It is a containerized kylemanna/openvpn docker image.
            That is why I decided that instead of writing a detailed explaination of the functionality a VPN offers, I will just show it.
            Here are some examples:
        </p>

        <div class="image">
            <img src="../assets/vpn/ex-connected.png" alt="vpn">
            <img src="../assets/vpn/ex-connection1.png" alt="vpn">
            <a><i></br>
                    This is what the client application looks like when it connects.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/ex-config.png" alt="vpn">
            <a><i></br>
                    This is what the config, needed to connect to a server, looks like. I've edited out all the actual keys.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/vpn/ex-logs.jpg" alt="vpn">
            <a><i>
                    This is what the logs of the server look like when someone connects to it.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/ex-encryptedTraffic.png" alt="vpn">
            <a><i>
                    And this is how all trafic looks like after establishing an encypted tunnel.
                </i></a>
        </div>






        <div class="subtheme">Configuring a VPN in pFsense</div>

        <p>
            The exercise for this topic is creating and configuring a VPN on my current pFsense firewall that I have setup in the previous topic.
            I won't be going through each small option/checkbox I've configured, but will show the main steps I took, due to the configuration being very lenghty and dry.
            Here's the process I've gone through:
        </p>



        <div class="image">
            <img src="../assets/vpn/setup-ca.png" alt="vpn">
            <a><i>First step was to create a certificate authority(CA).  
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/vpn/setup-certificates.png" alt="vpn">
            <a><i>Now using the CA, I've created a server certificate.
                </i></a>
        </div>


        <div class="image">
            <img src="../assets/vpn/setup-packages.png" alt="vpn">
            <a><i>Now after configuring the certificates and users, I went into the package manager page in pFsense and installed the OpenVPN client export package.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-configuredOpenVPN.png" alt="vpn">
            <a><i>Afterwards I went into the VPN page and setup an OpenVPN server. This process had a lot of steps and I had to use and configure all the certificates I
                created in the previous steps together. This is how the server looks like after the setup.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-openvpn-running.png" alt="vpn">
            <a><i>This is a screenshot of all the services running on the firewall. As you can see OpenVPN ran successfully.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-logs.png" alt="vpn">
            <a><i>To be sure, I checked all the logs of the service. Everything is running properly.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-exportUser.png" alt="vpn">
            <a><i>Here I went in and downloaded the client for the configured VPN.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-login.png" alt="vpn">
            </br><a><i>After installing and running the client, we just need to login with the user creadentials that we configured for the user. Everything else is
                    configured and setup automatically.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-working.png" alt="vpn">
            </br><a><i>Finally, here's the notification we get after connecting. We got the IP 172.16.2.2 in our VLAN B. Everything is working properly.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/final-network-diagram.png" alt="vpn">
            </br><a><i>This is how the network looks like after configuring the VPN.
                </i></a>
        </div>


        <div class="subtheme">Afterthoughts</div>

        <p>
            This topic was not new to me, I've had a VPN since I was in high school. Up until now I've only used it for surfing only, but in the
            context of system administration and cyber security, it is even more important. Working on systems without secure connections especially
            on public networks is incredibly dangerous, that's why it is absolutely necesary. While writing/doing this topic I learned how to configure
            a VPN on a network firewall. Up until now, I've only configured it out of open-source docker containers. In essence, creating this topic
            was helpful.
        </p>










    </div>

</body>

</html>