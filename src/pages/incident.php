<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Fontys Cyber Security</title>
    <?php
    include("../components/navigation-pages.php");
    ?>
    <link rel="stylesheet" href="template.css">
</head>

<body>
    <header>
        <h1>Security Incident Management</h1>
    </header>

    <div class="container">

        <p>
            In this topic I will be talking about Security Incident Management, what it is, how to mitigate the effects of an incident and how to prevent incidents from occuring. I will start with going in depth into the topic, then doing the exercises given to us by university and finally give out my thoughts about the subject.
        </p>

        <div class="image">
            <img src="../assets/incidents/intro.png" alt="intro">
        </div>

        <div class="subtheme">What is Incident Management?</div>

        <p>
            Security incident management is the process of identifying, analyzing, and responding to security incidents in an organization. It involves taking a systematic approach to handle security incidents, which may include cyber attacks, physical breaches, or other security-related issues. The primary goal of security incident management is to minimize the impact of security incidents and restore normal operations as quickly as possible. This involves defining and implementing procedures for incident detection and response, as well as regularly testing and updating those procedures to ensure their effectiveness. Effective security incident management requires the involvement of all relevant stakeholders, including IT personnel, security teams, management, and other departments as needed.
        </p>

        <div class="subtheme">What are the steps to undertake when an incident has occured?</div>

        <div class="image">
            <img src="../assets/incidents/triag.png" alt="intro">
        </div>

        <div class="bullet">
            <ul>
                <li><b>Alert Reception</b> - this is the first time you encounter the incident. This is where you get a first glance at a problem and start to understand it.
                </li>

                <li><b>Alert Triage and Prioritization</b> - this is the first step of action. You delve into the problem, understand it and where it is coming from. Then you follow with understanding the impact the issue could have. Then you have to understand how easily/quickly the problem can be resolved and finally you determening who you should delegate the problem to. Only after following those steps could you go to the next step.
                </li>

                <li><b>Response</b> - In this step you determine the plan of action to resolve the issue. More on this process in the exercise.
                </li>

                <li><b>Close the incident and review</b> - after the incident has been resolved a review has to be done to determine if further actions have to be taken to minimize the risk of the incident occurring again in the future. Also the incident handling process should be reviewed to determine if the incident has been handled in the best possible way.
                </li>

            </ul>
        </div>


        <div class="subtheme">Exercise</div>

        <p>
            The exercise for this topic is: <b>"Think about a security incident that could happen in your 'basic knowledge company'. Perform a triage and work out a complete response as it should be done in your company."</b>. Here's my answer:
        </p>

        <p>
            A company operates a user-based platform for purchasing corporate materials, where registered users can browse and purchase office supplies. However, the platform experiences a security incident where the database containing users' personal information is exposed online, resulting in account theft and lost orders. The platform's manager must prioritize and triage the issue, which is discovered to be caused by an intern who shared the database credentials on an open GitHub repository. The manager understands that the issue is critical and time sensitive, he delegates the incident to the security engineers, who devise a plan of action to mitigate the situation. Here is the plan they have developed:
        </p>

        <div class="bullet">
            <ul>
                <li>The first is to secure their database again. That can happen in many different ways, changing the encryption of the data inside, changing the credentials, or spliting the database into multiple ones so that the issue doesn't happen again or doesn't have as big of impact.
                </li>

                <li>Inform their users that a leak has occured and help them recover or recreate their accounts and purchases.
                </li>

                <li>Enforce two-factor authentication for your users, so that next time a database has been stolen, it won't have the same impact for your users.
                </li>

            </ul>
        </div>

        <p>
            After the plan of action has been executed, the incident is considered as resolved and the execution and reports will be handed it to the manager for review.
            If the process is not considered fully resolved, a new plan of action will be crafted and implemented by the security team.
        </p>

        <div class="subtheme">Afterthoughts</div>

        <p>
            The skill of reacting properly, responsibly and actually getting incidents/problems fixed especially in stressful situation
            is the most important one as system administrator/security engineer in my opinion. You can't always foresee or prevent the issues that arise, but it is you're job to
            fix them and get things done. Accidents, especially ones that are related to cyber security occur very often and a lot of the times
            out of nowhere. Even when, someone else is responsible. Writing this topic was easy, the hard part is actually applying that knowledge
            in critical moments, and I hope one day I will be adaptible enough to deal with situations like that.
        </p>

</body>

</html>