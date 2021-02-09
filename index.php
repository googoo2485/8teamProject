<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>8VER</title>
    <meta
      name="description"
      content="8ver blockchain team"
    />
    <meta name="author" content="8VER" />
    <link rel="icon" type="image/png" href="imgs/favicon.png" />
    <script
      src="https://kit.fontawesome.com/9eb162ac0d.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/light_main header!.css"/>
  </head>
  <body>
    <!-- Navbar -->
    <nav id="navbar">
      <div class="navbar__logo">
        <i class="fab fa-diaspora"></i>
        <img src="./php/img/nav_logo.png" alt="logo" class="nav-logo">
      </div>
      <ul class="navbar__menu">
        <li class="navbar__menu__item" data-link="#home"><a href="./php/light/community.php"> Community</a></li>
        <li class="navbar__menu__item" data-link="#about"><a href="./php/light/news.php"> News</a></li>
        <li class="navbar__menu__item" data-link="#skills"><a href="./php/light/light_game.php">Coin</a></li>
        <li class="navbar__menu__item" data-link="#work">Information</li>
        <li class="navbar__menu__item active" data-link="#testimonials"><a href="./php/sg/view.php">post</a></li>
        <li class="navbar__menu__item active" data-link="#contact"><a href="./php/light/login.php">Login</a></li>
      </ul>
      <!-- Toggle button -->
      <button class="navbar__toggle-btn">
        <i class="fas fa-bars"></i>
      </button>
    </nav>

    <!-- Home -->
    <section id="home">
      <div class="home__container">
    
        <br>
        <h1 class="home__title">Here's The World's Best Blockchain Community <br>You can experience.
        </h1>
        <h3 class="home__description">
          A lot of reliable information - something that will benefit you.
         </h3>
         
       <br><br><br><br><br><br>
  
      </div>
    </section>


      <!-- news -->
      <section id="work" class="section">
        <div class="section__container">
         <h1>News</h1>
         <div class="work__categories">
           <button class="category__btn selected" data-filter="*">
             All <span class="category__count">8</span>
           </button>
           <button class="category__btn" data-filter="front-end">
             Blockchain <span class="category__count">3</span>
           </button>
           <button class="category__btn" data-filter="back-end">
             Coin <span class="category__count">3</span>
           </button>
           <button class="category__btn" data-filter="mobile">
             Mining <span class="category__count">2</span>
           </button>
         </div>
         <div class="work__projects">
           <a href="" class="project" target="blank" data-type="front-end">
             <img
               src="./php/img/bitcoin.png"
               alt="bitcoin"
               class="project__img"
             />
             <div class="project__description">
               <h3>Bit coin</h3>
               <span>All information about Bitcoin</span>
             </div>
           </a>
           <a
             href=""
             class="project"
             data-type="front-end"
             target="blank"
           >
             <img
               class="project__img"
               src="./php/img/cme.jpg"
               alt="navbar"
             />
             <div class="project__description">
               <h3>CME</h3>
               <span>All information about CME</span>
             </div>
           </a>
           <a
             href=""
             class="project"
             data-type="front-end"
             target="blank"
           >
             <img class="project__img" src="./php/img/ether.png" alt="navbar" />
             <div class="project__description">
               <h3>Etherium</h3>
               <span>All information about Ehterium</span>
             </div>
           </a>
           <a href="" class="project" data-type="back-end">
             <img class="project__img" src="./php/img/grayscale.png" alt="" />
             <div class="project__description">
               <h3>Grayscale</h3>
               <span>All information about Grayscale</span>
             </div>
           </a>
           <a href="" class="project" data-type="back-end">
             <img class="project__img" src="./php/img/klaytn.png" alt="" />
             <div class="project__description">
               <h3>klaytn</h3>
               <span>All information about Klaytn</span>
             </div>
           </a>
           <a href="" class="project" data-type="mobile">
             <img class="project__img" src="./php/img/polkadot.png" alt="" />
             <div class="project__description">
               <h3> Polkadot</h3>
               <span>All information about Polkadot</span>
             </div>
           </a>
           <a href="" class="project" data-type="mobile">
             <img class="project__img" src="./php/img/swarm.png" alt="" />
             <div class="project__description">
               <h3>Swarm</h3>
               <span>All information about Swarm</span>
             </div>
           </a>
           <a href="" class="project" data-type="mobile">
             <img class="project__img" src="./php/img/doge.png" alt="" />
             <div class="project__description">
               <h3>Doge</h3>
               <span>All information about Doge</span>
             </div>
           </a>
         </div>
        </div>
       </section>


       <!-- page -->
    <section id="page" class="section">
      <div class="flex-container">
        <div class="flex-item">

          <img
          src="./php/img/page.png"
          alt="page"
          class="testimonial-avatar"
        />
       </div>
        
      </div>
       </section>




       <!-- Affiliate -->
    <section id="testimonials" class="section">
      <div class="section__container">
       <h1>Affiliate</h1>
       <div class="testimonials">
         <div class="testimonial">
           
           <div class="testimonial__speech-bubble">
             <p>
              Bithumb is a South Korean cryptocurrency exchange. Founded in 2014 by Javier Sim, Bithumb Korea is the most influential digital currency exchange in the country, having 8 million registered users, 1M mobile app users and a current cumulative transaction volume has exceeded 1 trillion US dollars.
             </p>
             <p class="name"><a href="">Bithumb</a></p>
           </div>
         </div>
         <div class="testimonial">
           <div class="testimonial__speech-bubble">
             <p>
              Binance is a cryptocurrency exchange that provides a platform for trading various cryptocurrencies. As of January 2018, Binance was the largest cryptocurrency exchange in the world in terms of trading volume. Binance was founded by Changpeng Zhao, a developer who had previously created high frequency trading software.
             </p>
             <p class="name"><a href="">Binance</a> </p>
           </div>
          
         </div>
       </div>
      </div>
       </section>


        <!-- Contact -->
    <section id="contact" class="section">
      <h1 class="contact__title">8VER</h1>
      <h2 class="contact__email">    
        ABOUT /  TERMS OF SERVICE  /  FAQ  /  PRIVACY POLICY
      </h2>
      <div class="contact__links">
        <a href="#" target="_blank">
          <i class="fa fa-linkedin-square"></i>
        </a>
      </div>
      <p class="contact__rights">
      8VER Blockchain Community - All rights reserved
      </p>
    </section>
  </body>
</html>
