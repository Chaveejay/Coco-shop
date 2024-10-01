<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css\contactus.css" >
</head>
<body>
        <!------------------Header------------------------->
        <header class=headbar>       
        <!----logo------------->
        <a href="index.php" class="logo">
        PureCoco
        </a>
        
        <!------------------Navigation------------------------->
        <nav>
            <ul class = "nav_links">
                <li><a href="userdashboard.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="gallery.php">Gallery </a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="#">Login</a></li>
                <!-- <li><button class ="login-btn"> Login</button></li>            -->
            </ul>
        </nav>
           
    </header>

    
     <form action="contactfunc.php"  method ="POST" class="contact-form">

                <input type="text" class="txt" name="name" placeholder="Your Name"  required/>
               
                <input type="text"  class="txt" name="phone" placeholder="Phone Number" required/>
                
                <input type="email"  class="txt" name="email" placeholder="Email" required/>
                
                <input type="text" class="msg" name="message"  placeholder="Message" />
                
                

              <button type="submit" class="contact-btn" name="submit">
                 SEND
              </button>
</form>
              
</body>
</html>