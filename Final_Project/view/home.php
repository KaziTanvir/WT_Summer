<?php
    session_start();
    $_SESSION['text']="Login/Register";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home - Special Service provider</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body>
    <table width= "100%">
        <tr>
            <td colspan="3" align="center"> 
                <div class="navigation-bar">
                    <ul class="ul">
                        <li class="nav-li">Special Service Provider</li>
                        <li class="nav-li"><a href="feedback.php">Feedback</a></li>
                        <li class="nav-li"><a href="login.php"><?php echo $_SESSION["text"];?></a></li>
                    </ul>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <img src="../images/home-banner.webp" alt="Home Banner">
            </td>
        </tr>
        <tr>
            <td colspan="3"><h2>For your home</h2></td>
        </tr>
        <tr>
            <td>
                <a href=""><img src="../images/plumbing.webp" alt=""></a>
                <br>
                <h3>Plumbing Service</h3>
            </td>
            <td>
                <a href=""><img src="../images/painting.webp" alt=""></a>
                <br>
                <h3>Painting Service</h3>
            </td>
            <td>
                <a href=""><img src="../images/cleaning.webp" alt=""></a>
                <br>
                <h3>Cleaning Service</h3>
            </td>
        </tr>
        <tr>
            <td colspan="3"><h2>Trending now</h2></td>
        </tr>
        <tr>
            <td>
                <a href=""><img src="../images/Meal.webp" alt=""></a>
                <br>
                <h3>Meals Service</h3>
            </td>
            <td>
                <a href=""><img src="../images/ac.webp" alt=""></a>
                <br>
                <h3>AC Repairing</h3>
            </td>
            <td>
                <a href=""><img src="../images/cleaning.webp" alt=""></a>
                <br>
                <h3>Cleaning Service</h3>
            </td>
        </tr>
        <tr>
            <td colspan="3"><center><h1>About Us</h1></center></td>
        </tr>
        <tr>
            <td><h2>15,000+</h2><br>Service Provider</td>
            <td><h2>2,00,000+</h2><br>Order Served</td>
            <td><h2>1,00,000+</h2><br>5 Star Recieved</td>
        </tr>
        <tr>
            <td align="center">
                <br>
                <img src="../images/about-us.webp" width="500px" alt="">
            </td>
            <td  colspan="2">
                <ol>
                    <li>
                    <h3>Select the Service</h3> 
                    Pick the service you are looking for- from the website or the app.
                    </li>
                    <li>
                    <h3>Pick your schedule</h3> 
                    Pick your convenient date and time to avail the service. Pick the service provider based on their rating.
                    </li>
                    <li>
                    <h3>Place Your Order & Relax</h3>
                    Review and place the order. Now just sit back and relax. We’ll assign the expert service provider’s schedule for you.
                    </li>
                </ol>
            </td>
        </tr>
        <tr>
            <td align="center">
                <h4>CONTACT</h4>
                <ul>
                    <li><a href="tel:+16516">16516</a></li>
                    <li><a href="mailto:info@sheba.xyz">info@sheba.xyz</a></li>
                    <li><h4>Corporate Office</h4> <br>House # 57, Road # 25, Block - A, Banani, Dhaka 1212 </li>
                </ul>
            </td>
            <td>
                <h4>OTHER PAGES</h4>
                <ul>
                    <li>Blog</li>
                    <li>Help</li>
                    <li>Terms of use</li>
                    <li>Privacy Policy</li>
                    <li>Sitemap</li>
                </ul>
            </td>
            <td>
                <h4>COMPANY</h4>
                <ul>
                    <li>sManager</li>
                    <li>sBusiness</li>
                    <li>sDelivery</li>
                    <li>sBondhu</li>
                </ul>
            </td>
        </tr>
    </table>
</body>
</html>