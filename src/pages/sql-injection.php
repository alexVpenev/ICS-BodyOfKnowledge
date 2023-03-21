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
        <h1>SQL Injection</h1>
    </header>

    <div class="container">
        <p>
            In this topic I will be covering SQL Injection and Blind SQL injection. I will be giving an explaination about the subject, test the vulnerabilities
            on the DVWA image and finally give some thoughts about the subjects.
        </p>

        <div class="image">
            <img src="../assets/sql-injection/intro-image.png" alt="intro">
        </div>

        <div class="subtheme">SQL Injection</div>

        <p>
            SQL injection is a type of cyber attack where an attacker maliciously injects SQL code into an application's input
            field (examples could be search fields, login fields, messages, etc) that is designed to interact with a database.
            This type of attack is possible when the application does not
            correctly sanitize or validate user inputs, allowing the attacker to bypass authentication and execute arbitrary SQL
            statements against the database.
            </br></br>
            By exploiting SQL injection vulnerabilities, attackers can perform various malicious actions, such as accessing,
            modifying, or deleting sensitive data from the database, elevating their privileges to become an administrator, or
            even gaining remote control of the affected system. SQL injection attacks are prevalent in web applications that
            interact with databases, and they can have severe consequences for the security and confidentiality of the data
            stored in the database.
            </br></br>
            Here is a behind the stage view of how a search input might look and how the code could be manipulated.
        </p>

        <p>
            "SELECT * FROM foods WHERE NAME = '<input placeholder="Apple"></input>';
            </br></br>
            Now a regular user would use the search bar for its actual function. But a malicious actor could try changing the apple to a continuation of the script and then comment
            the rest of the actual script a developer has put in. Like that:
            </br></br>
            "SELECT * FROM foods WHERE NAME = '<input placeholder="' or 1=1 --"></input>';
            </br></br>
            By entering the first ' he closes the search for a name, then making an or statement to check if 1 is equal to 1(which it always is) and then entering --
            which comments the rest of the script. Together this will show the hacker all the items in foods. If a hacker can do something as simple as that, he could
            do a significant damage to the database.
        </p>

        <div class="subtheme">SQL Injection Exercises</div>

        <p>
            Here I will do the SQL injection exercises in the DVWA. The task is to get the password of the users in the database.
        </p>

        <div class="image">
            <img src="../assets/sql-injection/low-sql.png" alt="gre-website">
            <a><i>(Low Difficulty) As you can see in the source code, there is no actual checks for the $_REQUEST['id'], so we're able to just input whatever we want.
                    </br>
                    entered: <b> a' or 1=1 UNION SELECT user,password from users;--</b>
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sql-injection/med-f12.png" alt="gre-website">
            <img src="../assets/sql-injection/med-sql.png" alt="gre-website">
            <a><i>(Medium Difficulty) Here the developer decided to take the input from the user and turn it into a select field. But they made a mistake. You can still change
                    the value of the option in the inspect code (BurpSuite is also an option). The only thing I had to do was remove the quotes, because the query was changed.
                    </br>
                    entered: <b> 1 or 1=1 UNION SELECT user,password from users;-- </b>
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sql-injection/high-sql.png" alt="gre-website">
            <img src="../assets/sql-injection/high-source.png" alt="gre-website">
            <a><i>(High Difficulty) There is actually no difference between this level and the low one. The developer decided to move the input in another page, which
                    makes absolutely no difference. The only thing that made a difference was that I had to include quotes again and comment the rest of the query(In the
                    source code you can see the limit option), but I always used them up until now anyway.
                    </br>
                    entered: <b> 1 or 1=1 UNION SELECT user,password from users;-- </b>
                </i></a>
        </div>

        <div class="subtheme">Blind SQL Injection</div>

        <p>
            When an attacker executes SQL injection attacks, sometimes the server responds with error messages from the database server complaining
            that the SQL query's syntax is incorrect. Blind SQL injection is identical to normal SQL Injection except that when an attacker attempts
            to exploit an application, rather then getting a useful error message, they get a generic page specified by the developer instead. This
            makes exploiting a potential SQL Injection attack more difficult but not impossible.
        </p>

        <div class="subtheme">Blind SQL Injection Exercises</div>

        <p>
            The Blind SQL Injection Exercises in the dvwa were practically the same as the regular sql Injection ones. But I couldn't understand wether
            the scripts went trough or not, because I have no output. To understand if they went trough I modified the scripts with sleep(10) which delays the output by 10 seconds.
            Here are the Low, Medium and High Difficulty exercises:
        </p>

        <div class="image">
            <img src="../assets/sql-injection/low-blind.png" alt="sql-inj">
            <a><i>(Low Difficulty) entered: <b> 1' and sleep(5)</b>
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sql-injection/med-blind.png" alt="sql-inj">
            <a><i>(Medium Difficulty) entered: <b> 1 and sleep(5)</b>
                </i></a>
        </div>

        <div class="image">
            <img src="../assets/sql-injection/high-blind.png" alt="sql-inj">
            <a><i>(High Difficulty) entered: <b> 1' and sleep(5) --</b>
                </i></a>
        </div>

        <div class="subtheme">Afterthoughts</div>

        <p>
            Although I come from a Software Profile and have used many databases in various applications, I can't deny that I was already familiar
            with the topic. I've had lectures on the subject, and I've even tested other friends' code for SQL vulnerabilities. However, after
            completing this topic, I feel that my understanding has improved. The opportunity to review source code and identify
            mistakes different from my own has allowed me to further develop my knowledge.
        </p>








    </div>

</body>

</html>