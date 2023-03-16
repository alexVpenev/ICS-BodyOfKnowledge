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
        <h1>XSS & CSRF</h1>
    </header>



    <div class="container">

        <p>
            In this topic I will be talking about the cross-side code execution vunlerabilities. In the first part of the topic I will explain about each of these
            types of vunlerabilities, show some examples and then for the second part of this page, I will show some exercises I did in DVWA.
        </p>

        <div class="image">
            <img src="../assets/xss-csrf/intro.png" alt="hids-intro">
            <a><i>example of cross-side-scripting exploitation</i></a>
        </div>

        <div class="subtheme">Cross-Side-Scripting (XSS)</div>

        <p>
            Cross-site scripting (XSS) is a type of security vulnerability that allows an attacker to inject malicious code into a web
            page viewed by other users. This can happen when a web application fails to properly sanitize user input, such as when
            allowing users to submit comments or other types of content.
            </br></br>
            The injected code can be in the form of HTML, JavaScript, or other scripting languages, and can be used to
            steal sensitive information, such as login credentials or personal data, from users who view the compromised
            web page. In some cases, the attacker may also be able to take control of the user's browser and perform
            actions on their behalf, such as making unauthorized purchases or posting unauthorized content.
            </br></br>
            The solution to the prevention of XSS attacks is to properly sanitize user input and ensure all content is validated and escaped before
            being displayed to others. It is a simple solution, but the practical solution is challenging. Another solution to this are security scanners, they
            are used to identify and mitigate these vulnerabilities. XSS is a serious vulnerability and to this day it stays on the list of the OWASP top 10.
            Now I will tell you about the different types of XSS and give you some examples to understand the vulnerabilities:
        </p>

        <div class="subtheme">XSS (Redacted)</div>

        <p>
            This is the most basic of the XSS vulnerabilities. The injected script is returned back from the web server, that is why it is called reflected XSS.
            It may come in the form of an error message , search result, or any other response the includes some or all of the input sent to the server as part of
            a request. Reflected attacks are delivered to vitims via an alternative manner, i.e e-mail message, link or some other website. When a user is tricked
            into clicking on a malicious link, submitting a soecuakky crafted form or even just browsing a malicious site, the inected code travels to the
            vulnerable web site, which reflects the attack back to the user's browser. The browser then executes the code because it came from a "trusted" server.
            Here are some examples of Reflected XSS with a real use case and DVWA:
        </p>


        <form method='post'>
            <input type="text" placeholder="Type here:" name="btn" id="btn" />
            <input type="submit" id="mes" name="mes"><br /><br />
            <a><i>Try:</i>&lt;script&gt;alert('My first XSS payload!')&lt;/script&gt;<a>
                    </br></br>
        </form>


        <?php
        if (isset($_POST['mes'])) {
            $var1 = $_POST['btn'];
            $var2 = $_POST['mes'];
        } else {
            $var1 = 'This displays the value entered in the input field, after pressing the Submit Query button!';
            $var2 = "Default input";
        }


        echo $var1

        ?>

        <div class="image">
            <img src="../assets/xss-csrf/reflected-low.png" alt="reflected-low">
            <a><i>(Low Difficulty) The Source Code here is almost identical to the example I gave previously. In this difficulty there is no sanitation of the input.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/xss-csrf/reflected-med.png" alt="reflected-med">
            <a><i>(Medium Difficulty) The only difference between that difficulty is that this time, the code replaces &lt;script&gt; with an empty field.
                    But of course you can use &lt;SCRIPT&gt; with capital letters. Another option is, because the code is run only once, to inject &lt;scr&lt;script&gt;ipt&gt;.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/xss-csrf/reflected-high.png" alt="reflected-high">
            <a><i>(High Difficulty) Here, every instance of a &lt;script&gt; in any way is removed. That sanitation works, but there are a lot of different ways to
                    inject code. The option I decided to use was putting in an image with no source, and onError(which is always because an image path is not given), alert the user.
                    Essentially doing the same thing as the previous examples.
                </i></a>
        </div>

        v

        <p>
            This vulnerability is exploited in an identical way to Reflected XSS. The difference is that the injected script is saved in a database or in another way. That
            way the script is exxecuted every time the stored input is loaded from the server. Another difference is the way stored attacks are delivered to victims.
            The victim could be infected directly from the server, i.e messages, forums, posts, visitor logs, comment fields, etc. Here are some examples using the DVWA:
        </p>

        <div class="image">
            <img src="../assets/xss-csrf/stored-low.png" alt="stored-low">
            <a><i>(Low Difficulty) The code here in terms in getting input and then retrieving it is the same as the stored XSS. No sanitization was used in the first
                    level. I created a button that executes a script on press.
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/xss-csrf/stored-med.png" alt="stored-med">
            <a><i>(Medium & High Difficulty) Again, here the sanitation is the same as the medium and high examples in the reflected XSS pages. So I just injected the photo
                    with no source and onError code execution. Now every time I reload the page I get an alert.
                </i></a>
        </div>

        <div class="subtheme">XSS (DOM)</div>

        <p>
            The DOM (Document Object Model) refers to the way web browsers represent HTML documents as objects that can be manipulated using
            JavaScript. In a DOM-based XSS attack, the attacker injects malicious code that is executed by manipulating the DOM of the victim's
            browser, rather than by exploiting a vulnerability in the server-side code of the web application. The code runs only on the visitor's
            compute, giving a hacker access to the victim's sensitive data or the ability to control their browser. Here are the exercises in the DVWA:
        </p>

        <div class="image">
            <img src="../assets/xss-csrf/dom-low.png" alt="dom-low">
            <a><i>(Low Difficulty)
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/xss-csrf/dom-med.png" alt="dom-med">
            <a><i>(Medium Difficulty)
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/xss-csrf/dom-med.png" alt="dom-high">
            <a><i>(High Difficulty)
                </i></a>
        </div>

        <div class="subtheme">Cross-side Request Forgery</div>

        <p>
            Cross-Site Request Forgery (CSRF) is an attack that forces an end user to execute unwanted actions on a web application in which they're currently
            authenticated. With a little help of social engineering (such as sending a link via email or chat), an attacker may trick the users of a web
            application into executing actions of the attacker's choosing. If the victim is a normal user, a successful CSRF attack can force the user
            to perform state changing requests like transferring funds, changing their email address, and so forth. If the victim is an administrative
            account, CSRF can compromise the entire web application.
            </br></br>
            The reason this works is that many websites use cookies or other forms of authentication to verify that requests are coming from an
            authorized user. But if the attacker can trick the victim's browser into sending a request with the same cookie or authentication
            token, the website will think the request is legitimate and carry out the action as requested.
            </br></br>
            To prevent CSRF attacks, website developers can use techniques such as adding a "token" to each request that verifies that it came from
            an authorized source, or requiring additional authentication steps for sensitive actions. Users can also protect themselves by being
            cautious about clicking on links or submitting forms from unfamiliar websites, and by logging out of websites when they are finished using them.
            </br>
            Here are the exercises from the DVWA page
        </p>

        <div class="image">
            <img src="../assets/xss-csrf/csrf-low.png" alt="csrf-low">
            <a><i>(Low Difficulty)
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/xss-csrf/csrf-med.png" alt="csrf-med">
            <a><i>(Medium Difficulty)
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/xss-csrf/csrf-high.png" alt="csrf-high">
            <a><i>(High Difficulty)
                </i></a>
        </div>


        <div class="subtheme">Afterthoughts</div>

        <p>
            Creating this topic took a considerable amount of time due to its length and the different types of Cross-Site Scripting and Forging vulnerabilities.
            It was my first encounter with such vulnerabilities, and I am delighted to have developed this subject for the Body of Knowledge. While reflecting
            on my previous semesters' coding practices, I realized that I had made similar mistakes. Unfortunately, it can be quite challenging, time-consuming and even boring
            to sanitize code against such vulnerabilities, and there are broad options to inject code, leaving one vulnerable to attacks. However, in conclusion, developing
            this topic has improved my understanding of these vulnerabilities.
        </p>

        <h1>I KNOW KUNG FU</h1>



        <?php
        $var3 = '';
        $var4 = '';
        if (isset($_POST['mes-secure'])) {
            $var3 = htmlspecialchars($_POST['btn-secure'], ENT_QUOTES, 'UTF-8');
            $var4 = htmlspecialchars($_POST['mes-secure'], ENT_QUOTES, 'UTF-8');
        } else {
            $var3 = 'Enter something and press the button!';
            $var4 = "Default input";
        }
        ?>

        <form method='post'>
            <input type="text" placeholder="Try me:" name="btn-secure" id="btn-secure" />
            <input type="submit" id="mes-secure" name="mes-secure" value="Show me">
        </form>

        <?php
        //shit code, ignore it
        if (isset($_POST['mes-secure'])) {
            if ($var3 == $_POST['btn-secure']) {
                echo $var3;
            } else {
                echo "<div class=\"image\"> <img src=\"../assets/xss-csrf/haha.gif\" alt=\"haha\"></div>";
            }
        } else {

            echo $var3;
        }

        ?>








    </div>

</body>

</html>