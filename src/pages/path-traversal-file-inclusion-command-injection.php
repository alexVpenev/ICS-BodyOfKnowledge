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
        <h1>Path Traversal, (remote) File inclusion and Command Injection</h1>
    </header>

    <div class="container">
        <p>
            In this topic I will cover Path traversal, remote file inclusion and command injection. These are all types of web application vulnerabilities that can allow
            an attacker to execute unauthorized actions on a web server. I will be covering each of the vulnerabilities on its own, explaining what they are, how they work and
            finally giving some examples withe the DVWA image I've created. Finally I will do a segment how these vulnerabilities are related and give some thoughts about the process.
        </p>

        <div class="image">
            <img src="../assets/pti-cmi/intro.png" alt="intro">
        </div>

        <div class="subtheme">Command Injection</div>

        <p>
            Command Injection is a vulnerability that occurs when a web application allows user input to be passed to a command shell without proper validation.
            This can allow an attacker to execute arbitrary commands on the server, potentially leading to complete compormise of the system. Here are some examples of
            commonly used operators, that will help us execute multiple commands:
        </p>

        <div class="bullet">
            <ul>
                <li><b>;</b> - This operator is used to separate multiple commands on a single command line. Every command is executed sequentially, one after the other,
                    regardless of whether the preceding command succeeded or failed.

                </li>

                <li><b>&&</b> - This operator is like an If statement. If the first command succeeds, then you can execute the following commands. Example if you run
                    "command1 && command2" command2 will execute only if command1 was completed successfully.

                </li>

                <li><b>||</b> - This operator is the complete opposite of the command &&. If the first command was successful, then the second command won't be executed.
                    Example for the "command1 || command2", if command1 failed, only then command2 would be executed.

                </li>

                <li><b>&</b> - This operator is a little bit different, it tells the first command to run in the background. To explain it in a better way, imagine if you opened a second
                    terminal and typed the first command on its own. Doesn't matter if the command succedes or fails. The output will be displayed, when the command is executed.

                </li>

                <li><b>|</b> - This operator is called a pipe and is used to connect the commands. Example if you run "command1 | command2", command2 will process the data that
                    it receives from command1. This is one of the most useful linux operators, because it allows you to filter or transform output i.e "ls | grep "folder-name".
                    If the commands do not connect in any way, only the second one will be displayed.

                </li>

            </ul>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/cmi-operators.png" alt="gre-website">
            <a><i>Here's an output of each of the operators.</i></a>
        </div>

        <p>
            Now let's try and use that knowledge to inject some commands into the DVWA.
        </p>

        <div class="image">
            <img src="../assets/pti-cmi/cmi-low.png" alt="gre-website">
            <a><i>(Low Difficulty) As you can see, there are no checks in the source code.</i></a>
        </div>



        <div class="image">
            <img src="../assets/pti-cmi/cmi-med.png" alt="gre-website">
            <a><i>(Medium Difficulty) The source code is practically the same as the one in the lower difficulty. The only difference is that, now the code replaces the ";"
                    and "&&" with a space. But there are other operators we can use.</i></a>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/cmi-high.png" alt="gre-website">
            <a><i>(High Difficulty) Again, the only difference here is that there have been added extra replacements for the operators. But there was a crucial mistake here,
                    as you can see, there was a space in the "| " substitution. That's what allowed us to exploit this option.
                </i></a>
        </div>


        <div class="subtheme">Path Traversal and (remote) File Inclusion</div>

        <p>
            Path traversal, also known as directory traversal, is a
            vulnerability that occurs when a web application fails to
            properly sanitize user input that is used to construct file
            paths. This can allow an attacker to navigate outside of the
            web root directory and access files or directories that should
            not be accessible.
        </p>

        <div class="image">
            <img src="../assets/pti-cmi/path-trav-intro.png" alt="path-traversal">
        </div>


        <p>
            Local file inclusion (LFI) is a vulnerability that occurs when an attacker is able to manipulate user input to include
            local files on the server where the web application is hosted. This can
            allow an attacker to read sensitive files, such as configuration files or
            database files, and potentially execute arbitrary code on the server.
            </br></br>
            Remote file inclusion (RFI) is a vulnerability that occurs
            when a web application includes a file from a remote server
            without properly validating the input. This can allow an
            attacker to inject malicious code into the web application
            and execute it on the server.
            </br></br>
            Here are some examples of how these vulnerabilities can be exploited:
        </p>

        <div class="image">
            <img src="../assets/pti-cmi/fli-path-traversal.png" alt="gre-website">
            <a><i>An example of path traversal
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/fli-fileInclusion.png" alt="gre-website">
            <a><i>This is an example of File Inclusion. This is a path that I found to a file called fi.php.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/fli-passwd.png" alt="gre-website">
            <a><i>Again an example of Local File Inclusion. And this is a slightly more dangerous application.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/fli-reverse-shell-file.png" alt="gre-website">
            <a><i>This is a reverse shell script I found on the internet. This is the first step I to getting a shell to the server of the DVWA, using Remote File Inclusion.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/rmi-python-server.png" alt="gre-website">
            <a><i>I've done this step using a python server, which shares the shell.php file on port 9000. The command I ran was "python -m http.server 9000"
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/rmi-path-to-server.png" alt="gre-website">
            <a><i>In this step, I'm giving it the path to the python server instead of a local path. And to test if the script.php ran sucessfully I ran a netcat server on port 1337.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/pti-cmi/rmi-netcat-shell.png" alt="gre-website">
            <a><i>As you can see I got shell access using the reverse shell script.
                </i></a>
        </div>

        <div class="subtheme">How are path traversal, remote file inclusion and command injection related?</div>

        <p>
            These three vulnerabilities are related because they
            all involve improper validation of user input, which
            can allow an attacker to execute unauthorized actions
            on a web server. In some cases, an attacker may use a
            combination of these vulnerabilities to achieve their
            objectives, such as using a path traversal vulnerability
            to access a file that contains code that can be injected
            using an RFI vulnerability, which in turn can be used to
            execute arbitrary commands on the server via a command
            injection vulnerability.
        </p>

        <div class="subtheme">Afterthoughts</div>

        <p>
            Upon completing this topic and engaging in all of the exercises, I have gained a fundamental understanding of these types of
            vulnerabilities. Through exploring the different types of operators and utilizing netcat to obtain reverse shell access to the
            DVWA image, I have become familiar with their functions. Furthermore, after analyzing the source code for the impossible difficulty
            in DVWA, I am confident that I can prevent these vulnerabilities in my future code.
        </p>














    </div>

</body>

</html>