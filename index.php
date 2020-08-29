<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <title>Dawid Rentkowski - Web Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,700|Saira:300,400&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
</head>

<body>
  <header>
    <div class="welcome">
      <p>witaj!</p>
      <h1>jestem Dawid Rentkowski</h1>
      <h2>web developer - freelancer</h2>
      <button>Zobacz moje portfolio</button>
    </div>
    <img src="./images/photo1.png" alt="Zdjęcie Dawid Rentkowski">
  </header>
  <section class="features clearfix">
    <h1>Tworzę strony internetowe</h1>
    <div class="feature">
      <img src="./images/services1.png" alt="loga html js i css">
      <h2>Na ogół ładne</h2>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum earum maiores dolores fugit, soluta? Sed repudiandae, fugit provident suscipit cum architecto asperiores, sequi obcaecati, alias sunt ea. Soluta, rerum, perspiciatis.</p>
    </div>
    <div class="feature">
      <img src="./images/services2.png" alt="loga html js i css">
      <h2>Zoptymalizowanie pod kątem wyszukiwarek internetowych XD</h2>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum earum maiores dolores fugit, soluta? Sed repudiandae, fugit provident suscipit cum architecto asperiores, sequi obcaecati, alias sunt ea. Soluta, rerum, perspiciatis.</p>
    </div>
    <div class="feature">
      <img src="./images/services3.png" alt="loga html js i css">
      <h2>Świetnie wyglądające na urzedziach mobilnych</h2>
      <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum earum maiores dolores fugit, soluta? Sed repudiandae, fugit provident suscipit cum architecto asperiores, sequi obcaecati, alias sunt ea. Soluta, rerum, perspiciatis.</p>
    </div>

  </section>
  <section class="portfolio">
    <h1>Projekty, z których jestem dumny</h1>
    <div class="project clearfix">
      <div class="web">
        <img src="./images/portfolio1.jpg" alt="portfolio przykład 1">
      </div>
      <div class="about">
        <h2>Nic</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed doloremque quidem illo doloribus ipsa, facere, quae eligendi debitis. A debitis totam amet aperiam enim. Qui velit corrupti consequatur nihil est.</p>
      </div>
    </div>
    <div class="project clearfix">
      <div class="web">
        <img src="./images/portfolio2.jpg" alt="portfolio przykład 2">
      </div>
      <div class="about">
        <h2>Nadal nic</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed doloremque quidem illo doloribus ipsa, facere, quae eligendi debitis. A debitis totam amet aperiam enim. Qui velit corrupti consequatur nihil est.</p>
      </div>
    </div>
    <div class="project clearfix">
      <div class="web">
        <img src="./images/portfolio3.jpg" alt="portfolio przykład 3">
      </div>
      <div class="about">
        <h2>Znowu nic</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed doloremque quidem illo doloribus ipsa, facere, quae eligendi debitis. A debitis totam amet aperiam enim. Qui velit corrupti consequatur nihil est.</p>
      </div>
    </div>
    <div class="project clearfix">
      <div class="web">
        <img src="./images/portfolio4.jpg" alt="portfolio przykład 4">
      </div>
      <div class="about">
        <h2>Porcja niczego</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed doloremque quidem illo doloribus ipsa, facere, quae eligendi debitis. A debitis totam amet aperiam enim. Qui velit corrupti consequatur nihil est.</p>
      </div>
    </div>
  </section>
  <section class="slogan">
    <div class="bg">
      <h1>Moje życiowe motto</h1>
      <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga id architecto harum sint at alias. </p>
      <p class="author">Jan Nowak</p>
    </div>
  </section>

  <section class="hobby clearfix">
    <h1>W wolnym czasie uwielbiam</h1>
    <div class="item">
      <p>Chodzić po górach</p>
    </div>
    <div class="item">
      <p>Patrzeć wysoko</p>
    </div>
    <div class="item">
      <p>Zmieniać świat</p>
    </div>
    <div class="item">
      <p>Jeść owoce i warzywa</p>
    </div>
  </section>

  <section class="contact">
    <h1>Skontaktuj się ze mną</h1>
    <div class="wrap clearfix">

      <form>
        <input type="text" placeholder="Twoje imię">
        <input type="text" placeholder="Email">
        <textarea placeholder="Twoja wiadomość"></textarea>
        <button>Wyślij wiadomość</button>
      </form>
      <div class="socials">
        <div class="social clearfix"><img src="./images/contact1.png" alt="kontakt"><span>mail@domena.pl</span></div>
        <div class="social clearfix"><img src="./images/contact2.png" alt="kontakt"><span>654654654</span></div>
        <div class="social clearfix"><img src="./images/contact3.png" alt="kontakt"><span>dr</span></div>
        <div class="social clearfix"><img src="./images/contact4.png" alt="kontakt"><span>@dr</span></div>
        <div class="social clearfix"><img src="./images/contact5.png" alt="kontakt"><span>dr</span></div>

      </div>

    </div>


  </section>

  <footer>&copy; Dawid Rentkowski</footer>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?> 
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?> 
</body>

</html>
