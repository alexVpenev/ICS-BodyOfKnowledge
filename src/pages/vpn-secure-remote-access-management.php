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
            This will be a more practically focused topic. I will start by explaining what VPN is, then because I already have a VPN,
            setup on the server this website is hosted on, I will show the benefits and functionalities that it offers.
            And finally I will show the steps of the process of configuring a VPN using pFsense in vSphere.
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
            The VPN has 2 parts, the VPN Client(usually installed on a remote device) creates a secure and encrypted tunnel to the
            VPN server. The VPN Server should be located on a network that is safe and can be safely managed, because any traffic

            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->
            <!-- INCREDIBLY IMPORTANT!!!! FINISH THIS!!! -->

            The VPN has 2 parts, the VPN Client(usually installed on a remote device) which is an application that connects to a VPN server
            and establishes a
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
            The 
        </p>














        <div class="image">
            <img src="../assets/vpn/setup-ca.png" alt="vpn">
            <a><i>
            </i></a>
        </div>

        
        <div class="image">
            <img src="../assets/vpn/setup-certificates.png" alt="vpn">
            <a><i>
            </i></a>
        </div>


        <div class="image">
            <img src="../assets/vpn/setup-packages.png" alt="vpn">
            <a><i>
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-configuredOpenVPN.png" alt="vpn">
            <a><i>
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-openvpn-running.png" alt="vpn">
            <a><i>
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-logs.png" alt="vpn">
            <a><i>
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-exportUser.png" alt="vpn">
            <a><i>
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-login.png" alt="vpn">
            <a><i>
            </i></a>
        </div>

        <div class="image">
            <img src="../assets/vpn/setup-working.png" alt="vpn">
            <a><i>
            </i></a>
        </div>










    </div>

</body>

</html>