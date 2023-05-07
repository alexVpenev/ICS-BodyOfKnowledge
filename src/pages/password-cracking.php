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
        <h1>Password Cracking (system and network)</h1>
    </header>

    <div class="container">

        <p>
            In this topic I will be talking about password cracking. I will go into what it is, how it works, how can we protect against it and
            finally as usual will show some real examples of password cracking.
        </p>


        <div class="image">
            <img src="../assets/password-crack/intro.png" alt="intro">
        </div>


        <div class="subtheme">The Methods</div>

        <p>
            So what do we do when we try to login into a person computer? We repeatedly try to login into their account while guessing their password.
            But that is simply impossible considering how many possible passwords exist. So there must be an automated way to crack a password.
            That automated way is called brute-forcing. Brute-forcing makes a computer algorithmically try passwords until they guess one.
            But there are many tipes of brute-forcing, here's some:
        </p>

        <div class="bullet">
            <ul>
                <li><b>Dictionary attack</b> - Trying common passwords
                </li>

                <li><b>Pure Brute force attack</b> - Trying all possible password combinations
                </li>

                <li><b>Hybrid attack</b> - A combination of a dictionary- and brute force attack
                </li>

            </ul>
        </div>

        <p>
            Brute-forcing can be used in every scenario, for online accounts, local computer accounts, databases, emails, etc. Once a username/password combination has been cracked, a hacker can login using these credentials to abuse the permissions of that account or to look for more vulnerabilities in the functionality that comes with these permissions.
            </br></br>
            So why do I cover this subject, I am not trying to hack anyone. The purpose of writing this topic is that to be able to protect against it, a security engineer
            has to understand it. So what are the weaknesses of brute-forcing. Well time, the longer a password is the more time it will take to brute-force it, and that time
            grows exponentially. Here's a time scale:
        </p>

        <div class="image">
            <img src="../assets/password-crack/time-scale.png" alt="intro">
        </div>

        <p>
            This is only pure brute-forcing, if combined with any other method these times could reduce significantly. Even long passwords that have comprehensible 
            words/names in them can be easily cracked with the right methods. So what is the solution? You should make long, incomprehensible, symbols including passwords
            and change them once every 3 months for absolute maximum security. That is a must for any actually important account. Now here are some test cases I did, showing
            how it works:   
        </p>


        <div class="subtheme">Exercises</div>

        <div class="image">
            <img src="../assets/password-crack/1-tartget-dvwa.png" alt="password-crack">
            <a><i>My target is the DVWA login.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/password-crack/2-inspect-element.png" alt="password-crack">
            <a><i>For the use of any password cracking tool you will need three values: XYZ. This is how we get the Y. We need to know how to send postrequests.
                For that we need to inspect the website's elements. We figured that the name for the fields/button are: username, password and submit. (X refers to the website page/api, but we already have that)
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/password-crack/3-way-of-finding-if-successfull.png" alt="password-crack">
            </br><a><i>Now the Z value represents the way in which the algorithm will figure out if the prompts are successful or not. In this case, when a password is incorrect,
                we will get a Login failed message.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/password-crack/4-crafted-command-and-created-lists.png" alt="password-crack">
            <a><i> So after I got the XYZ values. I crafted a hydra request(hydra is one of many pentesting tools for brute-forcing passwords). I will be performing a
                dictionary attack. I have created two lists with which the tool will prompt the login. A random string username file and a file with a list of the most commmonly
                used passwords.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/password-crack/5-command-successfully-running.png" alt="password-crack">
            <a><i>After after some failed attempts, I found the correct command. Here it starts successfully.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/password-crack/6-successful-crack.jpg" alt="password-crack">
            <a><i>And here you can see it actually cracked my password.
                </i></a>
        </div>


        
        <div class="subtheme">Exercises</div>

        <p>
            But of course brute-forcing is not the only way you can get into an account. A very common way is using database breaches to get account passwords, 
            and in most cases users in those breaches use the same password for many places, so when those users get into a breach, a hacker can find them and
            easly get into most of their accounts/systems. So how do we protect against that? First as users if we care about our accounts, we should use different
            passwords everywhere. I for example have a specific mail and a password for websites I don't trust or don't care about. But as security engineers we
            have to find a way to securely encrypt the passwords in our databases. Eventually those passwords will get decrypted, but until that happens, our users will have had the time to change their passwords. So the importance here stands in the encryption that is used. There are many ways to hash passwords but not all of them are
            secure. Here's a pentesting tool called Jack the Ripper, made for decripting hashes. Here's an example:
        </p>


        <div class="image">
            <img src="../assets/password-crack/j1-generated-md5.png" alt="password-crack">
            </br><a><i>Here I used a MD5 generator to has "password".
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/password-crack/j2-crafted-file.png" alt="password-crack">
            </br><a><i>I put the hash into a file called john.txt as you can see in the picture.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/password-crack/j3-cracked.png" alt="password-crack">
            <a><i>And after running the john command with the specific hash I'm trying to crack, I get the password word. This was a very short example of how a person that has access to a breached database could easily crack a password with a weak hash. If you're interested to see if you're accounts have already been breached, you can check the haveibeenpwned.com website.
                </i></a>
        </div>


        <div class="subtheme">Afterthoughts</div>

        <p>
            Every security engineer must have strong and unique passwords for their accounts and machines. The lack of executing this could lead to many issues not only for you as individual, but everyone that you're responsible for. Also when designing a database, you as a professional should always use current and up to date encryption methods for the storage of users not only passwords, but data as well(personal opinion). In conclusion, this topic was useful and showed me how easily you can crack passwords using kali tools.
        </p>

</body>

</html>