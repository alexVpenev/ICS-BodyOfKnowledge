<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fontys Cyber Security</title>
  <?php
  include("src/components/navigation-index.php");
  ?>
  <style>
    /* Set the background image and style the text */
    body {

      /* position:fixed;
        width: 75%;
        height: 100%;
        background-color: #34444A;
        background-size: center;
        background-position: center;
      background-image: url(kali-background.png); */
      height: 100%;
      margin: 0;

    }


    .home-contents {
      background-image: url(src/assets/kali-background.png);
      background-size: cover;
      background-position: center;
      position: fixed;
      top: 0;
      right: 0;
      width: 75%;
      height: 100%;
      overflow: auto;
      background-color: #ffffff;
      font-size: 36px;
      font-weight: bold;
      /* text-align: center; */
      color: white;
      /* opacity: 0.6; */
    }

    .firstTitle {
      text-align: left;
      padding-left: 20%;
      margin-top: 200px;
    }

    .secondaryTitle {
      text-align: right;
      padding-right: 10%;
      margin-top: 250px;
    }

    .home-contents p {
      text-align: center;
      margin-top: 50px;
      font-size: 24px;
      font-weight: normal;
    }

    /* Style the version information in the bottom right corner */
    .version-info {
      position: fixed;
      bottom: 0;
      right: 0;
      font-size: 16px;
      color: white;
      opacity: 0.7;
      margin: 10px;
    }



    .profile {
      position: fixed;
      width: 12%;
      height: 12%;
      top: 0;
      right: 0;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      font-size: 16px;
      color: white;
      padding: 10px;
      box-sizing: border-box;
    }

    .profile a {
      margin-right: 10px;
      color: white;
    }

    .profile img {
      height: 75%;
      object-fit: cover;
      margin-left: 15px;
      border-radius: 100%;
    }

    .username {
      font-size: 32px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="home-page">






    <!-- <div class="social-icons">
      <a href="https://github.com/your_github_username" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://www.linkedin.com/in/your_linkedin_username/" target="_blank"><i class="fab fa-linkedin"></i></a>
    </div> -->


    <div class="home-contents">

      <div class="profile">
        <a class="username">alexVpenev</a>
        <img class="profile-photo" src="src/assets/gif.gif" alt="Profile photo of Alex Vpenev">

      </div>

      <h1 class="firstTitle">Body of Knowledge</h1>
      <h1 class="secondaryTitle">Cyber Security | Semester 4</h1>
      <p>by Aleksandar Penev</p>
      <div class="version-info">Version 0.1</div>
    </div>
  </div>




</body>

</html>