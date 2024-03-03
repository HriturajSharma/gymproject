<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="shortcut icon" href="./Assets/favicon.png" type="image/x-icon">
  <title>Hrituraj's | Fitnex Club</title>
</head>

<body>
  <?php $base_url = "http://localhost/gym_project/myproject/" ?>
  <nav>
    <div class="nav__logo">
      <a href="#"><img src="./Assets/logo.png" alt="logo" /></a>
    </div>
    <ul class="nav__links">
      <li class="link"><a href="#">Home</a></li>
      <li class="link"><a href="#program-section">Program</a></li>
      <li class="link"><a href="#services">Service</a></li>
      <li class="link"><a href="#plans">Plans</a></li>
      <li class="link"><a href="#">Community</a></li>
    </ul>

    <div class="log">
      <button class="btn" id="mainbtn">Join Now</button>

    </div>
  </nav>
  <div class="listlink">
    <div class="loglink">
      <li><a href="<?php echo $base_url?>usersfroms/UserLogin/userlogin.php">User Login</a></li>
    </div>
    <div class="loglink">
      <!-- <li><a href="./usersfroms/admin.html">Admin Login</a></li> -->
      <li><a href="usersfroms/admin/admin.html">Admin Login</a></li>
    </div>

  </div>

  <header class="sectiwon__container header__container">
    <div class="header__content">
      <span class="bg__blur"></span>
      <span class="bg__blur header__blur"></span>
      <h4>BEST FITNESS IN THE TOWN</h4>
      <h1><span>MAKE</span> YOUR Perfect Body</h1>
      <p>
        Unleash your potential and embark on a journey towards a stronger,
        fitter, and more confident you. Sign up for 'Make Your Body Shape' now
        and witness the incredible transformation your body is capable of!
      </p>
      <button class="btn">Get Started</button>
    </div>
    <div class="header__image">
      <img src="assets/hero-banner.png" alt="header" />
    </div>
  </header>

  <section class="section__container explore__container" id="program-section">
    <div class="explore__header">
      <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
      <div class="explore__nav">
        <span><i class="ri-arrow-left-line" id="left-row"></i></span>
        <span><i class="ri-arrow-right-line" id="right-row"></i></span>
      </div>
    </div>

    <div class="explore__grid">
      <div class="explore__card">
        <span><i class="ri-boxing-fill"></i></span>
        <h4 class="header">Strength</h4>
        <p class="peragraph">
          Embrace the essence of strength as we delve into its various
          dimensions physical,explore__grid, and emotional.
        </p>
        <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="explore__card">
        <span><i class="ri-heart-pulse-fill"></i></span>
        <h4>Physical Fitness</h4>
        <p>
          It encompasses a range of activities that improve health, strength,
          flexibility, and overall well-being.
        </p>
        <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="explore__card">
        <span><i class="ri-run-line"></i></span>
        <h4>Fat Lose</h4>
        <p>
          Through a combination of workout routines and expert guidance, we'll
          empower you to reach your goals.
        </p>
        <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="explore__card">
        <span><i class="ri-shopping-basket-fill"></i></span>
        <h4>Weight Gain</h4>
        <p>
          Designed for individuals, our program offers an effective approach
          to gaining weight in a sustainable manner.
        </p>
        <a href="#">Join Now <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </section>

  <section class="section__container class__container">
    <div class="class__image">
      <span class="bg__blur"></span>
      <img src="./Assets/bodybuilder.jpg" alt="class" class="class__img-1" />
      <img src="./Assets/bodybuilder2.webp" alt="class" class="class__img-2" />
    </div>
    <div class="class__content">
      <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
      <p>
        Led by our team of expert and motivational instructors, "The Class You
        Will Get Here" is a high-energy, results-driven session that combines
        a perfect blend of cardio, strength training, and functional
        exercises. Each class is carefully curated to keep you engaged and
        challenged, ensuring you never hit a plateau in your fitness
        endeavors.
      </p>
      <button class="btn">Book A Class</button>
    </div>
  </section>

  <section class="section__container join__container" id="services">
    <h2 class="section__header">WHY JOIN US ?</h2>
    <p class="section__subheader">
      Our diverse membership base creates a friendly and supportive
      atmosphere, where you can make friends and stay motivated.
    </p>
    <div class="join__image">
      <img src="./Assets/bodybuilder7.webp" alt="Join" />
      <div class="join__grid">
        <div class="join__card">
          <span><i class="ri-user-star-fill"></i></span>
          <div class="join__card__content">
            <h4>Personal Trainer</h4>
            <p>Unlock your potential with our expert Personal Trainers.</p>
          </div>
        </div>
        <div class="join__card">
          <span><i class="ri-vidicon-fill"></i></span>
          <div class="join__card__content">
            <h4>Practice Sessions</h4>
            <p>Elevate your fitness with practice sessions.</p>
          </div>
        </div>
        <div class="join__card">
          <span><i class="ri-building-line"></i></span>
          <div class="join__card__content">
            <h4>Good Management</h4>
            <p>Supportive management, for your fitness success.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container price__container">
    <h2 class="section__header" id="plans">OUR PRICING PLAN</h2>
    <p class="section__subheader">
      Our pricing plan comes with various membership tiers, each tailored to
      cater to different preferences and fitness aspirations.
    </p>
    <div class="price__grid">
      <div class="price__card">
        <div class="price__card__content">
          <h4>Basic Plan</h4>
          <h3>$16</h3>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Smart workout plan
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            At home workouts
          </p>
        </div>
        <button class="btn price__btn">Join Now</button>
      </div>
      <div class="price__card">
        <div class="price__card__content">
          <h4>Weekly Plan</h4>
          <h3>$25</h3>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            PRO Gyms
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Smart workout plan
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            At home workouts
          </p>
        </div>
        <button class="btn price__btn">Join Now</button>
      </div>
      <div class="price__card">
        <div class="price__card__content">
          <h4>Monthly Plan</h4>
          <h3>$45</h3>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            ELITE Gyms & Classes
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            PRO Gyms
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Smart workout plan
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            At home workouts
          </p>
          <p>
            <i class="ri-checkbox-circle-line"></i>
            Personal Training
          </p>
        </div>
        <button class="btn price__btn">Join Now</button>
      </div>
    </div>
  </section>

  <section class="review">
    <div class="section__container review__container">
      <span><i class="ri-double-quotes-r"></i></span>
      <div class="review__content">
        <h4>MEMBER REVIEW</h4>
        <p>
          What truly sets this gym apart is their expert team of trainers. The
          trainers are knowledgeable, approachable, and genuinely invested in
          helping members achieve their fitness goals. They take the time to
          understand individual needs and create personalized workout plans,
          ensuring maximum results and safety.
        </p>
        
        <div class="review__rating">
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-half-fill"></i></span>
        </div>
        <div class="review__footer">
          <div class="review__member">
            <img src="./Assets/member.jpg" alt="member" />
            <div class="review__member__details">
              <h4>Shiva Sharma</h4>
              <p>FrontEnd Developer</p>
            </div>
          </div>

         
        </div>
      </div>
    </div>
    <!-- <div class="section__container review__container">
      <span><i class="ri-double-quotes-r"></i></span>
      <div class="review__content">
        <h4>MEMBER REVIEW</h4>
        <p>
          What truly sets this gym apart is their expert team of trainers. The
          trainers are knowledgeable, approachable, and genuinely invested in
          helping members achieve their fitness goals. They take the time to
          understand individual needs and create personalized workout plans,
          ensuring maximum results and safety.
        </p>
        
        <div class="review__rating">
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-fill"></i></span>
          <span><i class="ri-star-half-fill"></i></span>
        </div>
        <div class="review__footer">
          <div class="review__member">
            <img src="./Assets/member.jpg" alt="member" />
            <div class="review__member__details">
              <h4>Shiva Sharma</h4>
              <p>FrontEnd Developer</p>
            </div>
          </div>

          
        </div>
      </div>
    </div> -->
  </section>
  <div class="review__nav">
    <span class="review-left"><i class="ri-arrow-left-line"></i></span>
    <span class="review-right"><i class="ri-arrow-right-line"></i></span>
  </div>

  <template class="temp-review">
    
  </template>

  <footer class="section__container footer__container">
    <span class="bg__blur"></span>
    <span class="bg__blur footer__blur"></span>
    <div class="footer__col">
      <div class="footer__logo"><img src="assets/logo.png" alt="logo" /></div>
      <p>
        Take the first step towards a healthier, stronger you with our
        unbeatable pricing plans. Let's sweat, achieve, and conquer together!
      </p>
      <div class="footer__socials">
        <a href="#"><i class="ri-facebook-fill"></i></a>
        <a href="#"><i class="ri-instagram-line"></i></a>
        <a href="#"><i class="ri-twitter-fill"></i></a>
      </div>
    </div>
    <div class="footer__col">
      <h4>Company</h4>
      <a href="#">Business</a>
      <a href="#">Franchise</a>
      <a href="#">Partnership</a>
      <a href="#">Network</a>
    </div>
    <div class="footer__col">
      <h4>About Us</h4>
      <a href="#">Blogs</a>
      <a href="#">Security</a>
      <a href="#">Careers</a>
    </div>
    <div class="footer__col">
      <h4>Contact</h4>
      <a href="#">Contact Us</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Conditions</a>
      <a href="#">BMI Calculator</a>
    </div>
  </footer>


  
  <div class="footer__bar">
    Copyright © 2023 Hrituraj Sharma. All rights reserved.
  </div>
  <script src="script.js"></script>


</body>

</html>