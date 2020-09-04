<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Air-Tec is known in Southern California for the quality of our work and our excellent service.  Here, we display the latest news regarding our company.">
  <meta name="robots" cotent="index, follow">
  <meta name="keywords" content="HVAC, Heating, Heat, Ventalation, Air, Conditioning, Air-Conditioning, News, Air-Tec">
  <meta name="author" content="SeanLiam McCarthy">

  <title>Air-Tec News Page</title>

  <!--  CSS -->
  <link href="css/Air-Tec.css" rel="stylesheet">
  <link href="css/overall.css" rel="stylesheet">
  <!--
    Bootstrap Credit, acidentally renamed classes so commented out
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
       
    <link href="css/business-casual.min.css" rel="stylesheet">

 -->
  <!-- Font from Google API (from googling what makes a website look professional) -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/8361501.js"></script>
  <!-- End of HubSpot Embed Code -->
</head>

<body>
    <div class="title">
        <div class="title-first center-text caps">Air-Tec</div>
        <div class="title-second center-text caps"></div>
        <div class="title-third center-text caps">Performs</div>
    </div>

    <!-- NAV BAR -->
    <div class="nav-height">
        <div id="nav">
            <div class="mobile-header caps center-text">Air-Tec</div>
            <ul>
                <li class="item center-text">
                    <a href="https://www.airtecperforms.com/">Website</a>
                </li>
                <li class="item center-text current">
                    <a href="index.html">Home</a>
                </li>
                <li class="item center-text">
                    <a href="news.html">News</a>
                </li>
            </ul>
        </div>
    </div>




    <div class="content-container">   
        <div class="section">
            <div class="section-content center-text">
                <div class="secion-header-first center-text caps">Air-Tec</div>
            <div class="secion-header-second center-text caps">Performs</div>
                        <form action="send-email.php" method="post" onsubmit="return checked();" > 
                            <div class="form-group row">
                                <label for="first_name" class="col-sm-4 col-form-label">First Name:</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="First Name" maxlength="30" required
                                        value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="last_name" class="col-sm-4 col-form-label">Last Name:</label>
                                        <div class="col-sm-8">
                                        <input type="text" class="form-control" id="last_name" name="last_name"
                                            placeholder="Last Name" maxlength="40" required
                                            value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>">
                                        </div>
                            </div>
                        <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
                                    <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="E-mail" maxlength="60" required
                                        value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                                    </div>
                        </div>
                        <div class="form-group row">
                                <label for="service-req" class="col-sm-4 col-form-label">Complaint:</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" id="service-req" name="service-req"
                                        placeholder="Service Required" maxlength="300"
                                        required value="<?php if (isset($_POST['service-req'])) echo $_POST['service-req']; ?>">
                                        
                                        </div>
                            </div>
            
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Submit">
                            </div>
                        </div>
            </form>
        </div>
        </div>
    </div>
  <footer class="footer">
      <div class="footer-content center-text">Copyright © Air Tec Performs 2020</div>
      <div class="footer-content center-text">Clay Dunn Enterprises, Inc.</div>
  </footer>

  <script type="text/javascript">
   
    document.getElementById("btn1").onclick = function () {
        location.href = "https://www.airtecperforms.com/";
    };
    </script>
    <script src="js/onclick_funcs.js"></script>
</body>

</html>
