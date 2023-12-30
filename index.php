<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
   
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div >
   
    <header class="main" >
        <nav>
        <a href="#" class="logo">
                <img src="logo.png"/>
            </a>
            <ul id="MenuItems">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Products </a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php"> <img src="acc.png"  width="30px" height="30px"/></a></li>
            </ul>
           
            
  
           
            <a href="cart.html"><img src="https://i.ibb.co/PNjjx3y/cart.png"  width="30px" height="30px" /></a>
            <img src="menu.png"  class="menu-icon" onclick="menutoggle(event)" />
            
            <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
    <div class="user-info">
        <img src="logo.png" alt="">
        <h2>MEN'SSUITS</h2>
</div>
    <hr>
    <a href="#" class="sub-menu-link">
        <img src="suit.jpeg">
        <p>SUITS</p>
        <span></span>
    </a>
    <a href="#" class="sub-menu-link">
        <img src="pants.jpeg">
        <p>PANTS</p>
        <span></span>
    </a>
    <a href="#" class="sub-menu-link">
        <img src="tie.jpeg">
        <p>Ties</p>
        <span></span>
    </a>
    <a href="#" class="sub-menu-link">
        <img src="shoes.jpeg">
        <p>Shoes</p>
        <span></span>
    </a>
</div>

</div>

      </nav>
     
    </header>
   
    <div class="main-heading">
            <h1>MEN'S SUITS </h1>
            <p>Luxe intemporel, style moderne.Dress for success with MEN'S SUITS. Elevate your style with our impeccable men's suits timeless elegance tailored just for you. Shop now!</p>
            <a class="main-btn" href="#">​DÉCOUVRIR LES NOUVAUX MODÉLES</a>
        </div>
        </div>
    <h2 class="product-title">Featured Products</h2>
    <div class="row">
    <div class="col-4">
      <a href="#"><img src="7.jpeg" alt="" /></a>
      <h4><a href="#">Slim Fit Suit</a></h4>
      <button class="rating-g"><p>600.00 $</p></button>
    </div>

    <div class="col-4">
    <a href="#"><img src="2.jpeg" alt="" /></a>
      <h4><a href="#">Classic Fit Suit</a></h4>
      <button class="rating-g"><p>700.00 $</p></button>
      
    </div>

    <div class="col-4">
    <a href="#"><img src="3.jpeg" alt="" /></a>
      <h4><a href="#">Modern Fit Suit</a></h4>
      
      <button class="rating-g"><p>900.00 $</p></button>
    </div>
    <div class="col-4">
    <a href="#"><img src="4.jpeg" alt="" /></a>
      <h4><a href="#">Classic Fit Suit</a></h4>
      <button class="rating-g"><p>1000.00 $</p></button>
  
    
    </div>
    <div class="col-4">
    <a href="#"><img src="5.jpeg" alt="" /></a>
      <h4><a href="#">Modern Fit Suit</a></h4>
      <button class="rating-g"><p>1500.00 $</p></button>
    </div>
    <div class="col-4">
    <a href="#"> <img src="6.jpeg" alt="" /></a>
      <h4><a href="#">Slim Fit Suit</a></h4>
      <button class="rating-g"><p>2100.00 $</p></button>
      
    </div>

    <section class="about">
        <div class="about-img">
        <a href="#"><img src="about.jpeg"></a>
        </div>
        <div class="about-text">
            <h2>Elegance Captured</h2>
            <p>Immerse yourself in a vision of refinement. Our collection combines <br>
               modern sophistication with timeless allure, showcasing impeccable <br>
               craftsmanship and distinctive design. Discover a world where style<br>
               knows no bounds, inviting you to elevate your presence in every detail.<br>
               Welcome to a world of fashion like no other,where each piece tells<br>
              a story of enduring elegance.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>


    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>For question.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here...."></textarea>
            <button class="main-btn contact-btn" type="submit">Envoyer</button>
        </form>
    </footer>

   

    <div class="footer">
           <div class="row">
          <div class="footer1">
              <h3>Support</h3>
            <ul>
            <a href=""><li>Product Help</li></a>
              <a href=""><li>Customer Care</li></a>
              <a href=""><li>Authorized Service</li></a>
            </ul>
          </div>
          
          <div class="footer2">
            <h3>Follow us</h3>
            <ul>
            <a href=""> <img src="ins.png" alt=""></li></a>
              <a href="https://www.facebook.com/people/MENS-SUITS/61554419798253/"><li><img src="fb.png" alt=""></li></li></a>
              <a href="https://www.linkedin.com/company/men-s-suits/"><li><img src="lk.png" alt=""></li></li></a>
           
            </ul>
          </div>
          <div class="footer3">
          <a href="">El Khadra, 14 Bd Al Massira Al Khadra, Casablanca 20590, Casablanca, Morocco.<br>Tel:+212 5234-00969<br>Email:menssuits@gmail.com</a>
        </div>
        </div>
          
       <hr>
          <div class="copyright">
            <br>
            &copy; 2023 - MEN'S SUITS
          </div>
        </div>
        
        <script>
  let subMenu= document.getElementById("subMenu");

  function menutoggle() {
    subMenu.classList.toggle("open-menu");
    if (subMenu.classList.contains("open-menu")) {
      
      const posX = event.clientX;
      const posY = event.clientY;
      subMenu.style.left = `${posX}px`;
      subMenu.style.top = `${posY}px`;

     
      document.body.appendChild(subMenu);
    } else {
    
      document.body.removeChild(subMenu);
    }
  }
</script>




</body>
</html>