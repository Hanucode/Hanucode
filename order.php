<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>git.hab hanu project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="httpd://fonts.googleapis.com/css2?
    family=poppins:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
</head>
<body>
    <section class="sub-header-4">
        <nav>
            <a href="index.html" style="text-decoratin: none;">
                <h1 style="color: #fff; font-size: 28px;" class="f1" >hanu<span style="color: red;">Code</span><span style="color: #f44336;">.</span></h1></a>
            <div class="nav-links" id="navLinks"> 
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">ORDER NOW</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
        <h1 class="h1" style="color: red;">ORDER NOW.</h1>
    </section>
    <section class="facilites">
        <h1 class="f1">Enter <span style="color: green;">Your</span> Delits for <span style="color: red;">Order.</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>
<section class="contact-us">
        <div class="row">
            <div class="contact-col">
                <div>
                    <i class="fa-solid fa-house"></i>
                    <span>
                        <h5>Doltpur Road, abc Building</h5>
                        <p>Guglehar 177208, IN </p>
                    </span>
                </div> 
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <span>
                        <h5>+91 7018584903</h5>
                        <p>Guglehar 177208, IN </p>
                    </span>
                </div> 
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <span>
                    <h5>sushnatkoon501@gmail.com</h5>
                        <p>Email us your query </p>
                    </span>
                </div> 
                <div>
                <i class="fa-solid fa-user"></i>
                    <span>
                    <h5>_hanu_870</h5>
                        <p>Email us your query </p>
                    </span>
                </div> 
                <div>
                    <i class="fa-solid fa-users"></i>
                    <span>
                    <h5>Delivery Boys</h5>
                        <p>Email us your query </p>
                    </span>
                </div> 
            </div>
            <div class="contact-col">
            <form action="order.php" method="post">
                    <input type="text" name="name" placeholder="enter your name" required>
                    <input type="email" name="email" placeholder="enter your email address" required>
                    <input type="text" name="number" placeholder="enter your Mobile Number" required>
                    <input type="text" name="food" placeholder="enter your Food Name." required>
                    <input type="text" name="loc" placeholder="enter your Location." required>
                    <input type="number" name="pin" placeholder="enter your pin" required>                    
                    <button type="submit" name="submit" class="hero-btn red-btn">Send Message</button>
                </form>
            </div>

        </div>
    </section>
    <footer class="footer">
    <h4 class="f2">About Us</h4>
    <p class="f2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium dolor sit amet consectetur adipisicing elit. Praesentium 
        fugiat <br> explicabo dolorum facilis quisquam labore maiores rem repellendus vero nisi.</p>
<div class="icons">
    <i class="fa-brands fa-facebook"></i>
    <i class="fa-brands fa-square-twitter"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-linkedin"></i>
</div>
<p>Made with <i class="fa-solid fa-heart"></i> by Hanu code sushnatkoon501@gmail.com <a href="login.php">admin login</a></p>
</footer>





    <!-- js for menu -->
    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    require('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $food = $_POST['food'];
    $loc = $_POST['loc'];
    $pin = $_POST['pin'];
    $qry="INSERT INTO `data`(`name`, `email`, `num`, `food`, `loc`, `pin`)
     VALUES ('$name','$email','$number','$food','$loc','$pin')";
     $run = mysqli_query($con,$qry);
     if ($run == true)
     {
        ?>
        <script>
            alert('Data send Successfully.');
            window.open('blog.html');
        </script>
        <?php
     }
}
?>