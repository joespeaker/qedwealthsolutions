<html lang="en">
    <head>
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z7D0W4CNTJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z7D0W4CNTJ');
</script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta charset="utf-8">
            <meta name="description" content="QED Wealth Solutions is here to help you plan your retirement">
            <meta property="og:title" content="QED Wealth Solutions">
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://qedwealthsolutions.com/">
            <meta property="og:image" content="">
            <meta http-equiv = "refresh" content = "10; url = https://www.qedwealthsolutions.com" />
            <title>QED Wealth Solutions - Retirement Tax Quiz Success</title>
            <link rel="shortcut icon" type="image/x-icon" href="imgs/fav.png" >
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" href="stylesheets/quizStyle.css">
            <link rel="stylesheet" href="stylesheets/masterStyle.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
<!-- navbar-->
<nav class="navbar navbar-expand-lg navbar-color navbar-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-10" href="index.html"><img class="nav-logo" src="imgs/Logo-01.png" alt="QED Wealth Solutions"></a>
        <button class="navbar-toggler me-10" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-10 mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="ourprocess.html">Our Process</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About Us
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="aboutus.html">Your Team</a></li>
                    <li><a class="dropdown-item" href="story.html">Our Story</a></li>
                    <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                  </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="whoweserve.html">Who We Serve</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://calendly.com/qedwealthsolutions/initial-phone-meeting">Schedule a Call</a>
            </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end of navbar-->
<a href="https://calendly.com/qedwealthsolutions/initial-phone-meeting"><div class="popup text-center">
    Schedule a Meeting
</div></a>
<!-- end of popup-->
<!-- start of popup-->
    <?php 
      $q1 = $_POST['q1'];
      $q2 = $_POST['q2'];
      $q3 = $_POST['q3'];
      $q4 = $_POST['q4'];
      $q5 = $_POST['q5'];
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];

      $message = "Thanks for taking the quiz, here are your results...";
      mail($email,"Tax Quiz Results",$message,"From: taxquiz@qedwealthsolutions.com");
      echo "<div class='row top'><div class='col-12 text-center'><p class='emoji'>🎉</p><h1>Awesome " . $fname . "!</h1><h4>You've submitted the quiz. Check your email to see your results!</h4><p>This page will auto-redirect in 10 seconds.</p><p>If auto redirect doesn't work click <a href='index.html'>here</a>!</p></div></div>";
    ?>
    
<!-- end popup->
        <!--footer-->
        <div class="footer">
    <div class="row mb-3">
        <div class="col-12 text-center">
            <a href="index.html"><img class="footer-logo" src="imgs/icon-1.png" alt="QED Wealth Solutions Logo"></a>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-12 text-center">
            <p><a href="tel:6205534052"><span class="material-symbols-outlined gIcon">
                call
            </span></i> Give Us a Call</a></p>
            
            <p><a href="mailto:info@qedwealthsolutions.com"><span class="material-symbols-outlined gIcon">
                mail
            </span></i> Send Us an Email</a></p>

            <p>350 N Main, Kingman, Kansas</p>
            
        </div>
    <!--copyright-->
    <div class="copyright">
        <div class="row">
            <div class="col-12 text-center">
                <p class="copyright">
                    QED Wealth Solutions is a registered investment advisor.
                    <br>
                    Commonly requested documents: <a href="https://files.adviserinfo.sec.gov/IAPD/Content/Common/crd_iapd_Brochure.aspx?BRCHR_VRSN_ID=805752" target="new">ADV Part 2</a> and <a href="QED Wealth Solutions Privacy Policy Statement.pdf" target="new">Privacy Policy</a>
                    <br>
                    Copies of these documents, as well as our entire policies and procedures manual will be mailed upon request.
                </p>
            </div>
        </div>
    </div>
</div>
<!--end of copyright-->
<!--end of footer-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>