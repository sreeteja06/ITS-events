<?php
if(isset($_POST['submit'])){
$email=$_POST['Email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$Phone = $_POST['Phone'];
$message = $_POST['Message'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = $message." \n\nMessage sent by ".$_POST['name']."\nemail id ".$email."\nphone number ".$Phone;
// Send Mail By PHP Mail Function
mail("itstechclub@gmail.com", $email, $message, $headers);
// echo "Your mail has been sent successfuly ! Thank you for your feedback go to <a href = "."../index.html".">home</a>";
echo "<script type='text/javascript'>alert('Your mail has been sent successfuly ! Thank you for your feedback');</script>";
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../nav.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="contact.css" />
    <script>
        function addClass() {
            let closed = document.getElementsByClassName("nav-is-visible");
            if (closed.length <= 0) {
                console.log("if");
                let classn = document.getElementsByClassName("cd-stretchy-nav");
                classn[0].classList.add("nav-is-visible");
                closed = false;
            }
            else {
                console.log("else");
                let classn = document.getElementsByClassName("cd-stretchy-nav") ;
                classn[0].classList.remove("nav-is-visible");
                closed = !closed;
            }
        }
    </script>
</head>

<body>
    <nav class="cd-stretchy-nav">
        <a class="cd-nav-trigger" onclick="addClass()">
            <span aria-hidden="true"></span>
        </a>
        <ul>
            <li><a href="../index.html"><span></span></a></li>
        <li><a href="../calendar/calendar.html"><span></span></a></li>
        <li><a href="../index.html"><span></span></a></li>
        <li><a onclick="scrollToEvents()"><span></span></a></li>
        <li><a href="Login/login.html"><span></span></a></li>
        </ul>
        <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>
    <div class="container">
        <div class="row">
            <h1>contact us</h1>
        </div>
        <div class="row">
            <h4>We'd love to hear from you!</h4>
        </div>
        <div class="social-links">
            <a href="https://www.instagram.com/m_sreeteja/" class="instagram" style="border-right: 1px solid #EEEEEE;"><img
                    src="instagram.png" height="64px" width="64px"></a>
            <a href="https://www.linkedin.com/in/sree-teja-5121aaa6/" class="LinkedIn" style="border-right: 1px solid #EEEEEE;"><img
                    src="linkedin.png" height="64px" width="64px"></a>
            <a href="https://twitter.com/sreeteja06" class="Twitter"><img src="twitter.png" height="64px" width="64px"></a>
        </div>
        <form action="" name="form" id="form" method="POST">
            <div class="row input-container">
                <div class="styled-input wide">
                    <input id="name" name="name" type="text" required />
                    <label>Name</label>
                </div>
                <div class="styled-input">
                    <input id="Email" name="Email" type="text" required />
                    <label>Email</label>
                </div>
                <div class="styled-input" style="float:right;">
                    <input id="Phone" name="Phone" type="number" required />
                    <label>Phone Number</label>
                </div>
                <div class="styled-input wide">
                    <textarea id="Message" name="Message" required></textarea>
                    <label>Message</label>
                </div>
                <input type="submit" name="submit" class="btn-lrg submit-btn" value="Send Message">
            </div>
        </form>
    </div>
    <div class="ABC">Developed and Maintained by <br />ABC Club Members</div>
    <div class="AboutCards">
        <div class="card-container">
            <div class="card">
                <div class="front">
                    <div class="cover">
                        <img src="pp.png" />
                    </div>
                    <div class="user">
                        <img class="img-circle" src="myself.jpeg" />
                    </div>
                    <div class="content">
                        <div class="main">
                            <h3 class="name">M. SREE TEJA</h3>
                            <p class="profession">Projects Head</p>
                            <p class="text-center">"A Programmer Just Trying To Fix A Dent In A Universe."</p>
                        </div>
                    </div>
                </div> <!-- end front panel -->
                <div class="back">
                    <div class="header">
                        <h5 class="motto">"Tank Full of Dreams"</h5>
                    </div>
                    <div class="content">
                        <div class="main">
                            <h4 class="text-center">Job Description</h4>
                            <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Android and many others...</p>
    
                            <div class="stats-container">
                                <div class="stats">
                                    <h4>40%</h4>
                                    <p>
                                        Dedication
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>60%</h4>
                                    <p>
                                        Travelling
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>3</h4>
                                    <p>
                                        Projects
                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="footer">
                        <div class="social-links text-center">
                            <a href="https://www.instagram.com/m_sreeteja/" class="instagram"><img src="instagram.png"
                                    height="20px" width="20px"></a>
                            <a href="https://www.linkedin.com/in/sree-teja-5121aaa6/" class="LinkedIn"><img src="linkedin.png"
                                    height="20px" width="20px"></a>
                            <a href="https://twitter.com/sreeteja06" class="Twitter"><img src="twitter.png" height="20px"
                                    width="20px"></a>
                        </div>
                    </div>
                </div> <!-- end back panel -->
            </div> <!-- end card -->
        </div>
        <div class="card-container">
            <div class="card">
                <div class="front">
                    <div class="cover">
                        <img src="pp.png" />
                    </div>
                    <div class="user">
                        <img class="img-circle" src="myself.jpeg" />
                    </div>
                    <div class="content">
                        <div class="main">
                            <h3 class="name">Nivedh Vishnu</h3>
                            <p class="profession">Spoke Person</p>
                            <p class="text-center">"Just breathing to live a life."</p>
                        </div>
                    </div>
                </div> <!-- end front panel -->
                <div class="back">
                    <div class="header">
                        <h5 class="motto">"Empty goes unwanted"</h5>
                    </div>
                    <div class="content">
                        <div class="main">
                            <h4 class="text-center">Job Description</h4>
                            <p class="text-center">Web design, HTML5, CSS3, Android and many others...</p>
    
                            <div class="stats-container">
                                <div class="stats">
                                    <h4>20%</h4>
                                    <p>
                                        Alcohol
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>80%</h4>
                                    <p>
                                        Over Action 😂
                                    </p>
                                </div>
                                <div class="stats">
                                    <h4>3</h4>
                                    <p>
                                        Projects
                                    </p>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <div class="footer">
                        <div class="social-links text-center">
                            <a href="https://www.instagram.com/m_sreeteja/" class="instagram"><img src="instagram.png"
                                    height="20px" width="20px"></a>
                            <a href="https://www.linkedin.com/in/sree-teja-5121aaa6/" class="LinkedIn"><img src="linkedin.png"
                                    height="20px" width="20px"></a>
                            <a href="https://twitter.com/sreeteja06" class="Twitter"><img src="twitter.png" height="20px"
                                    width="20px"></a>
                        </div>
                    </div>
                </div> <!-- end back panel -->
            </div> <!-- end card -->
        </div>
    </div>
</body>

</html>